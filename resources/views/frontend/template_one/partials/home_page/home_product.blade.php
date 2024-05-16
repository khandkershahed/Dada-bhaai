@php
    $categorys = App\Models\Admin\Category::where('status', '1')->orderBy('id', 'DESC')->limit(4)->get();
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
                                                        class="btn btn-primary btn-sm">
                                                        Add To Cart Details
                                                    </a>

                                                    {{-- <button type="submit" onclick="addToCartDetailsF()"
                                                        class="btn btn-primary btn-sm">
                                                        Add To Cart Details
                                                    </button> --}}

                                                    <div class="price">
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
