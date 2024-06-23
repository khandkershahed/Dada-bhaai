<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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

        $sproducts = ProductSinglePage::where('status','active')->where('product_id',$product->id)->first();

        $multiImages = MultiImg::where('product_id', $product->id)->get();
        //dd($sproducts);

        return view('frontend.astell.product.single_product', compact('product','sproducts','multiImages'));

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
        return view('frontend.astell.pages.faq',compact('faqs'));
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
}
