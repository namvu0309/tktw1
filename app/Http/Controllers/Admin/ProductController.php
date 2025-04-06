<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;

class ProductController extends Controller
{
    protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath = public_path('uploads/products');
        if (!file_exists($this->uploadPath)) {
            mkdir($this->uploadPath, 0777, true);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::with('category');

        // Tìm kiếm theo tên sản phẩm
        if ($request->has('search') || $request->has('category_id') || $request->has('status')) {
            if ($request->has('search')) {
                $query->where('name', 'like', "%{$request->search}%");
            }
            if ($request->has('category_id') && $request->category_id != '') {
                $query->where('category_id', $request->category_id);
            }
            if ($request->has('status') && $request->status != '') {
                $query->where('status', $request->status);
            }
        }

        $products = $query->orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::all();

        return view('admin.products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('is_active', true)->get();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        try {
            DB::beginTransaction();

            // Lấy dữ liệu đã được validate
            $validated = $request->validated();

            // Thêm slug vào dữ liệu
            $validated['slug'] = Str::slug($validated['name']);

            // Tạo sản phẩm
            $product = Product::create($validated);

            // Xử lý upload ảnh
            if ($request->hasFile('images')) {
                $uploadedImages = [];
                foreach ($request->file('images') as $index => $image) {
                    try {
                        // Tạo tên file độc nhất
                        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                        // Upload ảnh
                        $image->move($this->uploadPath, $imageName);

                        // Lưu thông tin ảnh
                        $uploadedImages[] = [
                            'product_id' => $product->id,
                            'image_path' => 'uploads/products/' . $imageName,
                            'is_primary' => $index === 0, // ảnh đầu tiên là ảnh chính
                            'alt' => $product->name,
                            'created_at' => now(),
                            'updated_at' => now()
                        ];
                    } catch (\Exception $e) {
                        Log::error('Lỗi upload ảnh: ' . $e->getMessage());
                        throw $e;
                    }
                }

                // Insert tất cả ảnh vào database
                if (!empty($uploadedImages)) {
                    DB::table('product_images')->insert($uploadedImages);
                }
            }

            DB::commit();
            return redirect()
                ->route('admin.products.index')
                ->with('success', 'Sản phẩm đã được tạo thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Lỗi khi tạo sản phẩm: ' . $e->getMessage());
            return back()
                ->withInput()
                ->with('error', 'Có lỗi xảy ra khi tạo sản phẩm: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->load('category');
        return view('admin.products.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::where('is_active', true)->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        try {
            DB::beginTransaction();

            $validated = $request->validated();

            // Nếu tên thay đổi thì cập nhật slug
            if ($product->name !== $validated['name']) {
                $validated['slug'] = Str::slug($validated['name']);
            }

            // Upload ảnh mới (nếu có)
            if ($request->hasFile('images')) {
                // Reset tất cả ảnh cũ về không phải ảnh chính
                $product->images()->update(['is_primary' => false]);

                foreach ($request->file('images') as $index => $image) {
                    // Tạo tên file độc nhất
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                    // Di chuyển ảnh vào thư mục uploads
                    $image->move($this->uploadPath, $imageName);

                    // Tạo bản ghi ảnh mới
                    $product->images()->create([
                        'image_path' => 'uploads/products/' . $imageName,
                        'alt' => $product->name,
                        'is_primary' => $index === 0, // Gán ảnh đầu tiên là chính
                    ]);
                }
            } else {
                // Nếu không upload ảnh mới nhưng có chọn ảnh chính → xử lý cập nhật
                if ($request->filled('primary_image')) {
                    $product->images()->update(['is_primary' => false]);

                    $product->images()
                        ->where('id', $request->primary_image)
                        ->update(['is_primary' => true]);
                }
            }
            if ($validated['quantity'] > 0 && $validated['status'] === 'out_of_stock') {
                return back()->withInput()->with('error', 'Không thể đặt trạng thái "Hết hàng" khi sản phẩm còn số lượng tồn kho.');
            }


            // Cập nhật các thông tin còn lại của sản phẩm
            $product->update($validated);

            DB::commit();

            return redirect()
                ->route('admin.products.index')
                ->with('success', 'Sản phẩm đã được cập nhật thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Lỗi khi cập nhật sản phẩm: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Có lỗi xảy ra khi cập nhật sản phẩm: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            // Xóa các ảnh sản phẩm trước
            foreach ($product->images as $image) {
                // Xóa file ảnh nếu tồn tại
                if (file_exists(public_path($image->image_path))) {
                    unlink(public_path($image->image_path));
                }
                $image->delete();
            }

            $product->delete();

            return redirect()->route('admin.products.index')
                ->with('success', 'Xóa sản phẩm thành công!');
        } catch (\Exception $e) {
            return redirect()->route('admin.products.index')
                ->with('error', 'Có lỗi xảy ra khi xóa sản phẩm: ' . $e->getMessage())
            ->withErrors(['error' => $e->getMessage()])
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
            }
    }
}
