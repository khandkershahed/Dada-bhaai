@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
@section('title', 'Dada Bhaai | Product Details')
<!-- Main -->
<main class="main--wrapper">
    <!-- Shop-details start -->
    <section class="shop-details-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="shop-bred pt-35 pb-35">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:;">{{ $product->category->category_name }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:;">{{ $product->subcategory->subcategory_name }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="javascript:;">{{ $product->childcategory->childcategory_name }}</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row my-5">

                <div class="col-lg-4">
                    <div class="pro-img">
                        <div class="tab-content" id="myTabContent">
                            @forelse ($multiImages as $key => $multiImage)
                                <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}"
                                    id="multiImg{{ $multiImage->id }}" role="tabpanel" aria-labelledby="home-tab5">
                                    <img src="{{ asset($multiImage->multi_image) }}" class="img-fluid mb-2"
                                        alt="" style="width:100%; height: 100%;" />
                                </div>
                            @empty
                                <img src="{{ asset('upload/no_image.jpg') }}" class="img-fluid mb-2" alt=""
                                    style="width:100%; height: 400px;" />
                            @endforelse
                        </div>
                        <ul class="nav" id="myTab1" role="tablist">
                            @forelse ($multiImages as $key => $multiImage)
                                <li class="nav-item">
                                    <a class="nav-link {{ $key == 0 ? 'active' : '' }}" id="home-tab5" data-toggle="tab"
                                        href="#multiImg{{ $multiImage->id }}" role="tab" aria-controls="home5"
                                        aria-selected="true">
                                        <img src="{{ asset($multiImage->multi_image) }}" class="img-fluid"
                                            alt=""
                                            style="width: 75px;height: 75px; margin-bottom: 10px; background-size: cover;
                                            object-fit: fill;" />
                                    </a>
                                </li>
                            @empty
                                <img src="{{ asset('upload/no_image.jpg') }}" class="img-fluid" alt=""
                                    style="width: 75px;height: 75px; margin-bottom: 10px;" />
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="row gx-0">
                        <div class="col-lg-8 col-md-12 order-3 order-lg-2 px-0">
                            <div class="pro-content">
                                <span>{{ $product->brand->brand_name }}</span>

                                <h5 class="title" id="dpname">
                                    {{ $product->product_name }}
                                </h5>

                                <div class="pro-code">
                                    <ul class="d-flex flex-column justify-content-between">
                                        <li>SKU: <span class="mr-2 ml-1">{{ $product->sku_code }}</span>MF Code:
                                            <span class="mr-2 ml-1">{{ $product->mf_code }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex">

                                                <div class="text-end">

                                                    @if ($product->price_status == 'rfq')
                                                        <h4 class="grenadier-color mb-0 fw-bold">
                                                            Tk {{ $product->sas_price }}
                                                        </h4>
                                                    @elseif ($product->price_status == 'offer_price')
                                                        <h5><del>Tk {{ $product->price }}</del></h5>
                                                        <h4 class="grenadier-color mb-0 fw-bold">Tk
                                                            {{ $product->discount_price }}</h4>
                                                    @elseif ($product->price_status == 'price')
                                                        <h4 class="grenadier-color mb-0 fw-bold">
                                                            Tk {{ $product->price }}
                                                        </h4>
                                                    @endif


                                                </div>

                                            </div>

                                            {{-- <div class="number d-flex align-items-center">
                                                <button type="button" class="buttons-count" id="decrease">-</button>
                                                <input type="text" disabled class="mb-0 border-1 text-center"
                                                    name="" value="1" min="1" id="dqty"
                                                    style="width: 50px" />
                                                <button type="button" class="buttons-count" id="increase">+</button>
                                            </div> --}}

                                            <div class="">

                                                Qty:<input type="number" class="ml-2 mb-0 text-center" name=""
                                                    value="1" min="1" id="dqty" style="width: 50px" />
                                            </div>


                                        </li>
                                    </ul>

                                    <div class="d-flex align-items-center mt-3 product--footer__deals mb-4">

                                        <input type="hidden" id="oneproduct_id" value="{{ $product->id }}">

                                        <a type="submit" style="cursor: pointer" onclick="addToCartOne()"
                                            class="mt-0 add-link f-700 grenadier-color">+ Add
                                            Cart</a>

                                        <a type="submit" style="cursor: pointer" onclick="buyToCartOne()"
                                            class="ml-3 mt-0 add-link f-700 grenadier-color">+ Buy
                                            Now</a>
                                    </div>

                                    <p>{!! $product->short_desc !!}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-sm-12">
                                <div class="product-section2 mt-40">
                                    <h6 class="product--section__title2 pb-30" id="releted-tab" data-toggle="tab"
                                        href="#releted" role="tab" aria-controls="releted" aria-selected="true">
                                        <span>Related </span> Accessories Of This Product
                                    </h6>
                                </div>
                            </div>
                        </div>
                        {{-- Child Product  --}}
                        <div class="col-lg-12 px-0">
                            <div class="releted_accessories">

                                @forelse ($relativeChild as $childproduct)

                                    @if (!empty($childproduct->product_image))
                                        <div class="card border-0 shadow-sm releted-accessories-items mx-2">
                                            <div class="card-header p-0 border-0">
                                                <img src="{{ asset($childproduct->product_image) }}"
                                                    class="img-fluid" style="width: 100%; height: 140px;"
                                                    alt="" />
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="container">
                                                    <div class="row align-items-center p-1"
                                                        style="background-color: #eee">
                                                        <div class="col-lg-6 px-0">
                                                            <small id="drpname"
                                                                class="text-black">{{ substr($childproduct->product_name, 0, 9) }}</small>
                                                        </div>
                                                        <div class="col-lg-6 px-0">
                                                            <div class="text-right">

                                                                {{-- @if ($childproduct->price_status == 'rfq')
                                                                    <small class="grenadier-color mb-0">
                                                                        Tk {{ $childproduct->sas_price }}
                                                                    </small>
                                                                @elseif ($childproduct->price_status == 'offer_price')
                                                                    <small class="grenadier-color mb-0">
                                                                        Tk {{ $childproduct->discount_price }}</small>
                                                                @else
                                                                    <small class="grenadier-color mb-0">Tk
                                                                        {{ $childproduct->price }}
                                                                    </small>
                                                                @endif --}}

                                                                @if ($childproduct->price_status == 'rfq')
                                                                    <h6 class="grenadier-color mb-0 fw-bold">
                                                                        Tk {{ $childproduct->sas_price }}
                                                                    </h6>
                                                                @elseif ($childproduct->price_status == 'offer_price')
                                                                    <del>Tk {{ $childproduct->price }}</del>

                                                                    <h6 class="grenadier-color mb-0 fw-bold">Tk
                                                                        {{ $childproduct->discount_price }}
                                                                    </h6>
                                                                @elseif ($childproduct->price_status == 'price')
                                                                    <h6 class="grenadier-color mb-0 fw-bold">
                                                                        Tk {{ $childproduct->price }}
                                                                    </h6>
                                                                @endif


                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 px-0"
                                                            style="border-top: 1px solid white;padding-top: 5px;">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <small>

                                                                        {{-- <a type="submit"
                                                                            onclick="addToCartOneRelated()"
                                                                            class=""> <span
                                                                                class="badge p-2 text-white"
                                                                                style="background-color: #cd3301; cursor: pointer;">Add
                                                                                Accessories</span>
                                                                        </a> --}}

                                                                        <a type="submit"
                                                                            data-product_id="{{ $childproduct->id }}"
                                                                            class="add_to_cart_btn_product"> <span
                                                                                class="badge p-2 text-white"
                                                                                style="background-color: #cd3301; cursor: pointer;">Add
                                                                                Accessories</span>
                                                                        </a>

                                                                    </small>

                                                                    {{-- <input type="hidden" class="mb-0 border-1"
                                                                        name="" value="1" min="1"
                                                                        id="drqty" style="width: 50px" />

                                                                    <input type="hidden" id="onerproduct_id"
                                                                        value="{{ $childproduct->id }}"> --}}

                                                                </div>
                                                                {{-- Count Box --}}

                                                                {{-- <div class="number d-flex align-items-center">
                                                                    <button type="button" style="cursor: pointer"
                                                                        class="buttons-countAccesories border-0 bg-white"
                                                                        id="decreaseAccesories">-</button>
                                                                    <input type="text" disabled
                                                                        class="mb-0 border-1 text-center"
                                                                        name="" value="1" min="1"
                                                                        id="dqtyAccesories" style="width: 30px" />
                                                                    <button type="button"
                                                                        class="buttons-countAccesories border-0 bg-white"
                                                                        id="increaseAccesories"
                                                                        style="cursor: pointer">+</button>
                                                                </div> --}}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <span>No Accessories Avaiable</span>
                                    @endif

                                @empty
                                    <P>No Product Avaiable</P>
                                @endforelse

                            </div>
                        </div>
                        {{-- Child Product  --}}

                    </div>
                </div>

                <div class="col-lg-3" style="border: 0px solid #f5f5f5;box-shadow: rgba(0, 0, 0, 0.16) 0px 0px 2px;">
                    <div class="cart-wrapper">
                        <div class="mb-20 d-flex justify-content-between align-items-center">
                            {{-- <div>
                                @if ($product->price_status == 'rfq')
                                    <h5 class="grenadier-color f-600 mb-0">
                                        Tk {{ $product->sas_price }}
                                    </h5>
                                @elseif ($product->price_status == 'offer_price')
                                    <h5 class="grenadier-color f-600 mb-0">
                                        Tk {{ $product->discount_price }}</h5>
                                @else
                                    <h5 class="grenadier-color f-600 mb-0">Tk {{ $product->price }}
                                    </h5>
                                @endif
                                <del class="text-muted">Tk {{ $product->price }}</del>
                            </div> --}}
                        </div>

                        <div class="mb-4">
                            <p class="mb-0 fw-bolder text-black" style="border-bottom: 1px solid #ccc;"><span
                                    style="color: black;" class="fw-bold">Accessories</span></p>

                            <div id="miniCartRelated" class="mt-3"></div>

                        </div>

                        {{-- @if (!empty($cartQty) && $cartQty > 0)
                            <div class="d-flex align-items-center" id="cartButtons">
                                <a href="{{ route('template.one.view.cart') }}" class="cart-button w-100 mt-0">View
                                    Cart</a>
                                <a href="{{ route('template.one.checkout') }}"
                                    class="cart-button w-100 ml-3 mt-0">Checkout</a>
                            </div>
                        @endif --}}

                        @if (!empty($cartQty) && $cartQty > 0)

                            <div class="d-flex align-items-center" id="cartButtons" style="display: none;">
                                <a href="{{ route('template.one.view.cart') }}" class="cart-button w-100 mt-0">View
                                    Cart</a>
                                <a href="{{ route('template.one.checkout') }}"
                                    class="cart-button w-100 ml-3 mt-0">Checkout</a>
                            </div>
                            
                        @endif


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Shop-details end -->

    <!-- Shop-details tab start -->
    <section class="shop-details-desc">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="desc-wrapper">
                        <ul class="nav custom-tabs" id="myTab" role="tablist">

                            {{-- <li class="nav-item">
                                <a class="nav-link" id="home-tab11" data-toggle="tab" href="#home11" role="tab"
                                    aria-controls="home11" aria-selected="true">Accessories</a>
                            </li> --}}

                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab11" data-toggle="tab" href="#profile11"
                                    role="tab" aria-controls="profile11" aria-selected="false">Overview
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab11" data-toggle="tab" href="#product-blogs"
                                    role="tab" aria-controls="product-blogs"
                                    aria-selected="false">Specification</a>
                            </li>

                        </ul>

                        <div class="tab-content" id="myTabContent1">

                            {{-- <div class="tab-pane fade" id="home11" role="tabpanel" aria-labelledby="home-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <div class="spe-wrapper">
                                                <p>{!! $product->accessories !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="tab-pane fade show active" id="profile11" role="tabpanel"
                                aria-labelledby="profile-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-content mb-40">
                                                <p>{!! $product->overview !!}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="product-blogs" role="tabpanel"
                                aria-labelledby="contact-tab11">
                                <div class="desc-content mt-60">
                                    <div class="row small-padding">

                                        <p>{!! $product->specification !!}</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop-details tab end -->

    <!-- Product  -->
    <div class="product pt-75 product-h-two">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-12">
                    <div class="section-header">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-sm-6">
                                <div class="product-section2">
                                    <h6 class="product--section__title2" id="releted-tab" data-toggle="tab"
                                        href="#releted" role="tab" aria-controls="releted" aria-selected="true">
                                        <span>Related Product</span>
                                    </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="">

                <div class="tab-pane fade show active" id="nav-home-all" role="tabpanel"
                    aria-labelledby="nav-home-tab-all">
                    <div class="product__active owl-carousel">

                        @forelse ($relativeProduct as $product)
                            <div class="product-grid mr-4">

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

                        @empty
                            <span>No Product Avaiable</span>
                        @endforelse

                    </div>
                </div>



            </div>

        </div>
    </div>
    <!-- Product end -->


</main>
<!-- Main End -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to toggle cart buttons visibility
        function toggleCartButtons(cartQty) {
            if (cartQty > 0) {
                $('#cartButtons').show();
            } else {
                $('#cartButtons').hide();
            }
        }

        // Initial toggle based on $cartQty value
        var cartQty = {{ $cartQty ?? 0 }};
        toggleCartButtons(cartQty);

        // Example: Assume a product is added dynamically, for demonstration purposes
        // This could be triggered by an AJAX call or other events
        $('#addProductBtn').on('click', function() {
            // Code to add the product
            cartQty++; // Assuming the cart quantity is increased by 1
            toggleCartButtons(cartQty);
        });
    });
</script>




@endsection
