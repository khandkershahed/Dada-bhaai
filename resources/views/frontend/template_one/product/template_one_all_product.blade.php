@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
@section('title')
    DadaBhaai | Product
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- shop area start -->
<form action="{{ route('shop.filter') }}" method="POST">
    @csrf

    <div class="product shop-page pt-30 pb-80">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 order-2 order-lg-1">

                    <div class="common-sidebar shop-banner-sidebar">

                        {{-- ======================================= --}}
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

                            $catwiseproduct = [];
                            $childcatwiseproduct = [];
                        @endphp

                        {{-- Category  --}}
                        {{-- <div class="common-cat">
                            <div class="side-title">
                                <h6>Category</h6>
                            </div>

                            <div id="accordionBrands" class="accordion">
                                <div class="card border-0 shadow-none mb-0">



                                    @foreach ($categorys as $category)
                                        <div class="card-header {{ optional($catwiseproduct)->id == $category->id ? 'mark-cat' : 'collapsed' }}  pl-0"
                                            data-toggle="collapse" data-parent="#accordion"
                                            aria-expanded="{{ optional($catwiseproduct)->id == $category->id ? 'true' : 'false' }}"
                                            href="#cat{{ $category->id }}">
                                            <a
                                                class="card-title {{ optional($catwiseproduct)->id == $category->id ? 'mark-cat' : '' }}">
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

                                                        <div class="card-header category-filter {{ optional($childcatwiseproduct)->subcategory_id == $subcategory->id ? 'mark-sub-cat' : 'collapsed' }} pl-0"
                                                            data-toggle="collapse"
                                                            data-target="#sub{{ $subcategory->id }}">
                                                            <a class="card-title">
                                                                {{ $subcategory->subcategory_name }}
                                                            </a>
                                                        </div>

                                                        <div id="sub{{ $subcategory->id }}" class="collapse"
                                                            data-parent="#accordion2"
                                                            style="background-color: #f5f5f5;">

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
                                                                <div class="card-body p-2 {{ optional($childcatwiseproduct)->id == $childcategory->id ? 'marks' : '' }}"
                                                                    aria-expanded="{{ optional($childcatwiseproduct)->id == $childcategory->id ? 'true' : 'false' }}">
                                                                    <a href="{{ url('product/childcategory/' . $childcategory->id . '/' . $childcategory->childcategory_slug) }}"
                                                                        class="pl-3 text-muted childcategory-link {{ optional($childcatwiseproduct)->id == $childcategory->id ? 'marks' : 'collapsed' }}">{{ $childcategory->childcategory_name }}</a>

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



                                </div>
                            </div>

                        </div> --}}
                        {{-- Category  --}}

                        {{-- Brand  --}}
                        {{-- <div class="common-cat" style="margin-top: 30px;margin-bottom: 30px;">
                            <div class="side-title">
                                <h6>Brands</h6>
                            </div>
                            <div>
                                @forelse ($brands as $brand)
                                    <div class="card brand-filter pl-0">
                                        <a class="card-title mb-0" style="color: #170000 ; padding: .75rem 0rem;"
                                            href="{{ url('product/brand/' . $brand->id . '/' . $brand->brand_slug) }}">
                                            {{ $brand->brand_name }}
                                        </a>
                                    </div>
                                @empty
                                    <p>No Brand Avaiable</p>
                                @endforelse

                            </div>
                        </div> --}}
                        {{-- Brand  --}}


                        {{-- ============================== --}}

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

                        {{-- <div class="slider-range mt-50">

                            <div class="side-title mb-30">
                                <h6>Filter By Price</h6>
                            </div>

                            <div id="slider-range" data-min="{{ Helper::minPrice() }}"
                                data-max="{{ Helper::maxPrice() }}"></div>

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
                                    value="@if (!empty($_GET['price'])) ${{ $price[0] }} @else {{ Helper::minPrice() }} @endif-@if (!empty($_GET['price'])) ${{ $price[1] }} @else {{ Helper::maxPrice() }} @endif"
                                    readonly>


                            </p>

                            <button type="submit" class="lnk btn btn-primary">Filter</button>

                        </div> --}}

                    </div>

                </div>

                <div class="col-lg-9 order-1 order-lg-2 px-0">
                    <div class="row">
                        <div class="col-sm-12 pe-0">
                            <div class="shop-banner-bg pt-120 pb-120 mb-4"
                                data-background="{{ asset('frontend/template_one/assets/img/bg/shop-banner-bg.jpg') }}">
                                <div class="collection-text">
                                    <h5 class="f-800"><a href="javascript:;"></a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b">
                        <div class="row align-items-center mx-0" style="background: #f5f5f5;">
                            <div class="col-lg-4">
                                <div class="shop-bar d-flex align-items-center">
                                    <h4 class="f-800 cod__black-color mb-0">Product</h4>
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
                            <div class="col-lg-7">
                                <!-- Actual search box -->
                                <div class="form-group has-search mb-0">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                </div>

                            </div>

                            <div class="col-lg-1">

                                <div class="d-flex justify-content-end">
                                    <select name="sortBy" onchange="this.form.submit();">
                                        <option selected disabled>Show</option>
                                        <option value="10" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == '10') selected @endif>10
                                        </option>
                                        <option value="20" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == '20') selected @endif>20
                                        </option>
                                        <option value="30" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == '30') selected @endif>30
                                        </option>
                                        <option value="40" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == '40') selected @endif>40
                                        </option>
                                        <option value="50" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == '50') selected @endif>50
                                        </option>
                                        <option value="60" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == '60') selected @endif>60
                                        </option>
                                    </select>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="row mt-4">

                        @forelse ($products as $product)
                            <div class="col-lg-4 col-md-6">
                                <div class="product-grid mb-4">
                                    <div class="product-image">
                                        <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                            class="image">

                                            <img title="{{ $product->product_name }}"
                                                src=" {{ asset($product->product_image) }}"
                                                data-tip="{{ $product->product_name }}"
                                                style="width:100%; height: 300px;">
                                        </a>

                                        {{-- <span class="product-discount-label">New</span> --}}

                                        <ul class="product-links">

                                            <li><a type="submit" class="add_to_wishlist" style="cursor: pointer;"
                                                    data-product_id="{{ $product->id }}" data-tip="Wishlist"><i
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
                                            <h3 class="title font-weight-bold"><a
                                                    href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}">{{ substr($product->product_name, 0, 25) }}</a>
                                            </h3>
                                        </div>

                                        {{-- <div class="price font-weight-bold pr-2">
                                            @if ($product->price_status == 'rfq')
                                                <h6 class="grenadier-color mb-0 font-weight-bold">
                                                    $ {{ $product->sas_price }}
                                                </h6>
                                            @elseif ($product->price_status == 'offer_price')
                                                <del>$ {{ $product->price }}</del>
                                                <h6 class="grenadier-color mb-0 font-weight-bold">$
                                                    {{ $product->discount_price }}
                                                </h6>
                                            @elseif ($product->price_status == 'price')
                                                <h6 class="grenadier-color mb-0 font-weight-bold">
                                                    $ {{ $product->price }}
                                                </h6>
                                            @endif
                                        </div> --}}

                                        <div class="price font-weight-bold pr-2">
                                            @if ($product->price_status == 'rfq' && !is_null($product->sas_price))
                                                <h6 class="grenadier-color mb-0 font-weight-bold">
                                                    ${{ $product->sas_price }}
                                                </h6>
                                            @elseif ($product->price_status == 'offer_price' && !is_null($product->price) && !is_null($product->discount_price))
                                                <del>$ {{ $product->price }}</del>
                                                <h6 class="grenadier-color mb-0 font-weight-bold">
                                                    ${{ $product->discount_price }}
                                                </h6>
                                            @elseif ($product->price_status == 'price' && !is_null($product->price))
                                                <h6 class="grenadier-color mb-0 font-weight-bold">
                                                    ${{ $product->price }}
                                                </h6>
                                            @else
                                                <!-- Optional: Fallback message when price is unavailable -->
                                                <h6 class="grenadier-color mb-0 font-weight-bold"></h6>
                                            @endif
                                        </div>


                                    </div>

                                    @if ($product->sas_price !== null || $product->price !== null || $product->discount_price !== null)
                                        <a type="submit" style="cursor:pointer;"
                                            class="add-cart add_to_cart_btn_product"
                                            data-product_id="{{ $product->id }}">Add to cart</a>
                                    @else
                                        <a href="{{ route('template_one.contact') }}" class="add-cart">Contact Us</a>
                                    @endif



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
