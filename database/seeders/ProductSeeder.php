<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Đảm bảo thư mục uploads/products tồn tại
        $uploadPath = public_path('uploads/products');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0777, true);
        }

        // Tạo dữ liệu mẫu cho từng danh mục
        Category::all()->each(function ($category) {
            // Tạo 5-10 sản phẩm cho mỗi danh mục
            $productsCount = rand(5, 10);

            // Danh sách tên sản phẩm mẫu theo danh mục
            $productNames = $this->getProductNamesByCategory($category->name);

            for ($i = 0; $i < $productsCount; $i++) {
                $name = $productNames[array_rand($productNames)] . ' ' . rand(1, 999);

                // Tạo sản phẩm
                $product = Product::create([
                    'name' => $name,
                    'slug' => Str::slug($name),
                    'description' => "Đây là mô tả chi tiết cho sản phẩm {$name}. Sản phẩm thuộc danh mục {$category->name}.",
                    'price' => rand(50, 2000) * 1000,
                    'category_id' => $category->id,
                    'quantity' => rand(0, 100),
                    'status' => rand(0, 100) > 20 ? 'in_stock' : 'out_of_stock',
                    'created_at' => now()->subDays(rand(1, 365)),
                    'updated_at' => now(),
                ]);

                // Tạo 1-5 ảnh cho mỗi sản phẩm
                $imageCount = rand(1, 5);
                for ($j = 0; $j < $imageCount; $j++) {
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => 'uploads/products/sample-' . rand(1, 5) . '.jpg',
                        'is_primary' => $j === 0,
                        'alt' => $name . ' - Ảnh ' . ($j + 1),
                        'order' => $j
                    ]);
                }
            }
        });
    }

    private function getProductNamesByCategory($categoryName): array
    {
        $productNames = [
            'Áo nam' => [
                'Áo sơ mi nam', 'Áo thun nam', 'Áo khoác nam', 'Áo polo nam',
                'Áo vest nam', 'Áo len nam', 'Áo hoodie nam', 'Áo sweater nam'
            ],
            'Quần nam' => [
                'Quần jean nam', 'Quần kaki nam', 'Quần tây nam', 'Quần short nam',
                'Quần jogger nam', 'Quần thể thao nam', 'Quần cargo nam'
            ],
            'Áo nữ' => [
                'Áo sơ mi nữ', 'Áo thun nữ', 'Áo khoác nữ', 'Áo kiểu nữ',
                'Áo len nữ', 'Áo hoodie nữ', 'Áo sweater nữ'
            ],
            'Quần nữ' => [
                'Quần jean nữ', 'Quần kaki nữ', 'Quần tây nữ', 'Quần short nữ',
                'Quần culottes', 'Quần ống rộng nữ', 'Quần jogger nữ'
            ],
            'Váy & Đầm' => [
                'Váy liền thân', 'Chân váy', 'Váy maxi', 'Váy midi',
                'Váy mini', 'Đầm công sở', 'Đầm dự tiệc'
            ],
            'Phụ kiện nam' => [
                'Thắt lưng nam', 'Ví nam', 'Cà vạt', 'Nơ cổ',
                'Tất nam', 'Khăn quàng cổ nam'
            ],
            'Phụ kiện nữ' => [
                'Túi xách nữ', 'Ví nữ', 'Thắt lưng nữ', 'Phụ kiện tóc',
                'Khăn quàng cổ nữ', 'Trang sức nữ'
            ]
        ];

        return $productNames[$categoryName] ?? [
            'Sản phẩm basic', 'Sản phẩm cao cấp', 'Sản phẩm limited',
            'Sản phẩm mới', 'Sản phẩm hot', 'Sản phẩm sale'
        ];
    }
}
