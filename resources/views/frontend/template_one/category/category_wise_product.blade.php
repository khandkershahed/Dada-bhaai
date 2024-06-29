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
                        <div class="col-lg-4 col-md-6">
                            <div class="product-grid mb-4">
                                <div class="product-image">
                                    <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                        class="image">

                                        <img title="{{ $product->product_name }}" src=" {{ asset($product->product_image) }}"
                                            data-tip="{{ $product->product_name }}" style="width:100%; height: 300px;">
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
                                <div class="product-content d-flex justify-content-between align-items-center">
                                    <div>
                                        <span><a class="text-muted"
                                                href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}">{{ $product->brand->brand_name }}</a>
                                        </span>
                                        <h3 title="{{ $product->product_name }}" class="title font-weight-bold"><a
                                                href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}">{{ substr($product->product_name, 0, 25) }}</a>
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
                                    <a type="submit" style="cursor:pointer;" class="add-cart add_to_cart_btn_product"
                                        data-product_id="{{ $product->id }}">Add to cart</a>
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
