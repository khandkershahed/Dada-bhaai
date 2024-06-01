@php

    $products = App\Models\Admin\Product::where('status', '1')
        ->where('feature', '1')
        ->orderBy('id', 'DESC')
        ->limit(8)
        ->latest()
        ->get();

@endphp


@if (count($products) > 0)
    <div class="product pt-60 fix">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="product-section mb-30">
                        <h6 class="product--section__title f-800 white-color grenadier-bg">
                            Featured Items
                        </h6>
                    </div>
                </div>

                {{-- <div class="col-sm-6">
                <div class="all__product--link text-right mb-30">
                    <a class="all-link" href="shop-collection.html">Discover All Products<span
                            class="lnr lnr-arrow-right"></span></a>
                </div>
            </div> --}}

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="product__active owl-carousel mb-20">

                        @forelse ($products as $product)
                            <div class="product-grid mr-4">

                                <div class="product-image">
                                    <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                        class="image">
                                        <img class="pic-1" src="{{ asset($product->product_image) }}"
                                            title="{{ $product->product_name }}">
                                    </a>
                                    <div class="product-button-group">
                                        {{-- Wishlist Icon --}}
                                        <a style="cursor: pointer;" id="{{ $product->id }}"
                                            onclick="addToWishList(this.id)"><i class="fas fa-heart"></i></a>

                                        {{-- Add To Cart Icon --}}
                                        <a type="submit" style="cursor:pointer;" data-product_id="{{ $product->id }}"
                                            class="add-to-cart add_to_cart_btn_product"><i
                                                class="fas fa-shopping-cart"></i>
                                            Add To Cart
                                        </a>

                                        {{-- Compare Icon --}}
                                        <a href="javascript:;"><i class="fas fa-random"></i></a>

                                    </div>
                                </div>
                                <div class="product-content row align-items-center">
                                    <div class="col-lg-8">
                                        <span class="cate-name">{{ $product->brand->brand_name }}</span>

                                        <h6 class="product__title mine__shaft-color f-700 mb-0 text-start">
                                            <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                                title="{{ $product->product_name }}">
                                                {{ substr($product->product_name, 0, 18) }}
                                            </a>
                                        </h6>


                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-end">

                                            @if ($product->price_status == 'rfq')
                                                <h6 class="grenadier-color mb-0 fw-bold">
                                                    Tk {{ $product->sas_price }}
                                                </h6>
                                            @elseif ($product->price_status == 'offer_price')
                                                <del>Tk {{ $product->price }}</del>
                                                <h6 class="grenadier-color mb-0 fw-bold">Tk
                                                    {{ $product->discount_price }}
                                                </h6>
                                            @elseif ($product->price_status == 'price')
                                                <h6 class="grenadier-color mb-0 fw-bold">
                                                    Tk {{ $product->price }}
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
@else
@endif
