@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
@section('title', 'Dada Bhaai | ' . $catwiseproduct->category_name)
    <!-- shop area start -->
    <div class="product shop-page pt-30 pb-80" style="margin-top: 60px;">
        <div class="container">
            <div class="row">


                @include('frontend.template_one.partials.frontend_sidebar')


                <div class="col-lg-9 order-1 order-lg-2">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="shop-banner-bg pt-120 pb-120 mb-50"
                                data-background="{{ asset('storage/category/' . $catwiseproduct->category_image) }}">
                                {{-- <div class="collection-text">
                                    <h5 class="f-800"><a href="javascript:;">Category</a></h5>
                                    <span class="f-200 mb-40">{{ $catwiseproduct->category_name }}</span>
                                    <div class="product-countdown-three">
                                        <div class="time-count-deal">
                                            <div class="countdown-list" data-countdown="2020/12/01"></div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="row">
                            <div class="col-lg-5 col-md-4">
                                <div class="shop-bar">
                                    <h6 class="f-800 cod__black-color">Category</h6>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ $catwiseproduct->category_name }}</li>
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
                                <div class="d-flex justify-content-end">
                                    <select name="" class="text-end" id="sortBy">
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
                            {{-- New Setion  --}}

                        </div>
                    </div>

                    <div class="row mt-30">
                        @forelse ($products as $product)
                            <div class="col-lg-4">

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
                                            <a type="submit" style="cursor:pointer;" data-product_id="{{ $product->id }}"
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
@endsection

@section('catscripts')
    <script>
        $('#sortBy').change(function(e) {
            e.preventDefault();
            let sortBy = $('#sortBy').val();
            window.location = "{{ url('' . $route . '') }}/{{ $catId }}/{{ $catSlug }}?sort=" +
                sortBy;

        });
    </script>
@endsection
