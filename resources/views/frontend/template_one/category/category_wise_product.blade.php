@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <!-- shop area start -->
    <div class="product shop-page pt-30 pb-80">
        <div class="container">
            <div class="row">

                {{-- Brand  --}}
                <div class="col-lg-3 order-2 order-lg-1">

                    @php

                        $brands = App\Models\Brand::where('status', '1')
                            ->orderBy('brand_name', 'ASC')
                            ->latest()
                            ->limit(7)
                            ->get();

                        $categorys = App\Models\Admin\Category::where('status', '1')
                            ->orderBy('category_name', 'ASC')
                            ->latest()
                            ->limit(9)
                            ->get();

                    @endphp

                    <div class="common-sidebar shop-banner-sidebar">
                        <div class="common-cat">
                            <div class="side-title">
                                <h6>Brands</h6>
                            </div>
                            <ul>
                                @forelse ($brands as $brand)
                                    <li><a href="{{ url($brand->brand_name . '/' . $brand->id . '/' . $brand->brand_slug) }}">{{ $brand->brand_name }}</a></li>
                                @empty
                                    <p>No Brand Avaiable</p>
                                @endforelse
                            </ul>
                        </div>
                        <div class="common-cat mt-4">
                            <div class="side-title">
                                <h6>Categories</h6>
                            </div>
                            <ul>
                                @forelse ($categorys as $category)
                                    <li><a
                                            href="{{ url($category->category_name . '/' . $category->id . '/' . $category->category_slug) }}">{{ $category->category_name }}</a>
                                    </li>
                                @empty
                                    <p>No Category Avaiable</p>
                                @endforelse
                            </ul>
                        </div>
                        <div class="slider-range mt-50">
                            <div class="side-title mb-30">
                                <h6>Filter By Price</h6>
                            </div>
                            <div id="slider-range"></div>
                            <p>
                                <label for="amount">Price :</label>
                                <input type="text" id="amount" readonly>
                            </p>
                        </div>
                        <div class="side-color mt-45">
                            <div class="side-title">
                                <h6>Color</h6>
                            </div>
                            <ul class="mt-15">
                                <li>
                                    <a href="#">Blue (2)</a>
                                </li>
                            </ul>
                        </div>

                        {{-- <div class="side-size mt-50">
                            <div class="side-title">
                                <h6>Size</h6>
                            </div>
                            <ul class="mt-15">
                                <li>
                                    <a href="#">Small (2)</a>
                                    <a href="#">Large (53)</a>
                                </li>
                                <li>
                                    <a href="#">Extra Large (16)</a>
                                    <a href="#">Medium (20)</a>
                                </li>
                                <li><a href="#">Extra Small (2)</a></li>
                                <li><a href="#">Huge (53)</a></li>
                            </ul>
                        </div> --}}

                        <div class="common-tag mt-50">
                            <div class="side-title">
                                <h6>Popular Tag</h6>
                            </div>
                            <ul class="mt-25 mb-15">
                                <li><a href="#">Small</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Grey</a></li>
                                <li><a href="#">Yellows</a></li>
                                <li><a href="#">Magenta</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Small</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Grey</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="shop-banner-bg pt-60 pb-60 mb-50"
                                data-background="{{ asset('frontend/template_one/assets/img/bg/shop-banner-bg.jpg') }}">
                                <div class="collection-text">
                                    <h5 class="f-800"><a href="javascript:;">Category</a></h5>
                                    <span class="f-200 mb-40">{{ $catwiseproduct->category_name }}</span>
                                    {{-- <div class="product-countdown-three">
                                        <div class="time-count-deal">
                                            <div class="countdown-list" data-countdown="2020/12/01"></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="row">
                            <div class="col-lg-5 col-md-4">
                                <div class="shop-bar d-flex align-items-center">
                                    <h4 class="f-800 cod__black-color">Category</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ $catwiseproduct->category_name }}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8">
                                <div class="bar-wrapper">
                                    <div class="select-text">
                                        <span>Showing 1–11 of 23 Results</span>
                                    </div>
                                    <div class="shop-select">
                                        <select name="select" id="shop-select-one">
                                            <option value="1">Deafult Sorting</option>
                                            <option value="2">Deafult Sorting</option>
                                            <option value="3">Deafult Sorting</option>
                                            <option value="4">Deafult Sorting</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row mt-30">

                        @forelse ($products as $product)
                            <div class="col-lg-4">

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
                                        {{-- <a href="#"><span class="lnr lnr-eye"></span></a> --}}
                                        <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"><span
                                                class="lnr lnr-cart"></span></a>
                                        <a href="#"><span class="lnr lnr-sync"></span></a>
                                    </div>
                                </div>

                            </div>
                        @empty
                            <p class="text-dander">No Product Avaiable</p>
                        @endforelse

                    </div>

                    <div class="row mt-10">
                        <div class="col-sm-12">
                            <div class="common-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-left"></i> Prev</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next <i
                                                    class="fas fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- shop area end -->

    <!-- Subscribe -->

    {{-- <div class="subscribe subscribe--area grenadier-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="newsletter newsletter--box d-flex justify-content-between align-items-center pos-rel">
                        <div class="left d-flex justify-content-between align-items-center">
                            <div class="newsletter__title">
                                <span class="notification--icon"><img src="img/icon/notification-icon.png"
                                        alt="notification"></span>
                                <span class="notification__title--heading f-800 white-color">Subscribe for Join Us!</span>
                            </div>
                            <div class="newsletter--message d-none d-xl-block">
                                <p class="newsletter__message__title mb-0">.... & receive $20 coupne for first Shopping &
                                    free delivery.</p>
                            </div>
                        </div>
                        <form class="right newsletter--form pos-rel">
                            <input class="newsletter--input" type="text" placeholder="Enter Your Email Address ...">
                            <button class="btn newsletter--button" type="button"><img src="img/icon/plan-icon.png"
                                    alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Subscribe End -->
@endsection
