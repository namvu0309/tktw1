<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Model Product đại diện cho sản phẩm trong hệ thống
 */
class Product extends Model
{
    use HasFactory;

    /**
     * Tên bảng trong database
     * @var string
     */
    protected $table = 'products';

    /**
     * Sử dụng timestamps tự động
     * @var bool
     */
    public $timestamps = true;

    /**
     * Các trường có thể gán giá trị hàng loạt
     * @var array
     */
    protected $fillable = [
        'name', // Tên sản phẩm
        'description', // Mô tả sản phẩm
        'price', // Giá sản phẩm
        'image', // Hình ảnh sản phẩm
        'category_id', // ID danh mục
        'status', // Trạng thái sản phẩm
        'quantity' // Số lượng sản phẩm
    ];

    /**
     * Quan hệ với model Category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        // belongsTo là quan hệ n-1 với model Category
        return $this->belongsTo(Category::class);
    }

    /**
     * Format ngày tạo theo định dạng d/m/Y
     * @param mixed $value
     * @return string|null
     */
    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::parse($value)->format('d/m/Y') : null;
    }

    /**
     * Format ngày cập nhật theo định dạng d/m/Y
     * @param mixed $value
     * @return string|null
     */
    public function getUpdatedAtAttribute($value)
    {
        return $value ? Carbon::parse($value)->format('d/m/Y') : null;
    }
}
