<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Category;
use App\Models\Admin\ChildCategory;
use App\Models\Admin\Contact;
use App\Models\Admin\Faq;
use App\Models\Admin\Offer;
use App\Models\Admin\OfferCategory;
use App\Models\Admin\Product;
use App\Models\Admin\Terms;
use App\Models\Brand;
use App\Models\Sites;
use App\Models\User;
use App\Models\User\Order;
use App\Models\User\OrderItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class TemplateOneController extends Controller
{
    //Template One All Product
    public function TemplateOneAllProduct()
    {

        $products = Product::query();

        //category filter
        if (!empty($_GET['category'])) {
            $slugs = explode(',', $_GET['category']);
            $catIds = Category::select('id')->whereIn('category_slug', $slugs)->pluck('id')->toArray();

            $products = $products->whereIn('category_id', $catIds);
        }

        //brand filter
        if (!empty($_GET['brand'])) {
            $slugs = explode(',', $_GET['brand']);
            $brandIds = Brand::select('id')->whereIn('brand_slug', $slugs)->pluck('id')->toArray();
            $products = $products->whereIn('brand_id', $brandIds);
        }

        //price range product
        if (!empty($_GET['price'])) {
            $price = explode('-', $_GET['price']);
            $products = $products->whereBetween('price', $price);
        }

        //sortByProduct
        if (!empty($_GET['sortBy'])) {
            $perPage = (int) $_GET['sortBy']; // Cast to integer for safety

            if ($perPage == 10) {
                $products = $products->where('status', 1)->orderBy('product_name', 'ASC')->paginate($perPage);
            } elseif ($perPage == 20) {
                $products = $products->where('status', 1)->orderBy('product_name', 'ASC')->paginate($perPage);
            } elseif ($perPage == 30) {
                $products = $products->where('status', 1)->orderBy('product_name', 'ASC')->paginate($perPage);
            } elseif ($perPage == 40) {
                $products = $products->where('status', 1)->orderBy('product_name', 'ASC')->paginate($perPage);
            } elseif ($perPage == 50) {
                $products = $products->where('status', 1)->orderBy('product_name', 'ASC')->paginate($perPage);
            } elseif ($perPage == 60) {
                $products = $products->where('status', 1)->orderBy('product_name', 'ASC')->paginate($perPage);
            } else {
                // Default case, if sortBy doesn't match any defined value
                $products = $products->where('status', 1)->orderBy('id', 'DESC')->paginate(20);
            }
        } else {
            $products = $products->where('status', 1)->orderBy('id', 'DESC')->paginate(18);
        }

        $brands = Brand::where('status', '1')->orderBy('brand_name', 'ASC')->latest()->get();
        $categorys = Category::where('status', '1')->orderBy('category_name', 'ASC')->latest()->get();

        return view('frontend.template_one.product.template_one_all_product', compact('products', 'brands', 'categorys'));
    }

    //shopFilter
    public function shopFilter(Request $request)
    {
        //dd($request->all());

        $data = $request->all();

        //filter category
        $catUrl = "";
        if (!empty($data['category'])) {
            foreach ($data['category'] as $category) {
                if (empty($catUrl)) {
                    $catUrl .= '&category=' . $category;
                } else {
                    $catUrl .= ',' . $category;
                }
            }
        }

        //filter brand
        $brandUrl = "";
        if (!empty($data['brand'])) {
            foreach ($data['brand'] as $brand) {
                if (empty($brandUrl)) {
                    $brandUrl .= '&brand=' . $brand;
                } else {
                    $brandUrl .= ',' . $brand;
                }
            }
        }

        //filter sortBy
        $sortByUrl = "";
        if (!empty($data['sortBy'])) {
            $sortByUrl .= '&sortBy=' . $data['sortBy'];
        }

        //filter sortBy
        $priceRangeUrl = "";
        if (!empty($data['price_range'])) {
            $priceRangeUrl .= '&price=' . $data['price_range'];
        }

        return redirect()->route('template.one.all_product', $catUrl . $brandUrl . $sortByUrl . $priceRangeUrl);
    }

    //Brand Wise Product One
    public function BrandRelatedProductOne(Request $request, $id, $brand_slug)
    {

        $sort = '';

        if ($request->sort != null) {
            $sort = $request->sort;
        }

        if ($id == null) {
            return redirect()->route('index');
        } else {
            if ($sort == 'nameAtoZ') {
                $products = Product::where(['status' => 1, 'brand_id' => $id])->orderBy('product_name', 'ASC')->paginate(12);
            } elseif ($sort == 'nameZtoA') {
                $products = Product::where(['status' => 1, 'brand_id' => $id])->orderBy('product_name', 'DESC')->paginate(12);
            } else {
                $products = Product::where('status', '1')->where('brand_id', $id)->paginate(12);

            }
        }

        $brandwiseproduct = Brand::find($id);
        $catwiseproduct = '';
        $childcatwiseproduct = '';

        $route = 'product/brand';
        $brandId = $id;
        $brandSlug = $brand_slug;

        return view('frontend.template_one.brand.brand_wise_product', compact('products', 'brandwiseproduct', 'route', 'brandId', 'brandSlug', 'sort', 'catwiseproduct', 'childcatwiseproduct'));
    }

    //Home All Category
    public function HomeAllCategory()
    {
        $categorys = Category::where('status', '1')->latest()->get();

        return view('frontend.template_one.category.home_all_category', compact('categorys'));
    }

    //Category Wise Product One
    public function CategoryRelatedProductOne(Request $request, $id, $category_slug)
    {

        $sort = '';

        if ($request->sort != null) {
            $sort = $request->sort;
        }

        if ($id == null) {
            return redirect()->route('index');
        } else {
            if ($sort == 'nameAtoZ') {
                $products = Product::where(['status' => 1, 'category_id' => $id])->orderBy('product_name', 'ASC')->paginate(12);
            } elseif ($sort == 'nameZtoA') {
                $products = Product::where(['status' => 1, 'category_id' => $id])->orderBy('product_name', 'DESC')->paginate(12);
            } else {
                $products = Product::where('status', '1')->where('category_id', $id)->paginate(12);

            }
        }

        $catwiseproduct = Category::find($id);
        $childcatwiseproduct = '';
        $route = 'product/category';
        $catId = $id;
        $catSlug = $category_slug;

        return view('frontend.template_one.category.category_wise_product', compact('products', 'catwiseproduct', 'route', 'catId', 'catSlug', 'sort', 'childcatwiseproduct'));
    }

    //OfferCategory RelatedProduct One
    public function OfferCategoryRelatedProductOne(Request $request, $id)
    {

        $products = Offer::where('status', '1')->where('offer_category_id', $id)->paginate(12);

        $offercatwiseproduct = OfferCategory::find($id);

        return view('frontend.template_one.offer_category.offer_category_wise_product', compact('offercatwiseproduct', 'products'));
    }

    //OfferWise Product One
    public function OfferWiseProductOne(Request $request, $id)
    {

        $products = Offer::where('status', '1')->where('id', $id)->paginate(12);

        $offerwiseproduct = Offer::find($id);

        return view('frontend.template_one.offer_category.offerwise_product', compact('offerwiseproduct', 'products'));
    }

    //Child Category Wise Product One
    public function ChilldCategoryRelatedProductOne(Request $request, $id, $childcategory_slug)
    {

        $sort = '';

        if ($request->sort != null) {
            $sort = $request->sort;
        }

        if ($id == null) {
            return redirect()->route('index');
        } else {
            if ($sort == 'nameAtoZ') {
                $products = Product::where(['status' => 1, 'childcategory_id' => $id])->orderBy('product_name', 'ASC')->paginate(12);
            } elseif ($sort == 'nameZtoA') {
                $products = Product::where(['status' => 1, 'childcategory_id' => $id])->orderBy('product_name', 'DESC')->paginate(12);
            } else {
                $products = Product::where('status', '1')->where('childcategory_id', $id)->paginate(12);
            }
        }

        $route = 'product/childcategory';
        $childcatId = $id;
        $childcatSlug = $childcategory_slug;

        $childcatwiseproduct = ChildCategory::find($id);
        $catwiseproduct = Category::find($childcatwiseproduct->category_id);

        return view('frontend.template_one.childcategory.childcategory_wise_product', compact('products', 'childcatwiseproduct', 'childcatId', 'childcatSlug', 'sort', 'route', 'catwiseproduct'));
    }

    //Contact
    public function TemplateOneContact()
    {
        $sites = Sites::find(1);
        return view('frontend.template_one.contact.contact_store', compact('sites'));
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

    //ProductSearch
    public function ProductSearch(Request $request)
    {

        $request->validate(['search' => "required"]);

        $item = $request->search;

        $products = Product::where('product_name', 'LIKE', "%$item%")
            ->orWhere('short_desc', "LIKE", "%$item%")
            ->paginate(12);

        return view('frontend.template_one.search.product_search', compact('products', 'item'));

    }

    

    //Template One Faq
    public function TemplateOneFaq()
    {
        $faqs = Faq::where('status', '1')->orderBy('order', 'ASC')->latest()->get();
        return view('frontend.template_one.faq.faq', compact('faqs'));
    }

    //Template One About
    public function TemplateOneAboutUs()
    {
        $about = About::where('status', 'tamplate_one')->find(1);
        return view('frontend.template_one.about.about_us', compact('about'));
    }

    //Template One Login
    public function TemplateOneLogin()
    {
        return view('frontend.template_one.user.login');

    }

    //TemplateOneDashboard
    public function TemplateOneDashboard()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('frontend.template_one.user.dashboard', compact('profileData'));
    }

    //Template One ProfileUpdate
    public function TemplateOneProfileUpdate(Request $request)
    {

        $id = Auth::user()->id;
        $update = User::findOrFail($id);

        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->address = $request->address;
        $update->address_two = $request->address_two;

        $update->country = $request->country;
        $update->city = $request->city;
        $update->postal_code = $request->postal_code;

        $update->save();

        toastr()->success('Profile Update Successfully');

        return redirect()->back();
    }

    public function TemplateOnePasswordUpdate(Request $request)
    {
        //validate
        $request->validate([

            'old_password' => 'required',
            'new_password' => [

                'required', 'confirmed', Rules\Password::min(8)->mixedCase()->symbols()->letters()->numbers(),

            ],
        ]);

        //Match Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {

            toastr()->error('Old Password Not Match');

            return redirect()->back();
        }

        //Update New Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        toastr()->success('Password Change Successfully');

        return redirect()->back();
    }

    //Template One UserLogout
    public function TemplateOneUserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        toastr()->success('Logout Successfully!!');

        return redirect()->route('index');
    }

    //Template One OrderDetails
    public function TemplateOneOrderDetails($id)
    {
        $order = Order::where('id', $id)->where('user_id', Auth::id())->first();
        $orderitem = OrderItem::with('product')->where('order_id', $id)->orderBy('id', 'DESC')->get();

        return view('frontend.template_one.user.order_details', compact('order', 'orderitem'));
    }

    //Template One OrderDetails
    public function TemplateOneOrderInvoice($id)
    {
        $order = Order::where('id', $id)->where('user_id', Auth::id())->first();
        $orderitem = OrderItem::with('product')->where('order_id', $id)->orderBy('id', 'DESC')->get();

        return view('frontend.template_one.user.invoice', compact('order', 'orderitem'));

        // $pdf = Pdf::loadView('frontend.template_one.user.invoice', compact('order', 'orderitem'))->setPaper('a4')->setOption([
        //     'tempDir' => public_path(),
        //     'chroot' => public_path(),
        // ]);

        // return $pdf->download('user_invoice.pdf');
    }

    //Template One Tack Order
    public function TemplateOneTackOrder()
    {
        return view('frontend.template_one.user.track_order');
    }

    //Template One TackOrder Search
    public function TemplateOneTackOrderSearch(Request $request)
    {
        $invoice = $request->code;

        $track = Order::where('billing_phone', $invoice)->orWhere('invoice_number', $invoice)->first();

        if ($track) {

            return redirect()->route('track.order.product', $track->id);

        } else {
            toastr()->error('Invalid Invoice Or Phone Number');
            return redirect()->back();
        }

    }

    //Template One TackOrder Search
    public function TemplateOneTackOrderProduct($id)
    {

        $track = Order::where('id', $id)->first();

        if ($track) {
            $orderItems = OrderItem::where('order_id', $track->id)->get();
            return view('frontend.template_one.user.track_order_search', compact('track', 'orderItems'));
        } else {
            toastr()->error('Invalid Invoice Or Phone Number');
            return redirect()->back();
        }

    }

    //Template One Term
    public function TemplateOneTerm()
    {
        $term = Terms::first();
        return view('frontend.template_one.term.term', compact('term'));
    }

    //Compare
    // public function AddToCompare(Request $request)
    // {
    //     $id = $request->product_id;

    //     $product = Product::findOrFail($id);

    //     $cartItem = Cart::instance('compare')->search(function ($cartItem, $rowId) use ($id) {
    //         return $cartItem->id === $id;
    //     });

    //     if ($cartItem->isNotEmpty()) {

    //         return response()->json(['error' => 'This Product Has Already Added On Compare']);
    //     }

    //     if ($product->price_status == 'rfq') {

    //         Cart::instance('compare')->add([

    //             'id' => $id,

    //             'name' => $product->product_name,
    //             'qty' => 1,
    //             'price' => $product->sas_price,
    //             'weight' => 1,

    //             'options' => [
    //                 'image' => $product->product_image,

    //             ],

    //         ]);

    //         return response()->json(['success' => 'Successfully Added on Your Compare']);

    //     } elseif ($product->price_status == 'offer_price') {

    //         Cart::instance('compare')->add([

    //             'id' => $id,

    //             'name' => $product->product_name,
    //             'qty' => 1,
    //             'price' => $product->discount_price,
    //             'weight' => 1,

    //             'options' => [
    //                 'image' => $product->product_image,
    //             ],

    //         ]);

    //         return response()->json(['success' => 'Successfully Added on Your Compare']);
    //     } else {

    //         Cart::instance('compare')->add([

    //             'id' => $id,

    //             'name' => $product->product_name,
    //             'qty' => 1,
    //             'price' => $product->price,
    //             'weight' => 1,

    //             'options' => [
    //                 'image' => $product->product_image,
    //             ],

    //         ]);

    //         return response()->json(['success' => 'Successfully Added on Your Compare']);
    //     }

    // }

    public function AddToCompare(Request $request)
    {
        $id = $request->product_id;

        $product = Product::findOrFail($id);

        $existingCompareItems = Cart::instance('compare')->content();

        // Check if there are items in compare
        if (!$existingCompareItems->isEmpty()) {
            // Get the category of the first item in compare (assuming all items are in the same category)
            $firstCompareItem = $existingCompareItems->first();
            $firstCompareProduct = Product::findOrFail($firstCompareItem->id);
            $compareCategory = $firstCompareProduct->category_id;

            // Check if the product being added is in the same category
            if ($product->category_id != $compareCategory) {
                return response()->json(['error' => 'You can only add products from the same category to compare.']);
            }
        }

        // Determine which price to use based on the product's price_status
        $price = $product->price_status == 'rfq' ? $product->sas_price :
        ($product->price_status == 'offer_price' ? $product->discount_price : $product->price);

        // Add the product to compare
        Cart::instance('compare')->add([
            'id' => $id,
            'name' => $product->product_name,
            'qty' => 1,
            'price' => $price,
            'weight' => 1,
            'options' => [
                'image' => $product->product_image,
            ],
        ]);

        return response()->json(['success' => 'Successfully Added on Your Compare']);
    }

    //Compare Product
    public function CompareProduct()
    {
        return view('frontend.template_one.cart.compare');
    }

    //GetCompare
    public function GetCompare()
    {
        $cartCompare = Cart::instance('compare')->content()->take(4); // Limiting to 3 products
        $cartCompareQty = Cart::instance('compare')->count();
        $cartTotal = Cart::instance('compare')->total();

        return response()->json(array(
            'cartCompare' => $cartCompare,
            'cartCompareQty' => $cartCompareQty,
            'cartTotal' => $cartTotal,
        ));
    }

    public function AddToCartCompare(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $cartItem = Cart::search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if ($cartItem->isNotEmpty()) {

            return response()->json(['error' => 'This Product Has Already Added']);
        }

        if ($product->price_status == 'rfq') {

            Cart::add([

                'id' => $id,
                'name' => $product->product_name,
                'qty' => 1,
                'price' => $product->sas_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_image,

                ],
            ]);

            return response()->json(['success' => 'Successfully Added on Your Cart']);
        } elseif ($product->price_status == 'offer_price') {

            Cart::add([

                'id' => $id,
                'name' => $product->product_name,
                'qty' => 1,
                'price' => $product->discount_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_image,

                ],
            ]);

            return response()->json(['success' => 'Successfully Added on Your Cart']);
        } else {

            Cart::add([

                'id' => $id,
                'name' => $product->product_name,
                'qty' => 1,
                'price' => $product->price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_image,

                ],
            ]);

            return response()->json(['success' => 'Successfully Added on Your Cart']);
        }
    }

    //CartRemove
    public function RemoveCompareTemplateOne($rowId)
    {
        Cart::instance('compare')->remove($rowId);

        return response()->json(['success' => 'Successfully Remove From Compare']);
    }

    // ========================================  WishList =========================

    //Compare
    public function AddToWishlist(Request $request)
    {
        $id = $request->product_id;

        $product = Product::findOrFail($id);

        $cartItem = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if ($cartItem->isNotEmpty()) {

            return response()->json(['error' => 'This Product Has Already Added On Wishlist']);
        }

        if ($product->price_status == 'rfq') {

            Cart::instance('wishlist')->add([

                'id' => $id,

                'name' => $product->product_name,
                'qty' => 1,
                'price' => $product->sas_price,
                'weight' => 1,

                'options' => [
                    'image' => $product->product_image,

                ],

            ]);

            return response()->json(['success' => 'Successfully Added on Your Wishlist']);

        } elseif ($product->price_status == 'offer_price') {

            Cart::instance('wishlist')->add([

                'id' => $id,

                'name' => $product->product_name,
                'qty' => 1,
                'price' => $product->discount_price,
                'weight' => 1,

                'options' => [
                    'image' => $product->product_image,
                ],

            ]);

            return response()->json(['success' => 'Successfully Added on Your Wishlist']);
        } else {

            Cart::instance('wishlist')->add([

                'id' => $id,

                'name' => $product->product_name,
                'qty' => 1,
                'price' => $product->price,
                'weight' => 1,

                'options' => [
                    'image' => $product->product_image,
                ],

            ]);

            return response()->json(['success' => 'Successfully Added on Your Wishlist']);
        }

    }

    //Compare Product
    public function WishlistProduct()
    {
        return view('frontend.template_one.cart.wishlist');
    }

    //GetCompare
    public function GetWishlist()
    {
        $cartWishlist = Cart::instance('wishlist')->content(); // Limiting to 3 products
        $cartWishlistQty = Cart::instance('wishlist')->count();
        $cartTotal = Cart::instance('wishlist')->total();

        return response()->json(array(
            'cartWishlist' => $cartWishlist,
            'cartWishlistQty' => $cartWishlistQty,
            'cartTotal' => $cartTotal,
        ));
    }

    public function AddToCartWishlist(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $cartItem = Cart::search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if ($cartItem->isNotEmpty()) {

            return response()->json(['error' => 'This Product Has Already Added']);
        }

        if ($product->price_status == 'rfq') {

            Cart::add([

                'id' => $id,
                'name' => $product->product_name,
                'qty' => 1,
                'price' => $product->sas_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_image,

                ],
            ]);

            return response()->json(['success' => 'Successfully Added on Your Cart']);
        } elseif ($product->price_status == 'offer_price') {

            Cart::add([

                'id' => $id,
                'name' => $product->product_name,
                'qty' => 1,
                'price' => $product->discount_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_image,

                ],
            ]);

            return response()->json(['success' => 'Successfully Added on Your Cart']);
        } else {

            Cart::add([

                'id' => $id,
                'name' => $product->product_name,
                'qty' => 1,
                'price' => $product->price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_image,

                ],
            ]);

            return response()->json(['success' => 'Successfully Added on Your Cart']);
        }
    }

    //CartRemove
    public function RemoveWishlistTemplateOne($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);
        return response()->json(['success' => 'Successfully Remove From Wishlist']);
    }

}
