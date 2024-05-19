@php
    $offercats = App\Models\Admin\OfferCategory::where('status', '1')->inRandomOrder()->first();
    $products = App\Models\Admin\Offer::where('status', '1')
        ->where('offer_category_id', $offercats->id)
        ->get();
@endphp


<div class="product pt-50 pb-40">
    <div class="container">
        {{-- <div class="row align-items-center justify-content-between">
                <div class="col-lg-9 col-sm-6">
                    <div class="product-section mb-20">
                        <h6 class="product--section__title f-800 white-color grenadier-bg">
                            Featured Items
                        </h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="all__product--link text-right mb-20">
                        <a class="all-link" href="shop-page.html">Discover All Products<span
                                class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div>
            </div> --}}
        <div class="row align-items-center">
            <div class="col-xl-3 d-none d-xl-block">
                <div class="small__banner mb-30">
                    <div class="small__banner--thumb position-relative">
                        <a href="#"><img
                                src="{{ asset('storage/offer_category_image/' . $offercats->offer_category_image) }}"
                                alt="" /></a>
                        <div class="small__banner--content text-center">
                            <span class="f-300 white-color">{{ $offercats->offer_category_name }}</span>
                            {{-- <h2 class="f-800 white-color">60% Flate</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="product__active--small owl-carousel mb-30">
                    @forelse ($products as $product)
                        <div class="product__single">
                            <div class="product__box">
                                <div class="product__thumb">

                                    <a href="{{ url('product' . '/' . $product->products->id . '/' . $product->products->product_slug) }}"
                                        class="img-wrapper">

                                        <img class="img product_id" src="{{ asset($product->products->product_image) }}"
                                            alt="" style="height: 230px;"
                                            data-id="{{ $product->products->id }}" />

                                    </a>
                                </div>

                                <div class="product__content--top">
                                    <span class="cate-name">{{ $offercats->offer_category_name }}</span>

                                    <h6 class="product__title mine__shaft-color f-700 mb-0" id="offerProductName">
                                        {{ $product->products->product_name }}
                                    </h6>

                                </div>

                                {{-- <input type="text" id="offeroneproduct_id" value="{{ $product->id }}"> --}}

                                <div class="product__content--rating d-flex justify-content-between align-items-center">



                                    <a type="submit" data-offer_price="{{ $product->discount_price }}"
                                        data-product_id="{{ $product->products->id }}"
                                        class="btn btn-primary btn-sm add_to_cart_btn">
                                        Add To Cart
                                    </a>


                                    <div class="price">


                                        <h5 class="grenadier-color f-600" id="">
                                            Tk {{ $product->discount_price }}
                                        </h5>

                                        {{-- <input type="text" class="mb-0  border-1" name=""
                                                                value="{{ $product->discount_price }}"
                                                                min="1" id="offerProductPrice" style="width: 50px" /> --}}

                                    </div>

                                </div>

                            </div>
                            <div class="product-action">

                                <a style="cursor: pointer;" id="{{ $product->id }}"
                                    onclick="addToWishList(this.id)"><span class="lnr lnr-heart"></span></a>

                                {{-- <a href="#"><span class="lnr lnr-eye"></span></a> --}}

                                <a
                                    href="{{ url('product' . '/' . $product->products->id . '/' . $product->products->product_slug) }}"><span
                                        class="lnr lnr-cart"></span></a>

                                {{-- <a href="#"><span class="lnr lnr-sync"></span></a> --}}
                            </div>
                        </div>
                    @empty
                        <p>No Product Avaiable</p>
                    @endforelse



                </div>
            </div>
        </div>
    </div>
</div>
