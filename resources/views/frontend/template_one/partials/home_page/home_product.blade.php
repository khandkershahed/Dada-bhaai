@php
    $categorys = App\Models\Admin\Category::where('status', '1')->orderBy('id', 'ASC')->limit(4)->get();
    $allproducts = App\Models\Admin\Product::where('status', '1')->latest()->get();
@endphp

<section class="pt-80 pb-20">
    <div class="">
        <div class="container">
            <div class="row all__product--row align-items-center justify-content-between">
                <div class="col-xl-12 col-md-12">
                    <div class="all__product--menu mb-30">
                        <nav>
                            <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link btn orange-bg-btn pure__black-color active"
                                   data-toggle="tab" href="#categorys" role="tab" aria-controls="nav-home" aria-selected="true">All</a>

                                @forelse ($categorys as $category)
                                    @if ($category->products->count() > 0)
                                        <a class="nav-item nav-link btn orange-bg-btn pure__black-color"
                                           data-toggle="tab" href="#categorys{{ $category->id }}" role="tab" aria-controls="nav-home"
                                           aria-selected="true">{{ $category->category_name }}</a>
                                    @endif
                                @empty
                                    <p>No Category Available</p>
                                @endforelse
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="all__product--body pb-20">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content" id="nav-tabContent">

                        <!-- All Products Tab -->
                        <div class="tab-pane fade show active" id="categorys" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="product__active product_slider owl-carousel mr-2">
                                @foreach ($allproducts as $cat_product)
                                    <div class="product-grid mr-3">
                                        <div class="product-image">
                                            <a href="{{ url('product' . '/' . $cat_product->id . '/' . $cat_product->product_slug) }}" class="image">
                                                <img title="{{ $cat_product->product_name }}"
                                                     src="{{ asset($cat_product->product_image) }}"
                                                     data-tip="{{ $cat_product->product_name }}"
                                                     style="width:100%; height: 300px;">
                                            </a>
                                            <ul class="product-links">
                                                <li><a type="submit" class="add_to_wishlist" style="cursor: pointer;" data-product_id="{{ $cat_product->id }}" data-tip="Wishlist"><i class="far fa-heart"></i></a></li>
                                                <li><a type="submit" style="cursor:pointer;" class="add_to_compare" data-product_id="{{ $cat_product->id }}" data-tip="Compare"><i class="fas fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-content d-flex justify-content-between align-items-center">
                                            <div>
                                                <span><a class="text-muted" href="{{ url('product' . '/' . $cat_product->id . '/' . $cat_product->product_slug) }}">{{ $cat_product->brand->brand_name }}</a></span>
                                                <h3 title="{{ $cat_product->product_name }}" class="title font-weight-bold">
                                                    <a href="{{ url('product' . '/' . $cat_product->id . '/' . $cat_product->product_slug) }}">{{ substr($cat_product->product_name, 0, 25) }}</a>
                                                </h3>
                                            </div>
                                            <div class="price font-weight-bold pr-2">
                                                @if ($cat_product->price_status == 'rfq')
                                                    <h6 class="grenadier-color mb-0 font-weight-bold">${{ $cat_product->sas_price }}</h6>
                                                @elseif ($cat_product->price_status == 'offer_price')
                                                    <del>${{ $cat_product->price }}</del>
                                                    <h6 class="grenadier-color mb-0 font-weight-bold">${{ $cat_product->discount_price }}</h6>
                                                @elseif ($cat_product->price_status == 'price')
                                                    <h6 class="grenadier-color mb-0 font-weight-bold">${{ $cat_product->price }}</h6>
                                                @endif
                                            </div>
                                        </div>
                                        <div>
                                            <a type="submit" style="cursor:pointer;" class="add-cart add_to_cart_btn_product" data-product_id="{{ $cat_product->id }}">Add to cart</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Category-specific Tabs -->
                        @foreach ($categorys as $key => $category)
                            <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="categorys{{ $category->id }}" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="product__active product_slider owl-carousel mr-2">
                                    @foreach ($category->products as $cat_product)
                                        <!-- Check if the product is not in the "All" products list (to avoid repetition) -->
                                        @if (!$allproducts->contains('id', $cat_product->id))
                                            <div class="product-grid mr-3">
                                                <div class="product-image">
                                                    <a href="{{ url('product' . '/' . $cat_product->id . '/' . $cat_product->product_slug) }}" class="image">
                                                        <img title="{{ $cat_product->product_name }}"
                                                             src="{{ asset($cat_product->product_image) }}"
                                                             data-tip="{{ $cat_product->product_name }}"
                                                             style="width:100%; height: 300px;">
                                                    </a>
                                                    <ul class="product-links">
                                                        <li><a type="submit" class="add_to_wishlist" style="cursor: pointer;" data-product_id="{{ $cat_product->id }}" data-tip="Wishlist"><i class="far fa-heart"></i></a></li>
                                                        <li><a type="submit" style="cursor:pointer;" class="add_to_compare" data-product_id="{{ $cat_product->id }}" data-tip="Compare"><i class="fas fa-random"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-content d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <span><a class="text-muted" href="{{ url('product' . '/' . $cat_product->id . '/' . $cat_product->product_slug) }}">{{ $cat_product->brand->brand_name }}</a></span>
                                                        <h3 title="{{ $cat_product->product_name }}" class="title font-weight-bold">
                                                            <a href="{{ url('product' . '/' . $cat_product->id . '/' . $cat_product->product_slug) }}">{{ substr($cat_product->product_name, 0, 25) }}</a>
                                                        </h3>
                                                    </div>
                                                    <div class="price font-weight-bold pr-2">
                                                        @if ($cat_product->price_status == 'rfq')
                                                            <h6 class="grenadier-color mb-0 font-weight-bold">${{ $cat_product->sas_price }}</h6>
                                                        @elseif ($cat_product->price_status == 'offer_price')
                                                            <del>${{ $cat_product->price }}</del>
                                                            <h6 class="grenadier-color mb-0 font-weight-bold">${{ $cat_product->discount_price }}</h6>
                                                        @elseif ($cat_product->price_status == 'price')
                                                            <h6 class="grenadier-color mb-0 font-weight-bold">${{ $cat_product->price }}</h6>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div>
                                                    <a type="submit" style="cursor:pointer;" class="add-cart add_to_cart_btn_product" data-product_id="{{ $cat_product->id }}">Add to cart</a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
