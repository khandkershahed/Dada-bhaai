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
                                        <div class="product-grid mr-3">
                                            <div class="product-image">
                                                <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                                    class="image">

                                                    <img src=" {{ asset($product->product_image) }}"
                                                        data-tip="{{ $product->product_name }}"
                                                        style="width:100%; height: 300px;">
                                                </a>

                                                {{-- <span class="product-discount-label">New</span> --}}

                                                <ul class="product-links">

                                                    <li><a style="cursor: pointer;" id="{{ $product->id }}"
                                                            onclick="addToWishList(this.id)" data-tip="Wishlist"><i
                                                                class="far fa-heart"></i></a></li>

                                                    <li><a type="submit" style="cursor:pointer;" class="add_to_compare"
                                                            data-product_id="{{ $product->id }}" data-tip="Compare"><i
                                                                class="fas fa-random"></i></a></li>
                                                </ul>
                                            </div>
                                            <div
                                                class="product-content d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span><a class="text-muted"
                                                            href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}">{{ $product->brand->brand_name }}</a>
                                                    </span>
                                                    <h3 class="title font-weight-bold"><a
                                                            href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}">{{ substr($product->product_name, 0, 18) }}</a>
                                                    </h3>
                                                </div>
                                                <div class="price font-weight-bold pr-2">
                                                    @if ($product->price_status == 'rfq')
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            Tk {{ $product->sas_price }}
                                                        </h6>
                                                    @elseif ($product->price_status == 'offer_price')
                                                        <del>Tk {{ $product->price }}</del>
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">Tk
                                                            {{ $product->discount_price }}
                                                        </h6>
                                                    @elseif ($product->price_status == 'price')
                                                        <h6 class="grenadier-color mb-0 font-weight-bold">
                                                            Tk {{ $product->price }}
                                                        </h6>
                                                    @endif
                                                </div>
                                            </div>
                                            <div>
                                                <a type="submit" style="cursor:pointer;"
                                                    class="add-cart add_to_cart_btn_product"
                                                    data-product_id="{{ $product->id }}">Add to cart</a>
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



