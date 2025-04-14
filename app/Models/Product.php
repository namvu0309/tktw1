<?php

namespace App\Models;

use Illuminate\Support\Str;
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
        'slug',  // Thêm slug vào fillable
        'description', // Mô tả sản phẩm
        'price', // Giá sản phẩm
        'quantity', // Số lượng sản phẩm
        'category_id', // ID danh mục
        'status' // Trạng thái sản phẩm
    ];

    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
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

    public function getStatusTextAttribute()
    {
        return $this->status === 'in_stock' ? 'Còn hàng' : 'Hết hàng';
    }

    public function getStatusBadgeAttribute()
    {
        return $this->status === 'in_stock'
            ? '<span class="badge bg-success">Còn hàng</span>'
            : '<span class="badge bg-danger">Hết hàng</span>';
    }

    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 0, ',', '.') . ' đ';
    }

    // Thêm phương thức này để sử dụng slug thay vì id trong route
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Tự động tạo slug khi tạo/cập nhật sản phẩm
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = $product->generateUniqueSlug($product->name);
        });

        static::updating(function ($product) {
            if ($product->isDirty('name')) {
                $product->slug = $product->generateUniqueSlug($product->name);
            }
        });
    }

    // Tạo slug duy nhất
    public function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = static::where('slug', 'LIKE', "{$slug}%")
            ->where('id', '<>', $this->id)
            ->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function primaryImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }
}
