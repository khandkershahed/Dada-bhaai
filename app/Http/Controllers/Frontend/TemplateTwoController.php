<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\HomePage;
use App\Models\Admin\MultiImg;
use App\Models\Admin\Product;
use App\Models\Admin\ProductSinglePage;

class TemplateTwoController extends Controller
{
    //Index
    public function Index()
    {
        $videos = HomePage::where('status', '1')->latest()->get();

        return view('frontend.astell.index_astell');

    }

    //Template OneProduct
    public function SingleProductTemplateTwo($id)
    {
        $product = Product::find($id);

        $sproducts = ProductSinglePage::where('status','active')->where('product_id',$product->id)->first();

        $multiImages = MultiImg::where('product_id', $product->id)->get();
        //dd($sproducts);

        return view('frontend.astell.product.single_product', compact('product','sproducts','multiImages'));

    }
}
