<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Post;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy sản phẩm mới nhất kèm theo hình ảnh
        $newProducts = Product::with(['productImages'])->latest()
            ->take(8)
            ->get();

        // Lấy sản phẩm nổi bật
        // $featuredProducts = Product::where('featured', 1)
        //     ->take(4)
        //     ->get();

        // Lấy danh mục và sản phẩm kèm theo hình ảnh
        $categories = Category::with(['products' => function($query) {
            $query->with('productImages'); // Sửa để lấy hình ảnh sản phẩm
        }])->get();

        // Lấy bài viết mới nếu có
        // $latestPosts = Post::latest()
        //     ->take(3)
        //     ->get();

        return view('client.home', compact(
            'newProducts',
            // 'featuredProducts',
            'categories',
            // 'latestPosts'
        ));
    }
    // Hiển thị chi tiết sản phẩm
    public function showProduct($slug)
    {
        // Lấy sản phẩm theo slug và kèm theo danh mục
        $product = Product::where('slug', $slug)
            ->with('category')->orderBy('id')
            ->firstOrFail();

        // Lấy các sản phẩm liên quan trong cùng danh mục, ngoại trừ sản phẩm hiện tại
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->orderBy('id') // Thêm order by id
            ->take(4)
            ->get();

        $images = $product->productImages; // Lấy tất cả hình ảnh của sản phẩm

        return view('client.detail', compact(
            'product',
            'relatedProducts',
            'images'
        ));
    }

    // Hiển thị sản phẩm theo danh mục
    public function categoryProducts($slug)
    {
        $category = Category::where('slug', $slug)
            ->firstOrFail();

        $products = Product::where('category_id', $category->id)
            ->paginate(12);

        return view('client.product-catalog', compact(
            'category',
            'products'
        ));
    }

    // Tìm kiếm sản phẩm
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $products = Product::where('name', 'like', "%{$keyword}%")
            ->orWhere('description', 'like', "%{$keyword}%")
            ->paginate(12);

        return view('client.search', compact('products', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
