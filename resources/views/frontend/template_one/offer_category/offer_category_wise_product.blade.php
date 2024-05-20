@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <!-- shop area start -->
    <div class="product shop-page pt-30 pb-80" style="margin-top: 60px;">
        <div class="container">
            <div class="row">


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

                        {{-- Category  --}}
                        <div class="common-cat">
                            <div class="side-title">
                                <h6>Category</h6>
                            </div>
                            {{-- Brands Accordion --}}
                            <div id="accordionBrands" class="accordion">
                                <div class="card border-0 shadow-none mb-0">

                                    @foreach ($categorys as $category)
                                        <div class="card-header collapsed pl-0" data-toggle="collapse"
                                            data-parent="#accordion" href="#cat{{ $category->id }}">
                                            <a class="card-title">
                                                {{ $category->category_name }}
                                            </a>
                                        </div>

                                        <div id="cat{{ $category->id }}" class="collapse" data-parent="#accordion"
                                            style="background-color: #f5f5f5;">

                                            @php
                                                $subcategorys = App\Models\Admin\SubCategory::where('status', '1')
                                                    ->where('category_id', $category->id)
                                                    ->latest()
                                                    ->get();
                                            @endphp

                                            <div id="accordion2" class="accordion pl-3">

                                                @forelse ($subcategorys as $subcategory)
                                                    <div class="card border-0 shadow-none mb-0">
                                                        <div class="card-header collapsed pl-0" data-toggle="collapse"
                                                            data-target="#sub{{ $subcategory->id }}">
                                                            <a class="card-title">
                                                                {{ $subcategory->subcategory_name }}
                                                            </a>
                                                        </div>
                                                        <div id="sub{{ $subcategory->id }}" class="collapse"
                                                            data-parent="#accordion2" style="background-color: #f5f5f5;">

                                                            @php
                                                                $childcategorys = App\Models\Admin\ChildCategory::where(
                                                                    'status',
                                                                    '1',
                                                                )
                                                                    ->where('subcategory_id', $subcategory->id)
                                                                    ->latest()
                                                                    ->get();
                                                            @endphp
                                                            @forelse ($childcategorys as $childcategory)
                                                                <div class="card-body p-2">
                                                                    <a href="{{ url('product/childcategory/' . $childcategory->id . '/' . $childcategory->childcategory_slug) }}"
                                                                        class="pl-3 text-muted">{{ $childcategory->childcategory_name }}</a>
                                                                </div>
                                                            @empty
                                                                <p>No ChildCategory Avaiable</p>
                                                            @endforelse

                                                        </div>
                                                    </div>
                                                @empty
                                                    <p>No SubCategory Avaiable</p>
                                                @endforelse


                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- Multi Accordion End --}}
                                </div>
                            </div>

                        </div>
                        {{-- Category  --}}

                        {{-- Brand  --}}
                        <div class="common-cat mt-4">

                            <div class="side-title">
                                <h6>Brands</h6>
                            </div>
                            <ul>
                                @forelse ($brands as $brand)
                                    <li><a
                                            href="{{ url('product/brand/' . $brand->id . '/' . $brand->brand_slug) }}">{{ $brand->brand_name }}</a>
                                    </li>
                                @empty
                                    <p>No Brand Avaiable</p>
                                @endforelse
                            </ul>

                        </div>
                        {{-- Brand  --}}



                    </div>
                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="shop-banner-bg pt-120 pb-120 mb-50"
                                data-background="{{ asset('storage/offer_category_image/' . $offercatwiseproduct->offer_category_image) }}">
                                {{-- <div class="collection-text">
                                    <h5 class="f-800"><a href="javascript:;">Offer Category</a></h5>
                                    <span class="f-200 mb-40">{{ $offercatwiseproduct->offer_category_name }}</span>
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
                                <div class="shop-bar d-flex align-items-center">
                                    <h4 class="f-800 cod__black-color">Offer Category</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ $offercatwiseproduct->offer_category_name }}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>



                        </div>
                    </div>



                    <div class="row mt-30">

                        @forelse ($products as $product)
                            <div class="col-lg-4">

                                <div class="product-grid mr-4">

                                    <div class="product-image">

                                        <a href="{{ url('product' . '/' . $product->products->id . '/' . $product->products->product_slug) }}"
                                            class="img-wrapper">

                                            <img class="img product_id"
                                                src="{{ asset($product->products->product_image) }}" alt=""
                                                style="height: 230px;" data-id="{{ $product->products->id }}" />

                                        </a>

                                        <div class="product-button-group">

                                            {{-- Wishlist Icon --}}
                                            <a style="cursor: pointer;" id="{{ $product->id }}"
                                                onclick="addToWishList(this.id)"><i class="fas fa-heart"></i></a>

                                            {{-- Add To Cart Icon --}}
                                            <a type="submit" style="cursor:pointer;"
                                                data-offer_price="{{ $product->discount_price }}"
                                                data-product_id="{{ $product->products->id }}"
                                                class="add-to-cart add_to_cart_btn"><i class="fas fa-shopping-cart"></i>
                                                Add To
                                                Cart
                                            </a>

                                            {{-- <a type="submit" data-offer_price="{{ $product->discount_price }}"
                                                data-product_id="{{ $product->products->id }}"
                                                class="btn btn-primary btn-sm add_to_cart_btn">
                                                Add To Cart
                                            </a> --}}

                                            {{-- Compare Icon --}}
                                            <a href="#"><i class="fas fa-random"></i></a>

                                        </div>
                                    </div>
                                    <div class="product-content row align-items-center">
                                        <div class="col-lg-8">

                                            <span class="cate-name">{{ $product->category->offer_category_name }}</span>

                                            <h6 class="product__title mine__shaft-color f-700 mb-0" id="offerProductName">
                                                {{ $product->products->product_name }}
                                            </h6>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="price text-end">

                                                <h6 class="grenadier-color f-600" id="">
                                                    Tk {{ $product->discount_price }}
                                                </h6>

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
