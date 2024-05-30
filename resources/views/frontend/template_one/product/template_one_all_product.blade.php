@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
@section('title')
    DadaBhaai | Product
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- shop area start -->
<form action="{{ route('shop.filter') }}" method="POST">
    @csrf

    <div class="product shop-page pt-30 pb-80" style="margin-top: 60px;">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 order-2 order-lg-1">

                    <div class="common-sidebar shop-banner-sidebar">


                        {{-- Category --}}
                        <div class="common-cat">

                            <div class="side-title">
                                <h6>Categories</h6>
                            </div>

                            <ul>
                                @if (!empty($_GET['category']))
                                    @php
                                        $filterCat = explode(',', $_GET['category']);
                                    @endphp
                                @endif

                                @foreach ($categorys as $cat)
                                    @php
                                        $countProduct = App\Models\Admin\Product::where('category_id', $cat->id)->get();
                                    @endphp

                                    <li style="margin-left: 15px;">

                                        <label class="">
                                            <input type="checkbox" class="form-check-input" name="category[]"
                                                id="" value="{{ $cat->category_slug }}"
                                                @if (!empty($filterCat) && in_array($cat->category_slug, $filterCat)) checked @endif
                                                onchange="this.form.submit();">

                                            {{ $cat->category_name }} ({{ count($countProduct) }})

                                        </label>

                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        {{-- Category --}}

                        {{-- Brand  --}}
                        <div class="common-cat mt-4">
                            <div class="side-title">
                                <h6>Brands</h6>
                            </div>
                            <ul>

                                @if (!empty($_GET['brand']))
                                    @php
                                        $filterBrand = explode(',', $_GET['brand']);
                                    @endphp
                                @endif

                                @foreach ($brands as $brand)
                                    @php
                                        $countBrand = App\Models\Admin\Product::where('brand_id', $brand->id)->get();
                                    @endphp

                                    <li style="margin-left: 15px;">
                                        <label class="">
                                            <input type="checkbox" class="form-check-input" name="brand[]"
                                                id="" value="{{ $brand->brand_slug }}"
                                                @if (!empty($filterBrand) && in_array($brand->brand_slug, $filterBrand)) checked @endif
                                                onchange="this.form.submit();">

                                            {{ $brand->brand_name }} ({{ count($countBrand) }})

                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- Brand  --}}

                        {{-- Price --}}
                        <div class="slider-range mt-50">

                            <div class="side-title mb-30">
                                <h6>Filter By Price</h6>
                            </div>

                            <div id="slider-range" data-min="{{ HelperShop::minPrice() }}"
                                data-max="{{ HelperShop::maxPrice() }}"></div>

                            <p>
                                <input type="hidden" id="price_range" name="price_range"
                                    value="@if (!empty($_GET['price'])) {{ $_GET['price'] }} @endif">

                                @if (!empty($_GET['price']))
                                    @php
                                        $price = explode('-', $_GET['price']);
                                    @endphp
                                @endif

                                <label for="amount">Price :</label>

                                <input type="text" id="amount" class=""
                                    value="@if (!empty($_GET['price'])) ${{ $price[0] }} @else {{ HelperShop::minPrice() }} @endif-@if (!empty($_GET['price'])) ${{ $price[1] }} @else {{ HelperShop::maxPrice() }} @endif"
                                    readonly>


                            </p>

                            <button type="submit" class="lnk btn btn-primary">Filter</button>

                        </div>
                        {{-- Price --}}

                        {{-- Color --}}

                        {{-- @php
                                $colors = App\Models\Admin\Color::latest()->get();
                            @endphp

                            <div class="side-color mt-45">
                                <div class="side-title">
                                    <h6>Color</h6>
                                </div>
                                <ul class="mt-15">
                                    @foreach ($colors as $color)
                                        @php
                                            $colorProduct = App\Models\Admin\Product::where(
                                                'color_id',
                                                $color->id,
                                            )->get();
                                        @endphp

                                        <li>
                                            <a href="#">{{ $color->color_name }} ({{ count($colorProduct) }})</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div> --}}

                        {{-- Color --}}

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

                        {{-- Popular Tag --}}

                        {{-- <div class="common-tag mt-50">
                                <div class="side-title">
                                    <h6>Popular Tag</h6>
                                </div>

                                @php

                                    $tags = App\Models\Admin\Product::where('status', '1')
                                        ->orderBy('product_name', 'ASC')
                                        ->latest()
                                        ->limit(7)
                                        ->get();

                                @endphp

                                <ul class="mt-25 mb-15">
                                    @forelse ($tags as $tag)
                                        <li><a href="javascript:;">{{ $tag->tags }}</a></li>
                                    @empty
                                        <p>No Tags Avaiable</p>
                                    @endforelse
                                </ul>

                            </div> --}}

                        {{-- Popular Tag --}}

                    </div>
                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="shop-banner-bg pt-120 pb-120 mb-50"
                                data-background="{{ asset('frontend/template_one/assets/img/bg/shop-banner-bg.jpg') }}">
                                <div class="collection-text">
                                    <h5 class="f-800"><a href="javascript:;"></a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="row">

                            <div class="col-lg-5 col-md-4">
                                <div class="shop-bar d-flex align-items-center">
                                    <h4 class="f-800 cod__black-color">Product</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Product</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>

                            {{-- New Section  --}}
                            <div class="col-lg-4 col-md-2">
                                <div class="text-center" style="margin-top: 10px;">
                                    <span>Showing {{ count($products) }} of {{ $products->total() }} Results</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">

                                <select name="sortBy" onchange="this.form.submit();">

                                    <option selected disabled>Sort By Product</option>

                                    <option value="nameAtoZ" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'nameAtoZ') selected @endif>Product
                                        Name: A to Z
                                    </option>

                                    <option value="nameZtoA" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'nameZtoA') selected @endif>Product
                                        Name: Z to A
                                    </option>

                                </select>

                            </div>

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

                            </div>
                        @empty
                            <p class="text-dander">No Product Avaiable</p>
                        @endforelse

                    </div>

                    {{-- Pagination Section  --}}

                    <div class="row mt-10">
                        <div class="col-sm-12">
                            <div class="common-pagination">

                                {{ $products->appends($_GET)->links('vendor.pagination.template_one') }}

                            </div>
                        </div>
                    </div>

                    {{-- Pagination Section  --}}

                </div>
            </div>
        </div>
    </div>
</form>
<!-- shop area end -->
@endsection
@section('pricescripts')
<script>
    $(document).ready(function() {
        if ($('#slider-range').length > 0) {
            const max_price = parseInt($('#slider-range').data('max'));
            const min_price = parseInt($('#slider-range').data('min'));
            let price_range = min_price + "-" + max_price;
            if ($('#price_range').length > 0 && $('#price_range').val()) {
                price_range = $('#price_range').val().trim();
            }
            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_price,
                max: max_price,
                values: price,
                slide: function(event, ui) {
                    $("#amount").val('$' + ui.values[0] + "-" + '$' + ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
        }
    });
</script>
@endsection
