@php

    $products = App\Models\Admin\Product::where('status', '1')
        ->where('status', '1')
        ->orderBy('id', 'DESC')
        ->limit(8)
        ->latest()
        ->get();

@endphp

@if (count($products) > 0)
    <div class="product pt-50 feature-h-one">
        
        <div class="container">

            <div class="row align-items-center justify-content-between">
                <div class="col-lg-9 col-sm-6">
                    <div class="product-section mb-30">
                        <h6 class="product--section__title f-800 white-color grenadier-bg">
                            Latest Product
                        </h6>
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-sm-6">
                    <div class="all__product--link text-right mb-30">
                        <a class="all-link" href="shop-collection.html">Discover All Products<span
                                class="lnr lnr-arrow-right"></span></a>
                    </div>
                </div> --}}

            </div>

            {{-- Latest Product Item  --}}
            @include('frontend.template_one.partials.home_page.product_information')
            {{-- Latest Product Item  --}}

        </div>
    </div>
@endif
