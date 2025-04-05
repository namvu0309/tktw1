<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Danh sách danh mục chính
        $mainCategories = [
            [
                'name' => 'Thời trang nam',
                'description' => 'Các sản phẩm thời trang dành cho nam giới',
                'children' => [
                    [
                        'name' => 'Áo nam',
                        'description' => 'Các loại áo dành cho nam',
                        'children' => [
                            ['name' => 'Áo sơ mi nam', 'description' => 'Áo sơ mi nam các loại'],
                            ['name' => 'Áo thun nam', 'description' => 'Áo thun nam các loại'],
                            ['name' => 'Áo khoác nam', 'description' => 'Áo khoác nam các loại'],
                            ['name' => 'Áo polo nam', 'description' => 'Áo polo nam các loại'],
                        ]
                    ],
                    [
                        'name' => 'Quần nam',
                        'description' => 'Các loại quần dành cho nam',
                        'children' => [
                            ['name' => 'Quần jeans nam', 'description' => 'Quần jeans nam các loại'],
                            ['name' => 'Quần kaki nam', 'description' => 'Quần kaki nam các loại'],
                            ['name' => 'Quần tây nam', 'description' => 'Quần tây nam các loại'],
                            ['name' => 'Quần short nam', 'description' => 'Quần short nam các loại'],
                        ]
                    ],
                ]
            ],
            [
                'name' => 'Thời trang nữ',
                'description' => 'Các sản phẩm thời trang dành cho nữ giới',
                'children' => [
                    [
                        'name' => 'Áo nữ',
                        'description' => 'Các loại áo dành cho nữ',
                        'children' => [
                            ['name' => 'Áo sơ mi nữ', 'description' => 'Áo sơ mi nữ các loại'],
                            ['name' => 'Áo thun nữ', 'description' => 'Áo thun nữ các loại'],
                            ['name' => 'Áo khoác nữ', 'description' => 'Áo khoác nữ các loại'],
                            ['name' => 'Áo kiểu nữ', 'description' => 'Áo kiểu nữ các loại'],
                        ]
                    ],
                    [
                        'name' => 'Quần nữ',
                        'description' => 'Các loại quần dành cho nữ',
                        'children' => [
                            ['name' => 'Quần jeans nữ', 'description' => 'Quần jeans nữ các loại'],
                            ['name' => 'Quần tây nữ', 'description' => 'Quần tây nữ các loại'],
                            ['name' => 'Quần short nữ', 'description' => 'Quần short nữ các loại'],
                            ['name' => 'Chân váy', 'description' => 'Chân váy các loại'],
                        ]
                    ],
                    [
                        'name' => 'Váy đầm',
                        'description' => 'Các loại váy đầm',
                        'children' => [
                            ['name' => 'Đầm suông', 'description' => 'Đầm suông các loại'],
                            ['name' => 'Đầm xòe', 'description' => 'Đầm xòe các loại'],
                            ['name' => 'Đầm ôm', 'description' => 'Đầm ôm các loại'],
                            ['name' => 'Đầm maxi', 'description' => 'Đầm maxi các loại'],
                        ]
                    ],
                ]
            ],
            [
                'name' => 'Phụ kiện',
                'description' => 'Các phụ kiện thời trang',
                'children' => [
                    [
                        'name' => 'Phụ kiện nam',
                        'description' => 'Phụ kiện thời trang nam',
                        'children' => [
                            ['name' => 'Thắt lưng nam', 'description' => 'Thắt lưng nam các loại'],
                            ['name' => 'Ví nam', 'description' => 'Ví nam các loại'],
                            ['name' => 'Cà vạt & Nơ', 'description' => 'Cà vạt và nơ các loại'],
                        ]
                    ],
                    [
                        'name' => 'Phụ kiện nữ',
                        'description' => 'Phụ kiện thời trang nữ',
                        'children' => [
                            ['name' => 'Túi xách nữ', 'description' => 'Túi xách nữ các loại'],
                            ['name' => 'Phụ kiện tóc', 'description' => 'Phụ kiện tóc các loại'],
                            ['name' => 'Trang sức', 'description' => 'Trang sức các loại'],
                        ]
                    ],
                ]
            ],
        ];

        // Hàm đệ quy để tạo danh mục
        $createCategories = function ($categories, $parentId = null) use (&$createCategories) {
            foreach ($categories as $categoryData) {
                $category = Category::create([
                    'name' => $categoryData['name'],
                    'slug' => Str::slug($categoryData['name']),
                    'description' => $categoryData['description'],
                    'parent_id' => $parentId,
                    'order' => 0,
                    'is_active' => true,
                ]);

                // Nếu có danh mục con thì tạo đệ quy
                if (isset($categoryData['children'])) {
                    $createCategories($categoryData['children'], $category->id);
                }
            }
        };

        // Bắt đầu tạo danh mục
        $createCategories($mainCategories);
    }
}
