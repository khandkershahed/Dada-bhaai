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
                        <div class="product-grid mb-3">
                            <div class="product-image">
                                <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                    class="image">

                                    <img class="pic-1" src="{{ asset($product->product_image) }}"
                                        data-tip="{{ $product->product_name }}" style="width:100%;height: 500px;">

                                </a>

                                <ul class="product-labels">
                                    <li class="px-3">New</li>
                                </ul>

                                <ul class="product-links">
                                    <li><a style="cursor: pointer;" id="{{ $product->id }}"
                                            onclick="addToWishList(this.id)" data-tip="Wishlist"><i
                                                class="far fa-heart"></i></a></li>
                                    <li><a type="submit" style="cursor:pointer;" data-product_id="{{ $product->id }}"
                                            data-tip="Compare"><i class="fas fa-random"></i></a></li>
                                </ul>
                                <a type="submit" style="cursor:pointer;" data-product_id="{{ $product->id }}"
                                    class="add-to-cart">Add to cart</a>
                            </div>
                            <div class="product-content">
                                <div>
                                    <span><a class="text-muted" href="#">{{ $product->brand->brand_name }}</a>
                                    </span>
                                    <h3 class="title"><a href="#">{{ substr($product->product_name, 0, 18) }}</a>
                                    </h3>
                                </div>
                                <div>
                                    <div class="price fw-bold">
                                        @if ($product->price_status == 'rfq')
                                            <h6 class="grenadier-color mb-0 fw-bold">
                                                Tk {{ $product->sas_price }}
                                            </h6>
                                        @elseif ($product->price_status == 'offer_price')
                                            <del>Tk {{ $product->price }}</del>
                                            <h6 class="grenadier-color mb-0 fw-bold">Tk {{ $product->discount_price }}
                                            </h6>
                                        @elseif ($product->price_status == 'price')
                                            <h6 class="grenadier-color mb-0 fw-bold">
                                                Tk {{ $product->price }}
                                            </h6>
                                        @endif
                                    </div>
                                    {{-- <span>
                                        <del>250$</del>
                                    </span> --}}
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
