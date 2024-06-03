@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
@section('title', 'Dada Bhaai | ' . $brandwiseproduct->brand_name)


<!-- shop area start -->
<div class="product shop-page pt-30 pb-80" style="margin-top: 60px;">
    <div class="container">
        <div class="row">

            @include('frontend.template_one.partials.frontend_sidebar')

            <div class="col-lg-9 order-1 order-lg-2">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="shop-banner-bg pt-120 pb-120 mb-50"
                            data-background="{{ asset('storage/brand/' . $brandwiseproduct->brand_image) }}">
                            <div class="collection-text">
                                {{-- <h5 class="f-800"><a href="javascript:;">Brand</a></h5> --}}
                                {{-- <span class="f-200 mb-40">{{ $brandwiseproduct->brand_name }}</span> --}}
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

                        <div class="col-lg-4 col-md-4">
                            <div class="shop-bar d-flex align-items-center">
                                <div class="shop-bar">
                                    <h6 class="f-800 cod__black-color">Brand</h6>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ $brandwiseproduct->brand_name }}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        {{-- New Section  --}}
                        <div class="col-lg-4 col-md-2">
                            <div class="text-center" style="margin-top: 10px;">
                                <span>Showing <span class="grenadier-color">{{ count($products) }}</span> of <span
                                        class="grenadier-color">{{ $products->total() }}</span> Results</span>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="">

                                <div class="float-right">
                                    <select name="" id="sortBy">
                                        <option selected disabled>SortBy Product</option>

                                        <option value="nameAtoZ" {{ $sort == 'nameAtoZ' ? 'selected' : '' }}>Product
                                            Name: A to Z
                                        </option>

                                        <option value="nameZtoA" {{ $sort == 'nameZtoA' ? 'selected' : '' }}>Product
                                            Name: Z to A
                                        </option>

                                    </select>
                                </div>

                            </div>
                        </div>
                        {{-- New Setion  --}}

                    </div>
                </div>



                <div class="row mt-30">

                    @forelse ($products as $product)
                        <div class="col-lg-4">

                            <div class="product-grid">

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
                                        <div class="price text-end">

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

                        </div>
                    @empty
                        <p class="text-dander">No Product Avaiable</p>
                    @endforelse

                </div>

                <div class="row mt-10">
                    <div class="col-sm-12">
                        <div class="common-pagination">
                            {{ $products->links('vendor.pagination.template_one') }}
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

@section('brandscripts')
<script>
    $('#sortBy').change(function(e) {
        e.preventDefault();
        let sortBy = $('#sortBy').val();
        window.location = "{{ url('' . $route . '') }}/{{ $brandId }}/{{ $brandSlug }}?sort=" +
            sortBy;

    });
</script>
@endsection
