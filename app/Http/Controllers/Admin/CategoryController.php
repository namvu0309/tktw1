<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Hiển thị danh sách danh mục
     */
    public function index(Request $request)
    {
        $categories = Category::with('parent')
            ->orderBy('id', 'desc');

        if ($request->has('search') && $request->search != '') {
            $categories = $categories->where('name', 'like', '%' . $request->search . '%');
        }

        $categories = $categories->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Hiển thị form tạo danh mục mới
     */
    public function create()
    {
        $parentCategories = Category::whereNull('parent_id')->get();
        return view('admin.categories.create', compact('parentCategories'));
    }

    /**
     * Lưu danh mục mới vào database
     */
    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            $validated = $request->validated();

            // Tạo slug từ tên và đảm bảo duy nhất
            $slug = Str::slug($validated['name']);
            $count = 1;

            while (Category::where('slug', $slug)->exists()) {
                $slug = Str::slug($validated['name']) . '-' . $count;
                $count++;
            }

            $validated['slug'] = $slug;

            // Xử lý is_active
            $validated['is_active'] = $request->has('is_active');

            // Xử lý upload ảnh
            if ($request->hasFile('image')) {
                $uploadPath = public_path('uploads/categories');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/categories'), $imageName);
                $validated['image'] = 'uploads/categories/' . $imageName;
            }

            Category::create($validated);

            DB::commit();
            return redirect()->route('admin.categories.index')
                ->with('success', 'Danh mục đã được tạo thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Lỗi khi tạo danh mục: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra khi tạo danh mục: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Hiển thị chi tiết danh mục
     */
    public function show(Category $category)
    {
        $category->load(['parent', 'children', 'products']);
        return view('admin.categories.detail', compact('category'));
    }

    /**
     * Hiển thị form chỉnh sửa danh mục
     */
    public function edit(Category $category)
    {
        // Load cả parent và children
        $category->load(['children', 'parent']);

        $parentCategories = Category::whereNull('parent_id')
            ->where('id', '!=', $category->id)
            ->get();

        return view('admin.categories.edit', compact('category', 'parentCategories'));
    }

    /**
     * Cập nhật danh mục trong database
     */
    public function update(CategoryRequest $request, Category $category)
    {
        try {
            DB::beginTransaction();

            $data = $request->validated();

            // Lưu trạng thái cũ để so sánh
            $oldStatus = $category->is_active;

            // Kiểm tra và tạo slug duy nhất
            if ($data['name'] !== $category->name) {
                $slug = Str::slug($data['name']);
                $count = 1;

                while (Category::where('slug', $slug)
                    ->where('id', '!=', $category->id)
                    ->exists()
                ) {
                    $slug = Str::slug($data['name']) . '-' . $count;
                    $count++;
                }

                $data['slug'] = $slug;
            }

            // Xử lý trạng thái
            $data['is_active'] = $request->boolean('is_active');

            // Xử lý upload ảnh mới nếu có
            if ($request->hasFile('image')) {
                // Xóa ảnh cũ nếu có
                if ($category->image && file_exists(public_path($category->image))) {
                    unlink(public_path($category->image));
                }

                $uploadPath = public_path('uploads/categories');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/categories'), $imageName);
                $data['image'] = 'uploads/categories/' . $imageName;
            }

            // Loại bỏ các trường không cần thiết từ $data
            $updateData = array_filter($data, function ($key) {
                return in_array($key, [
                    'name',
                    'slug',
                    'description',
                    'parent_id',
                    'image',
                    'is_active'
                ]);
            }, ARRAY_FILTER_USE_KEY);

            // Cập nhật danh mục
            $category->update($updateData);

            // Xử lý danh mục con nếu có
            if (isset($data['children'])) {
                $category->children()->sync($data['children']);
            }

            // Nếu trạng thái thay đổi, cập nhật trạng thái của tất cả sản phẩm trong danh mục
            if ($oldStatus !== $data['is_active']) {
                // Cập nhật sản phẩm trực tiếp trong danh mục này
                $category->products()->update([
                    'status' => $data['is_active'] ? 'in_stock' : 'out_of_stock'
                ]);

                // Nếu có danh mục con, cập nhật cả sản phẩm trong danh mục con
                $childrenIds = $category->children()->pluck('id')->toArray();
                if (!empty($childrenIds)) {
                    DB::table('products')
                        ->whereIn('category_id', $childrenIds)
                        ->update([
                            'status' => $data['is_active'] ? 'in_stock' : 'out_of_stock',
                            'updated_at' => now()
                        ]);
                }

                // Log hành động cập nhật trạng thái
                Log::info('Đã cập nhật trạng thái sản phẩm theo danh mục', [
                    'category_id' => $category->id,
                    'old_status' => $oldStatus,
                    'new_status' => $data['is_active'],
                    'affected_products' => $category->products()->count()
                ]);
            }

            DB::commit();

            return redirect()
                ->route('admin.categories.index')
                ->with('success', 'Danh mục đã được cập nhật thành công. ' .
                    ($oldStatus !== $data['is_active'] ? 'Trạng thái của các sản phẩm cũng đã được cập nhật.' : ''));

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Lỗi khi cập nhật danh mục: ' . $e->getMessage());
            return redirect()
                ->back()
                ->with('error', 'Có lỗi xảy ra khi cập nhật danh mục: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Xóa danh mục khỏi database
     */
    public function destroy(Request $request, Category $category)
    {
        try {
            DB::beginTransaction();

            // Kiểm tra có sản phẩm không
            $productsCount = $category->products()->count();
            $hasChildren = $category->children()->exists();

            // Nếu có danh mục con, không cho phép xóa
            if ($hasChildren) {
                throw new \Exception('Không thể xóa danh mục này vì có danh mục con.');
            }

            // Kiểm tra force delete flag từ request
            $forceDelete = $request->input('force_delete', false);

            if ($productsCount > 0 && !$forceDelete) {
                // Nếu có sản phẩm và không phải force delete, trả về JSON response
               
            }

            // Nếu force delete hoặc không có sản phẩm, tiến hành xóa
            if ($forceDelete) {
                // Xóa tất cả sản phẩm trong danh mục
                $category->products()->each(function ($product) {
                    // Xóa ảnh của sản phẩm
                    foreach ($product->images as $image) {
                        if (file_exists(public_path($image->image_path))) {
                            unlink(public_path($image->image_path));
                        }
                        $image->delete();
                    }
                });
                $category->products()->delete();
            }

            // Xóa ảnh của danh mục nếu có
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }

            // Xóa danh mục
            $category->delete();

            DB::commit();



            return redirect()->route('admin.categories.index')
                ->with('success', 'Danh mục đã được xóa thành công.');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Lỗi khi xóa danh mục: ' . $e->getMessage());



            return redirect()->route('admin.categories.index')
                ->with('error', $e->getMessage());
        }
    }
}
