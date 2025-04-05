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

            DB::commit();
            return redirect()->route('admin.categories.index')
                ->with('success', 'Danh mục đã được cập nhật thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Lỗi khi cập nhật danh mục: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra khi cập nhật danh mục: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Xóa danh mục khỏi database
     */
    public function destroy(Category $category)
    {
        try {
            DB::beginTransaction();

            if ($category->products()->exists()) {
                throw new \Exception('Không thể xóa danh mục này vì có sản phẩm đang sử dụng.');
            }

            if ($category->children()->exists()) {
                throw new \Exception('Không thể xóa danh mục này vì có danh mục con.');
            }

            // Xóa ảnh nếu có
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }

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
