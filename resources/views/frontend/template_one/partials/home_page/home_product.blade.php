@php

    $products = App\Models\Admin\Product::where('status', '1')->latest()->limit(8)->get();
    $categorys = App\Models\Admin\Category::where('status', '1')->latest()->limit(3)->get();

@endphp

<section class="all__product pt-80 pb-20">
    <div class="all__product--nav">
        <div class="container">
            <div class="row all__product--row align-items-center justify-content-between">
                <div class="col-xl-12 col-md-12">
                    <div class="all__product--menu mb-30">
                        <nav>
                            <hr class="m-0 p-0" style="margin-bottom: -25px !important" />

                            <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">

                                <a class="nav-item nav-link active btn orange-bg-btn pure__black-color"
                                    id="nav-home-tab-all" data-toggle="tab" href="#nav-home-all" role="tab"
                                    aria-controls="nav-home" aria-selected="true">All</a>

                                @forelse ($categorys as $category)
                                    <a class="nav-item nav-link btn orange-bg-btn pure__black-color" id="nav-home-tab"
                                        data-toggle="tab" href="#category{{ $category->id }}" role="tab"
                                        aria-controls="nav-home" aria-selected="true">{{ $category->category_name }}</a>
                                @empty
                                    <span>No Category Avaiable</span>
                                @endforelse

                                {{-- <a class="nav-item nav-link btn gray-bg-btn pure__black-color" id="nav-profile-tab"
                                    data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">TV &
                                    Home Appliances</a>

                                <a class="nav-item nav-link btn gray-bg-btn pure__black-color" id="nav-contact-tab"
                                    data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">Electronic Accessories</a> --}}

                            </div>
                        </nav>
                    </div>
                </div>

                {{-- <div class="col-xl-12">
                    <div class="all__product--link text-center mb-30">
                        <a class="all-link" href="shop-collection.html">Discover All Products<span
                                class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>

    <div class="all__product--body">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">

                    <div class="tab-content" id="nav-tabContent">

                        {{-- All Product  --}}
                        <div class="tab-pane fade show active" id="nav-home-all" role="tabpanel"
                            aria-labelledby="nav-home-tab-all">
                            <div class="product__active owl-carousel">

                                @forelse ($products as $product)
                                    <div class="product__single">
                                        <div class="product__box">
                                            <div class="product__thumb">
                                                <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                                    class="img-wrapper">
                                                    <img class="img" src="{{ asset($product->product_image) }}"
                                                        alt="" style="height: 230px;" />
                                                    {{-- <img class="img secondary-img"
                                                        src="img/allproducts/products__thumb__02.jpg" alt="" /> --}}
                                                </a>
                                            </div>
                                            <div class="product__content--top">
                                                <span class="cate-name">{{ $product->category->category_name }}</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                    <a
                                                        href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                                </h6>
                                            </div>

                                            <div class="product__content--rating d-flex justify-content-between">

                                                <div class="rating">
                                                    {{-- <ul class="list-inline">
                                                        <li class="rating-active">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-active">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-active">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul> --}}
                                                </div>

                                                <div class="price">

                                                    @if ($product->price_status == 'rfq')
                                                        <h5 class="grenadier-color f-600">${{ $product->sas_price }}
                                                        </h5>
                                                    @elseif ($product->price_status == 'offer_price')
                                                        <h5 class="grenadier-color f-600">
                                                            ${{ $product->discount_price }}</h5>
                                                    @else
                                                        <h5 class="grenadier-color f-600">${{ $product->price }}</h5>
                                                    @endif

                                                </div>

                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="#"><span class="lnr lnr-heart"></span></a>
                                            <a href="#"><span class="lnr lnr-eye"></span></a>
                                            <a href="#"><span class="lnr lnr-cart"></span></a>
                                            <a href="#"><span class="lnr lnr-sync"></span></a>
                                        </div>
                                    </div>
                                @empty
                                    <span>No Product Avaiable</span>
                                @endforelse

                            </div>
                        </div>
                        {{-- All Product  --}}

                        @foreach ($categorys as $category)
                            <div class="tab-pane fade" id="category{{ $category->id }}" role="tabpanel"
                                aria-labelledby="nav-home-tab">

                                @php
                                    $catwiseProduct = App\Models\Admin\Product::where('status', '1')
                                        ->where('category_id', $category->id)
                                        ->limit(4)
                                        ->latest()
                                        ->get();
                                @endphp

                                <div class="product__active owl-carousel">

                                    @forelse ($catwiseProduct as $product)
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">

                                                    <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                                        class="img-wrapper">

                                                        <img class="img" src="{{ asset($product->product_image) }}"
                                                            alt="" style="height: 230px;" />

                                                        {{-- <img class="img secondary-img"
                                                        src="img/allproducts/products__thumb__02.jpg" alt="" /> --}}
                                                    </a>

                                                </div>
                                                <div class="product__content--top">
                                                    <span
                                                        class="cate-name">{{ $product->category->category_name }}</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                        <a
                                                            href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                                    </h6>
                                                </div>

                                                <div class="product__content--rating d-flex justify-content-between">

                                                    <div class="rating">
                                                        {{-- <ul class="list-inline">
                                                        <li class="rating-active">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-active">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li class="rating-active">
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul> --}}
                                                    </div>

                                                    <div class="price">

                                                        @if ($product->price_status == 'rfq')
                                                            <h5 class="grenadier-color f-600">
                                                                ${{ $product->sas_price }}
                                                            </h5>
                                                        @elseif ($product->price_status == 'offer_price')
                                                            <h5 class="grenadier-color f-600">
                                                                ${{ $product->discount_price }}</h5>
                                                        @else
                                                            <h5 class="grenadier-color f-600">${{ $product->price }}
                                                            </h5>
                                                        @endif

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>

                                    @empty
                                        <p class="text-danger">No Product Avaiable</p>
                                    @endforelse

                                </div>
                            </div>
                        @endforeach



                        {{-- <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                            <div class="product__active owl-carousel">
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__01.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__02.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems Purple
                                                    Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__02.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__04.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems Purple
                                                    Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__03.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__05.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems Purple
                                                    Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__04.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__06.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems Purple
                                                    Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__05.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__07.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems Purple
                                                    Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__06.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__08.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems Purple
                                                    Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__07.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__09.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems Purple
                                                    Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <div class="product__active owl-carousel">
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__01.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__02.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems
                                                    Purple Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__02.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__04.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems
                                                    Purple Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__03.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__05.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems
                                                    Purple Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__04.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__06.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems
                                                    Purple Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__05.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__07.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems
                                                    Purple Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__06.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__08.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems
                                                    Purple Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                                <div class="product__single">
                                    <div class="product__box">
                                        <div class="product__thumb">
                                            <a href="product-details.html" class="img-wrapper">
                                                <img class="img" src="img/allproducts/products__thumb__07.jpg"
                                                    alt="" />
                                                <img class="img secondary-img"
                                                    src="img/allproducts/products__thumb__09.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product__content--top">
                                            <span class="cate-name">SAMSUNG</span>
                                            <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                <a href="product-details.html">Wireless Audioing Systems
                                                    Purple Degree</a>
                                            </h6>
                                        </div>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="rating">
                                                <ul class="list-inline">
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="rating-active">
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$2,299.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <a href="#"><span class="lnr lnr-heart"></span></a>
                                        <a href="#"><span class="lnr lnr-eye"></span></a>
                                        <a href="#"><span class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
