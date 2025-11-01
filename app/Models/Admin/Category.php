<?php

namespace App\Models\Admin;

use App\Models\Brand;
use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relationship to brands
    public function brand()
    {
        return $this->hasMany(Brand::class);
    }

    // Relationship to active products
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id')
                    ->where('status', 1)
                    ->latest();
    }

    // Accessor for category image with fallback
    public function getImageUrlAttribute()
    {
        if ($this->icon && file_exists(public_path('storage/category/' . $this->icon))) {
            return asset('storage/category/' . $this->icon);
        }

        return asset('upload/no-image.png'); // Fixed typo
    }
}
