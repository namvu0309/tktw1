<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = false;
    protected $fillable = [
        "name",
        "slug",
        "description",
        "image",
        "parent_id",
        "order",
        "is_active"
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
