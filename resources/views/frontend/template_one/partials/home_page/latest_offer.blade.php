@php
    $offercats = App\Models\Admin\OfferCategory::where('status', '1')->inRandomOrder()->first();
    $products = App\Models\Admin\Offer::where('status', '1')
        ->where('offer_category_id', $offercats->id)
        ->get();
@endphp


<div class="product pt-50 pb-40">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-9 col-sm-6">
                <div class="product-section mb-20">
                    <h6 class="product--section__title f-800 white-color grenadier-bg">
                        Lastest Offer
                    </h6>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-sm-6">
                    <div class="all__product--link text-right mb-20">
                        <a class="all-link" href="shop-page.html">Discover All Products<span
                                class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div> --}}
        </div>
        <div class="row align-items-center">
            <div class="col-xl-3 d-none d-xl-block">
                <div class="small__banner mb-30">
                    <div class="small__banner--thumb position-relative">
                        <a href="#"><img
                                src="{{ asset('storage/offer_category_image/' . $offercats->offer_category_image) }}"
                                alt="" /></a>
                        <div class="small__banner--content text-center">
                            <span class="f-300 text-dark">{{ $offercats->offer_category_name }}</span>
                            {{-- <h2 class="f-800 white-color">60% Flate</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="product__active--small owl-carousel mb-30">
                    @forelse ($products as $product)
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                    class="image">
                                    <img class="pic-1" src="{{ asset($product->product_image) }}">
                                </a>
                                <div class="product-button-group">
                                    {{-- Wishlist Icon --}}
                                    <a style="cursor: pointer;" id="{{ $product->id }}"
                                        onclick="addToWishList(this.id)"><i class="fas fa-heart"></i></a>
                                    {{-- Add To Cart Icon --}}
                                    <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                        class="add-to-cart"><i class="fas fa-shopping-cart"></i> Add To
                                        Cart</a>
                                    {{-- Compare Icon --}}
                                    <a href="#"><i class="fas fa-random"></i></a>

                                </div>
                            </div>
                            <div class="product-content row align-items-center">
                                <div class="col-lg-8">
                                    <span class="cate-name">{{ $product->category->category_name }}</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-0 text-start">
                                        <a
                                            href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                    </h6>
                                </div>
                                <div class="col-lg-4">
                                    <div class="price text-end">
                                        @if ($product->price_status == 'rfq')
                                            <h6 class="grenadier-color mb-0 fw-bold">
                                                Tk {{ $product->sas_price }}
                                            </h6>
                                        @elseif ($product->price_status == 'offer_price')
                                            <h6 class="grenadier-color mb-0 fw-bold">
                                                Tk {{ $product->discount_price }}</h6>
                                        @else
                                            <h6 class="grenadier-color mb-0 fw-bold">Tk
                                                {{ $product->price }}
                                            </h6>
                                        @endif
                                    </div>
                                </div>
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
