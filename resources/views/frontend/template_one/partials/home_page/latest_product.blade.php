@php

    $products = App\Models\Admin\Product::where('status', '1')
        ->where('status', '1')
        ->orderBy('id', 'ASC')
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

                        <div class="product__single mb-30">
                            <div class="product__box">
                                <div class="product__thumb">

                                    <a href="product-details.html" class="img-wrapper">
                                        <img class="img" src="{{ asset($product->product_image) }}" alt=""
                                            style="height: 230px;" />

                                    </a>
                                </div>

                                <div class="product__content--top">
                                    <span class="cate-name">{{ $product['category']['category_name'] }}</span>
                                    <h6 class="product__title mine__shaft-color f-700 mb-0">
                                        <a
                                            href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                    </h6>
                                </div>

                                <div class="product__content--rating d-flex justify-content-between align-items-center">

                                    <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                        class="btn btn-primary btn-sm">
                                        Add To Cart
                                    </a>

                                    <div class="price">
                                        @if ($product->price_status == 'rfq')
                                            <h5 class="grenadier-color f-600">
                                                ${{ $product->sas_price }}.00
                                            </h5>
                                        @elseif ($product->price_status == 'offer_price')
                                            <h5 class="grenadier-color f-600">
                                                ${{ $product->discount_price }}.00</h5>
                                        @else
                                            <h5 class="grenadier-color f-600">${{ $product->price }}.00
                                            </h5>
                                        @endif
                                    </div>

                                </div>

                            </div>
                            <div class="product-action">
                                <a style="cursor: pointer;" id="{{ $product->id }}"
                                    onclick="addToWishList(this.id)"><span class="lnr lnr-heart"></span></a>
                                {{-- <a href="#"><span class="lnr lnr-eye"></span></a> --}}
                                <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"><span
                                        class="lnr lnr-cart"></span></a>
                                {{-- <a href="#"><span class="lnr lnr-sync"></span></a> --}}
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
