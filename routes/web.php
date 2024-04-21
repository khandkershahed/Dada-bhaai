<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\TemplateOneController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Route::get('/', function () {
//     return view('frontend.frontend_dashboard');
// });

Route::get('/', [IndexController::class, 'Index'])->name('index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {

    //Admin Dashboard
    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');
    Route::post('/user/profile/update', [UserController::class, 'UserProfileUpdate'])->name('user.profile.update');

    //User Password
    Route::get('/user/password', [UserController::class, 'UserPassword'])->name('user.password');
    Route::post('/user/password/update', [UserController::class, 'UserPasswordPassword'])->name('user.password.update');

    //User Logout
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

});

require __DIR__ . '/auth.php';
require __DIR__ . '/adminauth.php';

Route::controller(IndexController::class)->group(function () {

    //Template
    Route::get('/product/{id}/{product_slug}', 'TemplateOneProduct');
    //Single Product
    Route::get('/single-product/{id}', 'SingleProduct')->name('single.product');
    //Fqa Frontend
    Route::get('/faq', 'Faq')->name('faq');
    //Contact Frontend
    Route::get('/contact-user', 'ContactUser')->name('contact.user');
    Route::post('/send-message', 'SendMessage')->name('send.message');
    //Brand Page
    Route::get('/brand', 'BrandPage')->name('brand.page');
    Route::get('/brand-wise-product/{id}', 'BrandWiseProduct')->name('brand.wise.product');
    //About Page
    Route::get('/about', 'AboutPage')->name('about.page');

    

});

// Template One Controller
Route::controller(TemplateOneController::class)->group(function () {

    ///////////////////////////// Template One //////////////////////////////

    //Brand Wise
    // Route::get('/{brand_name}/{id}/{brand_slug}', 'BrandWiseProductOne');

    //Category Page
    Route::get('/home-category', 'HomeAllCategory')->name('home.all.category.page');
    Route::get('/product/category/{id}/{category_slug}', 'CategoryRelatedProductOne');

    //Child Category
    Route::get('/product/childcategory/{id}/{childcategory_slug}', 'ChilldCategoryRelatedProductOne');

});
//Cart Controller
Route::controller(CartController::class)->group(function () {

    //Add To Cart
    Route::post('/dcart/data/store/{id}', 'AddToCartDetails');
    Route::get('/product/mini/cart', 'AddMiniCart');
    Route::get('/minicart/product/remove/{rowId}', 'RemoveMiniCart');
    Route::get('/product-cart', 'TotalCart')->name('product.cart');

    // My Cart
    Route::get('/get-cart-product', 'GetCartProduct');
    // Route::get('/get-cart-product1', 'GetCartProduct1');
    Route::get('/cart-remove/{rowId}', 'CartRemove');
    Route::get('/cart-decrement/{rowId}', 'CartDecrement');
    Route::get('/cart-increment/{rowId}', 'CartIncrement');
    //checkout
    Route::get('/checkout', 'CheckoutCreate')->name('checkout');
    Route::post('/checkout/store', 'CheckoutStore')->name('checkout.store');

    /////////////////////////////////////// Template One ////////////////////////

    //Add To Cart
    Route::post('/product/store/{id}', 'AddToCartOne');

});
