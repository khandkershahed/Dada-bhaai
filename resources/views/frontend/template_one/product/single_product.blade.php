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
                                            style="width: 100px;height: 100px;margin-bottom: 10px;background-size: cover;object-fit: contain;" />
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
                        <div class="col-lg-12 col-md-12 order-3 order-lg-2 px-0">
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

                                        {{-- <li class="d-flex justify-content-between align-items-center">
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


                                            <div class="">

                                                Qty:<input type="number" class="ml-2 mb-0 text-center" name=""
                                                    value="1" min="1" id="dqty" style="width: 50px" />
                                            </div>


                                        </li> --}}

                                    </ul>

                                    {{-- <div class="d-flex align-items-center mt-3 product--footer__deals mb-4 justify-content-center">

                                        <input type="hidden" id="oneproduct_id" value="{{ $product->id }}">

                                        <a type="submit" style="cursor: pointer" onclick="addToCartOne()"
                                            class="mt-0 add-link f-700 grenadier-color">+ Add
                                            Cart</a>

                                        <a type="submit" style="cursor: pointer" onclick="buyToCartOne()"
                                            class="ml-3 mt-0 add-link f-700 grenadier-color">+ Buy
                                            Now</a>
                                    </div> --}}

                                    <p>{!! $product->short_desc !!}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-sm-12">
                                <div class="product-section2 mt-20">
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
                                                <img src="{{ asset($childproduct->product_image) }}" class="img-fluid"
                                                    style="width: 100%; height: 140px;" alt="" />
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="container">
                                                    <div class="row align-items-center p-1"
                                                        style="background-color: #eee">
                                                        <div class="col-lg-6 px-2">
                                                            <small id="drpname"
                                                                class="text-black">{{ substr($childproduct->product_name, 0, 9) }}</small>
                                                        </div>
                                                        <div class="col-lg-6 px-3">
                                                            <div class="text-right">
                                                                @if ($childproduct->price_status == 'rfq')
                                                                    <small class="grenadier-color mb-0 fw-bold">
                                                                        Tk {{ $childproduct->sas_price }}
                                                                    </small>
                                                                @elseif ($childproduct->price_status == 'offer_price')
                                                                    <del>Tk {{ $childproduct->price }}</del>

                                                                    <small class="grenadier-color mb-0 fw-bold">Tk
                                                                        {{ $childproduct->discount_price }}
                                                                    </small>
                                                                @elseif ($childproduct->price_status == 'price')
                                                                    <small class="grenadier-color mb-0 fw-bold">
                                                                        Tk {{ $childproduct->price }}
                                                                    </small>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 px-2"
                                                            style="border-top: 1px solid white;padding-top: 5px;">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <small>

                                                                        <a type="submit"
                                                                            data-product_id="{{ $childproduct->id }}"
                                                                            class="add_to_cart_btn_product rounded-0">
                                                                            <span class="badge p-2 text-white"
                                                                                style="background-color: #cd3301; cursor: pointer;"><i
                                                                                    class="fa-solid fa-plus"></i>
                                                                                Add</span>
                                                                        </a>

                                                                    </small>

                                                                </div>
                                                                {{-- Count Box --}}

                                                                <div class="number d-flex align-items-center">

                                                                    <button type="button"
                                                                        style="cursor: pointer;height: 20px;"
                                                                        class="buttons-countAccesories border-0 bg-white"
                                                                        id="decreaseAccesories">-</button>

                                                                    <input type="text" disabled
                                                                        class="mb-0 text-center border-0 bg-white qty-input"
                                                                        name="qty" value="1" min="1"
                                                                        id="dqtyAccesories" style="width: 30px" />

                                                                    <button type="button"
                                                                        class="buttons-countAccesories border-0 bg-white"
                                                                        id="increaseAccesories"
                                                                        style="cursor: pointer;height: 20px;">+</button>

                                                                </div>

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

                            <div class="mb-0 fw-bolder text-black d-flex justify-content-between align-items-center"
                                style="border-bottom: 1px solid #ccc;">
                                <p style="color: black;" class="fw-bold mb-0">Availability</p>
                                <p class="fw-bold text-success mb-0">In Stock</p>
                            </div>
                            <div class="price mt-15 mb-20">
                                <div class="row align-items-center">

                                    <div class="col-lg-6">

                                        @if ($product->price_status == 'rfq')
                                            <h5 class=" mb-0 fw-bold">
                                                <span id="productPrice"
                                                    style="color: #CD3301; font-weight: bold; margin-bottom: 0;">Tk
                                                    {{ $product->sas_price }}</span>
                                            </h5>
                                        @elseif ($product->price_status == 'offer_price')
                                            <p class="mb-0"><del>TK <span id="originalPrice">{{ $product->price }}</span></del>
                                            </p>
                                            <h5 class=" mb-0 fw-bold">Tk
                                                <span id="productPrice"
                                                    style="color: #CD3301; font-weight: bold; margin-bottom: 0;">{{ $product->discount_price }}</span>
                                            </h5>
                                        @elseif ($product->price_status == 'price')
                                            <h5 class=" mb-0 fw-bold">
                                                <span id="productPrice"
                                                    style="color: #CD3301; font-weight: bold; margin-bottom: 0;">TK
                                                    {{ $product->price }}</span>
                                            </h5>
                                        @endif

                                    </div>

                                    <div class="col-lg-6">
                                        <form action="" class="mb-0">
                                            <div class="field">
                                                <label class="mb-0">Quantity:</label>
                                                <div class="number d-flex align-items-center">
                                                    <p class="minus mb-0 px-2">-</p>
                                                    <input type="text" class="mb-0 w-50" name=""
                                                        value="1" min="1" id="dqty">
                                                    <p class="plus mb-0 px-2">+</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <div class="d-flex align-items-center mt-3 product--footer__deals mb-4 justify-content-center">
                                    <input type="hidden" id="oneproduct_id" value="{{ $product->id }}">
                                    <a type="submit" style="cursor: pointer" onclick="addToCartOne()"
                                        class="mt-0 add-link f-700 grenadier-color">+ Add
                                        Cart</a>
                                    <a type="submit" style="cursor: pointer" onclick="buyToCartOne()"
                                        class="ml-3 mt-0 add-link f-700 grenadier-color">+ Buy
                                        Now</a>
                                </div>
                            </div>

                            <hr class="m-0">

                            <div class="">
                                <p class="mb-0">Accessories</p>

                                <div id="miniCartRelated">

                                    {{-- <ul style="list-style-type: circle !important;">
                                        
                                        <li class="d-flex mb-2 align-items-center">

                                            <span class="pr-2">1.</span>

                                            <input type="text" class="form-control form-control-sm w-100 rounded-0"
                                                name="" value="${value.name}" id="" placeholder="Blue Color Headset">

                                            <input type="number" class="form-control form-control-sm w-25 rounded-0"
                                                name="" value="${value.qty}" placeholder="1">

                                        </li>

                                    </ul> --}}

                                    {{-- `<ul style="list-style-type: circle !important;">
                                        
                                        <li class="d-flex mb-2 align-items-center">
            
                                            <span class="pr-2">${serialNumber++}.</span>
            
                                            <input type="text" class="form-control form-control-sm w-100 rounded-0"
                                                            name="" value="${value.name.length > 20 ? value.name.substring(0, 20) + '.......' : value.name}" id="" placeholder="Blue Color Headset">
            
                                            <input type="number" class="form-control form-control-sm w-25 rounded-0"
                                                            name="" value="${value.qty}" placeholder="1">
            
                                        </li>
            
                                    </ul>` --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    @if (!empty($cartQty) && $cartQty > 0)
                        <div id="cartButtons"
                            class="d-flex align-items-center justify-content-between px-4">
                            <a href="{{ route('template.one.view.cart') }}" class="checkout main-btn text-center w-50 mr-1">View
                                Cart</a>
                            <a href="{{ route('template.one.checkout') }}"
                                class="checkout main-btn text-center w-50 ml-1">CheckOut</a>
                        </div>
                    @endif
                    <div class="last py-4 align-items-center d-flex justify-content-center">
                        <a style="cursor: pointer;" id="{{ $product->id }}" onclick="addToWishList(this.id)"
                            class="mr-2 text-muted">Add To Wishlist</a>
                        <span>|</span>
                        <a style="cursor: pointer;" type="submit" data-product_id="{{ $product->id }}"
                            class="ml-2 text-muted add_to_compare">Compare</a>
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
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}"
                                        class="image">

                                        <img src=" {{ asset($product->product_image) }}"
                                            data-tip="{{ $product->product_name }}"
                                            style="width:100%; height: 300px;">
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
                                        <h3 class="title font-weight-bold"><a
                                                href="{{ url('product' . '/' . $product->id . '/' . $product->product_slug) }}">{{ substr($product->product_name, 0, 18) }}</a>
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
                                    <a type="submit" style="cursor:pointer;"
                                        class="add-cart add_to_cart_btn_product"
                                        data-product_id="{{ $product->id }}">Add to cart</a>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const minusButton = document.querySelector('.minus');
        const plusButton = document.querySelector('.plus');
        const quantityInput = document.getElementById('dqty');
        const productPriceElement = document.getElementById('productPrice');

        const unitPrice = parseFloat(productPriceElement.innerText.replace('Tk ', ''));

        minusButton.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            if (!isNaN(currentValue) && currentValue > 1) {
                quantityInput.value = currentValue - 1;
                updatePrice();
            }
        });

        plusButton.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            if (!isNaN(currentValue)) {
                quantityInput.value = currentValue + 1;
                updatePrice();
            }
        });

        function updatePrice() {
            let quantity = parseInt(quantityInput.value);
            if (!isNaN(quantity) && quantity > 0) {
                let newPrice = unitPrice * quantity;
                productPriceElement.innerText = 'Tk ' + newPrice.toFixed(2);
            }
        }
    });
</script>



@endsection
