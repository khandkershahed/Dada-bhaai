@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
@section('title', 'Dada Bhaai | Product Details')
<!-- Main -->
<main class="main--wrapper">
    <!-- Shop-details start -->
    <section class="shop-details-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="shop-bred pt-35 pb-35">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:;">{{ $product->category->category_name }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:;">{{ $product->subcategory->subcategory_name }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="javascript:;">{{ $product->childcategory->childcategory_name }}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="pro-img">
                        <div class="tab-content" id="myTabContent">
                            @forelse ($multiImages as $key => $multiImage)
                                <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}"
                                    id="multiImg{{ $multiImage->id }}" role="tabpanel" aria-labelledby="home-tab5">
                                    <img src="{{ asset($multiImage->multi_image) }}" class="img-fluid mb-2"
                                        alt="" style="width:100%; height: 400px;" />
                                </div>
                            @empty
                                <img src="{{ asset('upload/no_image.jpg') }}" class="img-fluid mb-2" alt=""
                                    style="width:100%; height: 400px;" />
                            @endforelse
                        </div>
                        <ul class="nav" id="myTab1" role="tablist">
                            @forelse ($multiImages as $key => $multiImage)
                                <li class="nav-item">
                                    <a class="nav-link {{ $key == 0 ? 'active' : '' }}" id="home-tab5" data-toggle="tab"
                                        href="#multiImg{{ $multiImage->id }}" role="tab" aria-controls="home5"
                                        aria-selected="true">
                                        <img src="{{ asset($multiImage->multi_image) }}" class="img-fluid"
                                            alt="" style="width: 75px;height: 75px; margin-bottom: 10px;" />
                                    </a>
                                </li>
                            @empty
                                <img src="{{ asset('upload/no_image.jpg') }}" class="img-fluid" alt=""
                                    style="width: 75px;height: 75px; margin-bottom: 10px;" />
                            @endforelse
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row gx-0">
                        <div class="col-lg-8 col-md-12 order-3 order-lg-2">
                            <div class="pro-content">
                                <span>{{ $product->category->category_name }}</span>

                                <h5 class="title" id="dpname">
                                    {{ $product->product_name }}
                                </h5>

                                <div class="pro-code">
                                    <ul class="d-flex flex-column justify-content-between">
                                        <li>SKU: <span>{{ $product->sku_code }}</span></li>
                                        <li>MF Code: <span>{{ $product->mf_code }}</span></li>
                                        <li>Price: <span class="grenadier-color">{{ $product->price }}</span></li>
                                    </ul>
                                    <p>{!! $product->short_desc !!}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-sm-12">
                                <div class="product-section2 mt-40">
                                    <h6 class="product--section__title2 pb-30" id="releted-tab" data-toggle="tab"
                                        href="#releted" role="tab" aria-controls="releted" aria-selected="true">
                                        <span>Related </span> Accessories Of This Product
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 px-0">
                            <div class="releted_accessories">

                                @forelse ($relativeChild as $product)
                                    <div class="card border-0 shadow-sm">

                                        <div class="card-header p-0 border-0">
                                            <img src="{{ asset($product->product_image) }}" class="border img-fluid"
                                                style="width: 100%; height: 140px;" alt="" />
                                        </div>

                                        <div class="card-body p-0">
                                            <div class="container">
                                                <div class="row align-items-center p-1" style="background-color: #eee">
                                                    <div class="col-lg-6 px-0">
                                                        <small id="drpname"
                                                            class="text-black">{{ $product->product_name }}</small>

                                                    </div>
                                                    <div class="col-lg-6 px-0">
                                                        <div class="text-right">
                                                            @if ($product->price_status == 'rfq')
                                                                <small class="grenadier-color mb-0">
                                                                    Tk {{ $product->sas_price }}
                                                                </small>
                                                            @elseif ($product->price_status == 'offer_price')
                                                                <small class="grenadier-color mb-0">
                                                                    Tk {{ $product->discount_price }}</small>
                                                            @else
                                                                <small class="grenadier-color mb-0">Tk
                                                                    {{ $product->price }}
                                                                </small>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <small><a type="submit" onclick="addToCartOneRelated()"
                                                                class="">+</a></small>
                                                        <input type="hidden" class="mb-0  border-1" name=""
                                                            value="1" min="1" id="drqty"
                                                            style="width: 50px" />
                                                        <input type="hidden" id="onerproduct_id"
                                                            value="{{ $product->id }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <P>No Product Avaiable</P>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cart-wrapper">
                        <div class="cart-title d-flex justify-content-between align-items-center">
                            <h6 class="d-flex justify-content-between align-items-center">
                                <div>
                                    Product
                                </div>
                                <div>
                                    Availability: <span class="text-danger">Pre Order</span>
                                </div>
                            </h6>
                        </div>
                        <div class="mb-20 d-flex justify-content-between align-items-center">
                            <div>
                                <div>
                                    <div class="number d-flex align-items-center">
                                        <button type="button" class="buttons-count" id="decrease">-</button>
                                        <input type="text" disabled class="mb-0 border-1 text-center"
                                            name="" value="1" min="1" id="dqty"
                                            style="width: 50px" />
                                        <button type="button" class="buttons-count" id="increase">+</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                @if ($product->price_status == 'rfq')
                                    <h5 class="grenadier-color f-600 mb-0">
                                        Tk {{ $product->sas_price }}
                                    </h5>
                                @elseif ($product->price_status == 'offer_price')
                                    <h5 class="grenadier-color f-600 mb-0">
                                        Tk {{ $product->discount_price }}</h5>
                                @else
                                    <h5 class="grenadier-color f-600 mb-0">Tk {{ $product->price }}
                                    </h5>
                                @endif
                                <del class="text-muted">Tk {{ $product->price }}</del>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0" style="border-bottom: 1px solid #ccc;">Accessories</p>
                            <div id="miniCartRelated"></div>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="hidden" id="oneproduct_id" value="{{ $product->id }}">
                            <a type="submit" onclick="addToCartOne()" class="cart-button w-100 mt-0">Add
                                Cart</a>
                            <a type="submit" onclick="buyToCartOne()" class="cart-button w-100 ml-3 mt-0">Buy
                                Now</a>
                        </div>

                        {{-- <div class="last pt-15 align-items-center d-flex justify-content-center">
                                <a href="#">Add To Wishlist</a>
                                <a href="#">Compare</a>
                            </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Shop-details end -->

    <!-- Shop-details tab start -->
    <section class="shop-details-desc">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="desc-wrapper">
                        <ul class="nav custom-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab11" data-toggle="tab" href="#home11" role="tab"
                                    aria-controls="home11" aria-selected="true">Specification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab11" data-toggle="tab" href="#profile11"
                                    role="tab" aria-controls="profile11" aria-selected="false">Accessories
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab11" data-toggle="tab" href="#product-blogs"
                                    role="tab" aria-controls="product-blogs" aria-selected="false">Overview</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade" id="home11" role="tabpanel" aria-labelledby="home-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <div class="spe-wrapper">
                                                <p>{!! $product->specification !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="profile11" role="tabpanel"
                                aria-labelledby="profile-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-content mb-40">
                                                <p>{!! $product->accessories !!}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="product-blogs" role="tabpanel"
                                aria-labelledby="contact-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row small-padding">

                                        <p>{!! $product->overview !!}</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop-details tab end -->

    <!-- Product  -->
    <div class="product pt-75 product-h-two">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-12">
                    <div class="section-header">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-sm-6">
                                <div class="product-section2">
                                    <h6 class="product--section__title2" id="releted-tab" data-toggle="tab"
                                        href="#releted" role="tab" aria-controls="releted" aria-selected="true">
                                        <span>Related Category</span>
                                    </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="">

                <div class="tab-pane fade show active" id="nav-home-all" role="tabpanel"
                    aria-labelledby="nav-home-tab-all">
                    <div class="product__active owl-carousel">

                        @forelse ($relativeProduct as $product)
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
                                        <a type="submit" style="cursor:pointer;"
                                            data-product_id="{{ $product->id }}"
                                            class="add-to-cart add_to_cart_btn_product"><i
                                                class="fas fa-shopping-cart"></i> Add To
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
                            <span>No Product Avaiable</span>
                        @endforelse

                    </div>
                </div>

                {{-- <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="releted_product" role="tabpanel"
                            aria-labelledby="releted_product-tab">

                            <div class="row">

                                <div class="col-xl-4 mb-4">

                                    @forelse ($relativeProduct as $product)
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                                        class="img-wrapper">
                                                        <img class="img" src="{{ asset($product->product_image) }}"
                                                            alt="" style="height: 230px;" />
                                                        <img class="img secondary-img"
                                                        src="img/allproducts/products__thumb__02.jpg" alt="" />
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

                        </div>

                        <div class="tab-pane fade" id="apple" role="tabpanel" aria-labelledby="apple-tab">
                            <div class="row">
                                <div class="col-xl-3 mb-4">
                                    <div class="product__single">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                    <a href="product-details.html">Wireless Audioing Systems Purple
                                                        Degree</a>
                                                </h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="img/allproducts/products__thumb__33.jpg"
                                                        alt="" />
                                                    <img class="img secondary-img"
                                                        src="img/allproducts/products__thumb__05.jpg" alt="" />
                                                </a>
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
                        </div>

                        <div class="tab-pane fade" id="mark" role="tabpanel" aria-labelledby="mark-tab">
                            <div class="row">
                                <div class="col-xl-3 mb-4">
                                    <div class="product__single">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                    <a href="product-details.html">Wireless Audioing Systems Purple
                                                        Degree</a>
                                                </h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="img/allproducts/products__thumb__33.jpg"
                                                        alt="" />
                                                    <img class="img secondary-img"
                                                        src="img/allproducts/products__thumb__05.jpg" alt="" />
                                                </a>
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
                        </div>

                        <div class="tab-pane fade" id="acronis" role="tabpanel" aria-labelledby="acronis-tab">
                            <div class="row">
                                <div class="col-xl-3 mb-4">
                                    <div class="product__single">
                                        <div class="product__box">
                                            <div class="product__content--top">
                                                <span class="cate-name">SAMSUNG</span>
                                                <h6 class="product__title mine__shaft-color f-700 mb-0">
                                                    <a href="product-details.html">Wireless Audioing Systems Purple
                                                        Degree</a>
                                                </h6>
                                            </div>
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="img-wrapper">
                                                    <img class="img" src="img/allproducts/products__thumb__33.jpg"
                                                        alt="" />
                                                    <img class="img secondary-img"
                                                        src="img/allproducts/products__thumb__05.jpg" alt="" />
                                                </a>
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
                        </div>

                    </div> --}}

            </div>

        </div>
    </div>
    <!-- Product end -->

    <!-- Subscribe -->
    {{-- <div class="subscribe subscribe--area grenadier-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                            <div class="left d-flex justify-content-between align-items-center">
                                <div class="newsletter__title">
                                    <span class="notification--icon"><img src="img/icon/notification-icon.png"
                                            alt="notification" /></span>
                                    <span class="notification__title--heading f-800 white-color">Subscribe for Join
                                        Us!</span>
                                </div>
                                <div class="newsletter--message d-none d-xl-block">
                                    <p class="newsletter__message__title mb-0">
                                        .... & receive $20 coupne for first Shopping & free
                                        delivery.
                                    </p>
                                </div>
                            </div>
                            <form class="right newsletter--form pos-rel">
                                <input class="newsletter--input" type="text"
                                    placeholder="Enter Your Email Address ..." />
                                <button class="btn newsletter--button" type="button">
                                    <img src="img/icon/plan-icon.png" alt="" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Subscribe End -->

</main>
<!-- Main End -->
@endsection
