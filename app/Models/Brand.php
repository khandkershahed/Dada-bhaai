<?php

namespace App\Models;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Relationship: A brand has many products
     */


    public function products()
    {
        return $this->hasMany(\App\Models\Admin\Product::class)->active();
    }

    /**
     * Scope: Only active brands
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
