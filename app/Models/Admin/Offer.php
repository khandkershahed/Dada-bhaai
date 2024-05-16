<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(OfferCategory::class,'offer_category_id','id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
