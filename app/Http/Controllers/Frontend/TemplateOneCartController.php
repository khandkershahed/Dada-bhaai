<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class TemplateOneCartController extends Controller
{
    //Add To Cart
    public function AddToCartTemplateOne(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($product->price_status == 'rfq') {

            Cart::add([

                'id' => $id,
                'name' => $request->product_name,
                'qty' => $request->quantity,
                'price' => $product->sas_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_image,
                    // 'color' => $request->color,
                ],
            ]);

            return response()->json(['success' => 'Successfully Added on Your Cart']);
        } elseif ($product->price_status == 'discount_price') {

            Cart::add([

                'id' => $id,
                'name' => $request->product_name,
                'qty' => $request->quantity,
                'price' => $product->discount_price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_image,
                    // 'color' => $request->color,
                ],
            ]);

            return response()->json(['success' => 'Successfully Added on Your Cart']);
        } else {

            Cart::add([

                'id' => $id,
                'name' => $request->product_name,
                'qty' => $request->quantity,
                'price' => $product->price,
                'weight' => 1,
                'options' => [
                    'image' => $product->product_image,
                    // 'color' => $request->color,
                ],
            ]);

            return response()->json(['success' => 'Successfully Added on Your Cart']);
        }
    }

    // Add MiniCart
    public function AddMiniCartTemplateOne()
    {

        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal,

        ));
    }

    //Remove MiniCart TemplateOne
    public function RemoveMiniCartTemplateOne($rowId)
    {
        Cart::remove($rowId);
        return response()->json(['success' => 'Product Remove From Cart']);

    }

    //View Cart TemplateOne
    public function ViewCartTemplateOne()
    {
        return view('frontend.template_one.cart.view_cart');
    }

    //GetCartProduct
    public function GetCartProduct()
    {

        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal,

        ));
    }

    //CartRemove
    public function CartRemove($rowId)
    {
        Cart::remove($rowId);

        return response()->json(['success' => 'Successfully Remove From Cart']);
    }

    public function CartDecrement($rowId)
    {
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty - 1);

        return response()->json('Decrement');
    } // End Method

    public function CartIncrement($rowId)
    {

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty + 1);
        return response()->json('Increment');
    }

    //Checkout Templat eOne
    public function CheckoutTemplateOne()
    {
        if (Cart::total() > 0) {

            $carts = Cart::content();
            $cartTotal = Cart::total();
            $cartQty = Cart::count();

            return view('frontend.template_one.cart.checkout', compact('carts', 'cartTotal', 'cartQty'));
            
        } else {

            toastr()->error('Shopping At list One Product');
            return redirect()->to('/');
        }

    }
}
