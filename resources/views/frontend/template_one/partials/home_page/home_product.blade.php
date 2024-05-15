@php
<<<<<<< HEAD
    $categorys = App\Models\Admin\Category::where('status', '1')->orderBy('id', 'DESC')->limit(4)->get();
=======
    $categorys = App\Models\Admin\Category::where('status', '1')->orderBy('id','DESC')->limit(5)->get();
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
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

                                {{-- <a class="nav-item nav-link active btn orange-bg-btn pure__black-color"
                                    id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                                    aria-controls="nav-home" aria-selected="true">Electronics Devices</a>

                                <a class="nav-item nav-link btn gray-bg-btn pure__black-color" id="nav-profile-tab"
                                    data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">TV & Home Appliances</a>

                                <a class="nav-item nav-link btn gray-bg-btn pure__black-color" id="nav-contact-tab"
                                    data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">Electronic Accessories</a> --}}
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
                                        <div class="product-grid mr-4">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{ asset($product->product_image) }}">
                                                </a>
                                                <div class="product-button-group">
                                                    <a style="cursor: pointer;" id="{{ $product->id }}"
                                                        onclick="addToWishList(this.id)"><i
                                                            class="fas fa-heart"></i></a>
                                                    <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
<<<<<<< HEAD
                                                        class="add-to-cart"><i class="fas fa-shopping-cart"></i> add to
                                                        cart</a>
                                                    <a href="#"><i class="fas fa-random"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content bg-light">
                                                <p class="cate-name">{{ $product['category']['category_name'] }}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h3 class="title w-75"><a
                                                            href="#">{{ $product->product_name }}</a>
                                                    </h3>
                                                    <div class="price w-25 text-right">
=======
                                                        class="btn btn-primary btn-sm">
                                                        Add To Cart Details
                                                    </a>

                                                    <div class="price">
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
                                                        @if ($product->price_status == 'rfq')
                                                            <h5 class="grenadier-color fw-bold">
                                                                Tk {{ $product->sas_price }}
                                                            </h5>
                                                        @elseif ($product->price_status == 'offer_price')
                                                            <h5 class="grenadier-color fw-bold">
                                                                Tk {{ $product->discount_price }}</h5>
                                                        @else
                                                            <h5 class="grenadier-color fw-bold">Tk
                                                                {{ $product->price }}
                                                            </h5>
                                                        @endif
                                                    </div>
                                                </div>
<<<<<<< HEAD
=======

                                            </div>
                                            <div class="product-action">

                                                <a style="cursor: pointer;" id="{{$product->id}}" onclick="addToWishList(this.id)"><span class="lnr lnr-heart"></span></a>

                                                {{-- <a href="#"><span class="lnr lnr-eye"></span></a> --}}
                                                <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"><span
                                                        class="lnr lnr-cart"></span></a>

                                                {{-- <a href="#"><span class="lnr lnr-sync"></span></a> --}}

>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
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
