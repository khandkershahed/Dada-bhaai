<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\ChildCategory;
use App\Models\Admin\Contact;
use App\Models\Admin\Product;
use App\Models\Brand;
use App\Models\Sites;
use Illuminate\Http\Request;

class TemplateOneController extends Controller
{
    //Template One All Product
    public function TemplateOneAllProduct()
    {
        $products = Product::where('status', '1')->orderBy('product_name', 'ASC')->paginate(12);
        return view('frontend.template_one.product.template_one_all_product', compact('products'));
    }

    //Brand Wise Product One
    public function BrandRelatedProductOne($id, $brand_slug)
    {
        $products = Product::where('status', '1')->where('brand_id', $id)->paginate(12);
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
        $products = Product::where('status', '1')->where('category_id', $id)->paginate(12);
        $catwiseproduct = Category::find($id);

        return view('frontend.template_one.category.category_wise_product', compact('products', 'catwiseproduct'));
    }

    //Child Category Related Product One
    public function ChilldCategoryRelatedProductOne($id, $childcategory_slug)
    {
        $products = Product::where('status', '1')->where('childcategory_id', $id)->paginate(12);
        $childcatwiseproduct = ChildCategory::find($id);

        return view('frontend.template_one.childcategory.childcategory_wise_product', compact('products', 'childcatwiseproduct'));
    }

    //Contact
    public function TemplateOneContact()
    {
        $sites = Sites::find(1);
        return view('frontend.template_one.contact.contact_store',compact('sites'));
    }

    //Template One Contact Store
    public function TemplateOneContactStore(Request $request)
    {
        $validator = $request->validate(

            [
                'name' => 'required|max:120',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ],

            [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'subject.required' => 'Subject is required',
                'message.required' => 'Message is required',
            ],
        );

        // MSG-240324-2

        $typePrefix = 'MSG';

        $today = date('dmy');

        $lastCode = Contact::where('code', 'like', $typePrefix . '-' . $today . '%')
            ->orderBy('id', 'desc')
            ->first();

        $newNumber = $lastCode ? (int) explode('-', $lastCode->code)[2] + 1 : 1;

        $code = $typePrefix . '-' . $today . '-' . $newNumber;

        if ($validator) {

            Contact::insert([

                'name' => $request->name,
                'email' => $request->email,
                // 'phone' => $request->phone,
                // 'address' => $request->address,
                'subject' => $request->subject,
                'message' => $request->message,
                'code' => $code,
                // 'ip_address' => $request->ip_address,

            ]);

        }

        return back()->with("status", "Message Send Successfully");

    }
}
