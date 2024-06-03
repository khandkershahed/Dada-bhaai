@php
    $categorys = App\Models\Admin\Category::where('status', '1')->orderBy('id', 'ASC')->limit(4)->get();
@endphp


<section class="pt-80 pb-20">
    <div class="">
        <div class="container">
            <div class="row all__product--row align-items-center justify-content-between">
                <div class="col-xl-12 col-md-12">
                    <div class="all__product--menu mb-30">
                        <nav>
                            <hr class="m-0 p-0" style="margin-bottom: -25px !important" />
                            <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">

                                @forelse ($categorys as $key=>$category)
                                    <a class="nav-item nav-link {{ $key == 0 ? 'active' : '' }} btn orange-bg-btn pure__black-color"
                                        data-toggle="tab" href="#categorys{{ $category->id }}" role="tab"
                                        aria-controls="nav-home" aria-selected="true">{{ $category->category_name }}</a>
                                @empty
                                    <p>No Category Avaiable</p>
                                @endforelse


                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="all__product--body">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content" id="nav-tabContent">
                        @foreach ($categorys as $key => $category)
                            <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}"
                                id="categorys{{ $category->id }}" role="tabpanel" aria-labelledby="nav-home-tab">
                                @php

                                    $catwiseProduct = App\Models\Admin\Product::where('status', '1')
                                        ->where('category_id', $category->id)
                                        ->orderBy('product_name', 'ASC')
                                        ->limit(8)
                                        ->latest()
                                        ->get();

                                @endphp

                                <div class="product__active owl-carousel mr-2">

                                    @forelse ($catwiseProduct as $product)
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
                                                        onclick="addToWishList(this.id)"><i
                                                            class="fas fa-heart"></i></a>

                                                    {{-- Add To Cart Icon --}}
                                                    <a type="submit" style="cursor:pointer;"
                                                        data-product_id="{{ $product->id }}"
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
