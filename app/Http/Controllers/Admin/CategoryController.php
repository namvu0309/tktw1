<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
        $categories = Category::with('parent')->orderBy('id', 'desc')->paginate(5);
        if ($request->has('search')) {
            $categories->where('name', 'like', '%' . $request->search . '%');
        }
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Hiển thị form tạo danh mục mới
     */
    public function create()
    {
        $parentCategories = Category::where('parent_id', null)->get();
        return view('admin.categories.create', compact('parentCategories'));
    }

    /**
     * Lưu danh mục mới vào database
     */
    public function store(CategoryRequest $request)
    {
        try {
            $validated = $request->validated();

            // Tạo slug từ tên
            $validated['slug'] = Str::slug($validated['name']);

            // Xử lý is_active
            $validated['is_active'] = $request->has('is_active');

            // Xử lý upload ảnh
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/categories'), $imageName);
                $validated['image'] = 'uploads/categories/' . $imageName;
            }

            // Debug để xem dữ liệu trước khi tạo

            $category = Category::create($validated);

            return redirect()->route('admin.categories.index')
                ->with('success', 'Danh mục đã được tạo thành công.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra khi tạo danh mục: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Hiển thị chi tiết danh mục
     */
    public function show(string $id)
    {
        $category = Category::with(['parent', 'children', 'products'])->findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Hiển thị form chỉnh sửa danh mục
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $parentCategories = Category::where('parent_id', null)->get();
        return view('admin.categories.edit', compact('category', 'parentCategories'));
    }

    /**
     * Cập nhật danh mục trong database
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu có
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories'), $imageName);
            $data['image'] = 'uploads/categories/' . $imageName;
        }

        $category->update($data);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Danh mục đã được cập nhật thành công.');
    }

    /**
     * Xóa danh mục khỏi database
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        // Kiểm tra xem có sản phẩm nào thuộc danh mục này không
        if ($category->products()->count() > 0) {
            return redirect()->route('admin.categories.index')
                ->with('error', 'Không thể xóa danh mục này vì có sản phẩm đang sử dụng.');
        }

        // Kiểm tra xem có danh mục con không
        if ($category->children()->count() > 0) {
            return redirect()->route('admin.categories.index')
                ->with('error', 'Không thể xóa danh mục này vì có danh mục con.');
        }

        // Xóa ảnh nếu có
        if ($category->image && file_exists(public_path($category->image))) {
            unlink(public_path($category->image));
        }

        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('success', 'Danh mục đã được xóa thành công.');
    }
}
