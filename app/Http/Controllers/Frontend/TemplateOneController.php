<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\ChildCategory;
use App\Models\Admin\Product;
use App\Models\Brand;

class TemplateOneController extends Controller
{
    //Template One All Product
    public function TemplateOneAllProduct()
    {
        $products = Product::where('status', '1')->orderBy('product_name', 'ASC')->latest()->get();
        return view('frontend.template_one.product.template_one_all_product', compact('products'));
    }

    //Brand Wise Product One
    public function BrandRelatedProductOne($id, $brand_slug)
    {
        $products = Product::where('status', '1')->where('brand_id', $id)->get();
        $brandwiseproduct = Brand::find($id);

        return view('frontend.template_one.brand.brand_wise_product', compact('products', 'brandwiseproduct'));
    }

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
