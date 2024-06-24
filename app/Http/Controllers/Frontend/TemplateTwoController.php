<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Contact;
use App\Models\Admin\Faq;
use App\Models\Admin\HomePage;
use App\Models\Admin\MultiImg;
use App\Models\Admin\Product;
use App\Models\Admin\ProductSinglePage;
use Illuminate\Http\Request;

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

        $sproducts = ProductSinglePage::where('status', 'active')->where('product_id', $product->id)->first();

        $multiImages = MultiImg::where('product_id', $product->id)->get();
        //dd($sproducts);

        return view('frontend.astell.product.single_product', compact('product', 'sproducts', 'multiImages'));

    }

    //Template Two AllProduct
    public function TemplateTwoAllProduct()
    {
        return view('frontend.astell.pages.all_product');
    }

    //Faq
    public function TemplateTwoFaq()
    {
        $faqs = Faq::where('status', '1')->orderBy('order', 'ASC')->latest()->get();
        return view('frontend.astell.pages.faq', compact('faqs'));
    }

    //Contact
    public function TemplateTwoContact()
    {
        return view('frontend.astell.pages.contact');
    }

    public function TemplateTwoContactStore(Request $request)
    {
        $typePrefix = 'MSG';

        $today = date('dmy');

        $lastCode = Contact::where('code', 'like', $typePrefix . '-' . $today . '%')
            ->orderBy('id', 'desc')
            ->first();

        $newNumber = $lastCode ? (int) explode('-', $lastCode->code)[2] + 1 : 1;

        $code = $typePrefix . '-' . $today . '-' . $newNumber;

        Contact::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'message' => $request->message,
            'code' => $code,

        ]);

        toastr()->success('Message Send Successfully');
        return redirect()->back();
    }

    //Buying
    public function TemplateTwoBuying()
    {
        return view('frontend.astell.pages.buying');
    }

    //Category Wise Product
    public function CategoryWiseProductTemplateTwo($id, $slug)
    {
        $catwiseproduct = Category::find($id);
        $products = Product::where('category_id', $catwiseproduct->id)->paginate(8);

        return view('frontend.astell.pages.category_wise_product_template_two', compact('catwiseproduct', 'products'));
    }

    public function ProductDetailsTemplateTwo($id, $product_slug)
    {

        // if (!empty($sproducts)) {

        //     $product = Product::find($id);

        //     $color = $product->color_id;
        //     $product_colors = explode(' ', $color);

        //     $multiImages = MultiImg::where('product_id', $product->id)->get();

        //     //Releted Category
        //     $cat_id = $product->childcategory_id;
        //     $relativeProduct = Product::where('childcategory_id', $cat_id)->where('id', '!=', $id)->orderBy('id', 'ASC')->limit(5)->get();

        //     // $child_id = $product->child_id;
        //     $child_ids = explode(',', $product->child_id);

        //     foreach ($child_ids as $key => $child_id) {
        //         $relativeChild[] = Product::where('id', $child_id)
        //             ->orderBy('id', 'DESC')
        //             ->first();
        //     }

        //     $carts = Cart::content();
        //     $cartQty = Cart::count();

        //     return view('frontend.template_one.product.single_product', compact('product', 'relativeProduct', 'multiImages', 'relativeChild', 'product_colors', 'carts', 'cartQty'));

        // } else {

        //     $product = Product::find($id);
        //     $sproducts = ProductSinglePage::where('status', 'active')->where('product_id', $product->id)->first();
        //     $multiImages = MultiImg::where('product_id', $product->id)->get();

        //     return view('frontend.astell.pages.single_product', compact('product', 'sproducts', 'multiImages'));
        // }

        $product = Product::find($id);
        $sproducts = ProductSinglePage::where('status', 'active')->where('product_id', $product->id)->first();
        $multiImages = MultiImg::where('product_id', $product->id)->get();

        return view('frontend.astell.pages.single_product', compact('product', 'sproducts', 'multiImages'));

    }

}
