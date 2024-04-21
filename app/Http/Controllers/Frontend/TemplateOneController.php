<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\ChildCategory;
use App\Models\Admin\Product;

class TemplateOneController extends Controller
{

    //Home All Category
    public function HomeAllCategory()
    {
        $categorys = Category::where('status', '1')->latest()->get();

        return view('frontend.template_one.category.home_all_category', compact('categorys'));
    }

    //Category Related Product One
    public function CategoryRelatedProductOne($id, $category_slug)
    {
        $products = Product::where('status', '1')->where('category_id', $id)->get();
        $catwiseproduct = Category::find($id);

        return view('frontend.template_one.category.category_wise_product', compact('products', 'catwiseproduct'));
    }

    //Child Category Related Product One
    public function ChilldCategoryRelatedProductOne($id, $childcategory_slug)
    {
        $products = Product::where('status', '1')->where('childcategory_id', $id)->get();
        $childcatwiseproduct = ChildCategory::find($id);

        return view('frontend.template_one.childcategory.childcategory_wise_product', compact('products', 'childcatwiseproduct'));
    }
}
