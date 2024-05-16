@php

    $products = App\Models\Admin\Product::where('status', '1')
        ->where('status', '1')
        ->orderBy('id', 'DESC')
        ->limit(8)
        ->latest()
        ->get();

@endphp

@if (count($products) > 0)
    <div class="product pt-50 feature-h-one">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-9 col-sm-6">
                    <div class="product-section mb-30">
                        <h6 class="product--section__title f-800 white-color grenadier-bg">
                            Latest Items
                        </h6>
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-sm-6">
                <div class="all__product--link text-right mb-30">
                    <a class="all-link" href="shop-collection.html">Discover All Products<span
                            class="lnr lnr-arrow-right"></span></a>
                </div>
            </div> --}}

            </div>
            <div class="row">

                @forelse ($products as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="product-grid mr-4">
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
                                    <a type="submit" style="cursor:pointer;" data-product_id="{{ $product->id }}"
                                        class="add-to-cart add_to_cart_btn_product"><i class="fas fa-shopping-cart"></i>
                                        Add To
                                        Cart
                                    </a>

                                    {{-- <a type="submit" data-product_id="{{ $product->id }}" 
                                        class="btn btn-primary btn-sm add_to_cart_btn_product">
                                        Add To Cart Details
                                    </a> --}}

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
                                            <h5 class="grenadier-color mb-0 fw-bold">
                                                Tk {{ $product->sas_price }}
                                            </h5>
                                        @elseif ($product->price_status == 'offer_price')
                                            <h5 class="grenadier-color mb-0 fw-bold">
                                                Tk {{ $product->discount_price }}</h5>
                                        @else
                                            <h5 class="grenadier-color mb-0 fw-bold">Tk
                                                {{ $product->price }}
                                            </h5>
                                        @endif
                                    </div>
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
@endif
