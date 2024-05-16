<header class="page-header">
    <nav class="navbar navbar-expand-lg navbar-white bg-white" style="border-bottom: 1px solid #eee">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
<<<<<<< HEAD
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img class="" width="250px"
                        src="https://www.dadabhaai.com/upload/logo_black/202405071136jaragroups404413.png"
                        alt="" />
                </a>
=======
            <div class="row">
                <div class="col-sm-12">
                    <div class="content--header__middle d-flex align-items-center justify-content-between">
                        <div class="logo--header__middle">
                            @php
                                $site = App\Models\Sites::find(1);
                            @endphp
                            <div class="logo">
                                <a class="logo__link" href="{{ route('index') }}"><img class="" width="250px"
                                        src="{{ asset('upload/logo_black/' . $site->logo_black) }}"
                                        alt="" /></a>
                            </div>
                        </div>
                        <div class="search--header__middle h1search--header__middle">

                            <form class="search--header__form position-relative" action="{{ route('product.search') }}"
                                method="POST">

                                @csrf

                                <div class="header--search__box">

                                    <input class="header--search__query" type="text"
                                        placeholder="Search For Products..." required autocomplete="off" id="search"
                                        name="search" />
                                    <button class="header--search__btn">
                                        <i class="icofont-search-2"></i>
                                    </button>

                                    {{-- <div id="searchProducts"></div> --}}
                                </div>



                                {{-- <div class="header--search__cate">
                                    <select name="header-search" id="header--search__main">
                                        <option selected >All Categories</option>
                                    </select>
                                </div> --}}

                            </form>

                            <div id="searchProducts"></div>
                        </div>

                        <div class="cart--header__middle d-none d-md-block">

                            <div class="cart--header__list">
                                <ul class="list-inline">

                                    @auth
                                        <li>
                                            <div class="dropdown">
                                                <a href="" class="border-0 bg-none text-muted" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fal fa-user-plus text-black font-weight-bold"></i>
                                                </a>
                                                <div class="dropdown-menu p-3 user-panel-login"
                                                    aria-labelledby="dropdownMenuButton" style="">

                                                    <a href="{{ route('template.one.user.logout') }}"
                                                        class="btn btn-primary w-100">Logout</a>

                                                    <hr class="mb-2 mt-3">

                                                    <a href="{{ route('template.one.dashboard') }}" class="dropdown-item"
                                                        href="#"><i class="fal fa-user pr-2"></i>
                                                        My Dashboard</a>

                                                    <a href="{{ route('template.one.dashboard') }}" class="dropdown-item"
                                                        href="#"><i class="fal fa-star pr-2" aria-hidden="true"></i>
                                                        My Order</a>

                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li>
                                            <div class="dropdown">
                                                <a href="" class="border-0 bg-none text-muted" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fal fa-user-plus text-black font-weight-bold"></i>
                                                </a>
                                                <div class="dropdown-menu p-2 user-panel-login"
                                                    aria-labelledby="dropdownMenuButton" style="">

                                                    <a href="{{ route('template.one.login') }}"
                                                        class="btn btn-primary w-100">Login</a>

                                                    <hr class="mb-2 mt-1">
                                                    <p>First time here? <a href="{{ route('template.one.login') }}"
                                                            class="text-danger">Sign Up</a>
                                                    </p>



                                                </div>
                                            </div>
                                        </li>
                                    @endauth

                                    @auth
                                        <li class="">
                                            <a href="{{ route('wishlist') }}"><i class="fal fa-heart"><span
                                                        class="cart__count" id="wishQty">0</span></i></a>
                                        </li>
                                    @endauth


                                    <li class="cart_icon {{ Cart::total() > 0 ? '' : 'd-none' }}">
                                        <a class="mini__cart--link" href="jaxascript:;"><i
                                                class="fal fa-bags-shopping font-weight-bold text-muted">
                                                <span class="cart__count" id="cartQty">0</span>
                                            </i>
                                        </a>
                                    </li>


                                    <li class="d-none">
                                        <a href="#"><i class="fal fa-sync"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mini__cart--box">


                                <div id="miniCart">
                                </div>

                                <ul>
                                    <li>
                                        <div class="total-text d-flex justify-content-between">
                                            <span class="f-800 cod__black-color">Total Bag</span>
                                            <span class="f-800 cod__black-color">Tk <span
                                                    id="cartSubTotal"></span></span>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('template.one.checkout') }}"
                                                class="checkout">Checkout</a>
                                            <a href="{{ route('template.one.view.cart') }}" class="viewcart">View
                                                Cart</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom header__bottom header__bottom--border custom-header-bottom">
        <div class="container">
            <div class="row">
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
                <div class="col-xl-3 col-lg-4 col-md-5 col-10">
                    <!-- Extra shopping cart for mobile device start -->
                    <div class="cart--header__middle d-block d-md-none dept__menu-box">
                        <div class="cart--header__list">
                            <ul class="list-inline">
                                <li>
                                    <a href="registration.html"><i class="fal fa-user-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fal fa-heart"></i></a>
                                </li>


                                <li>
                                    <a class="mini__cart--link" href="#"><i class="fal fa-bags-shopping"><span
                                                class="cart__count">3</span></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="mini__cart--box">
                            <ul>
                                <li class="mb-20">
                                    <div class="cart-image">
                                        <a href="#"><img src="img/allproducts/cart__thumb__1.jpg"
                                                alt="" /></a>
                                    </div>
                                    <div class="cart-text">
                                        <a href="#" class="title f-400 cod__black-color">Pink Jacket</a>
                                        <span class="cart-price f-400 dusty__gray-color">2 x
                                            <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                    </div>
                                    <div class="del-button">
                                        <a href="#"><i class="icofont-close-line"></i></a>
                                    </div>
                                </li>
                                <li class="mb-20">
                                    <div class="cart-image">
                                        <a href="#"><img src="img/allproducts/cart__thumb__2.jpg"
                                                alt="" /></a>
                                    </div>
                                    <div class="cart-text">
                                        <a href="#" class="title f-400 cod__black-color">Silk Glows</a>
                                        <span class="cart-price f-400 dusty__gray-color">2 x
                                            <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                    </div>
                                    <div class="del-button">
                                        <a href="#"><i class="icofont-close-line"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="total-text d-flex justify-content-between">
                                        <span class="f-800 cod__black-color">Total Bag </span>
                                        <span class="f-800 cod__black-color">$ 99.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="checkout">Checkout</a>
                                        <a href="#" class="viewcart">View Cart</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @php
                        $categorys = App\Models\Admin\Category::where('status', '1')
                            ->orderBy('category_name', 'ASC')
                            ->limit(9)
                            ->latest()
                            ->get();
                    @endphp

                    <!-- Extra shopping cart for mobile device end -->
                    <div class="dept__menu position-relative d-none d-md-block extra_main_cat">
                        <nav>
                            <ul class="dept__menu--list">
                                <li>
                                    <a class="dept__menu-mlink card-title cod__gray-color mb-0" href="#"
                                        id="categoryLink">
                                        <i class="fa fa-th pr-2" aria-hidden="true"></i>Category
                                    </a>

                                    <ul class="dept__menu--dropdown custom_main_menu_dropdown py-0"
                                        id="categoryDropdown">
                                        <div class="row bg-white" style="border-top: 1px solid #eee; margin-top: 16px;">
                                            <div class="col-lg-2 px-0" style="background-color: #eee">
                                                <ul class="nav nav-tabs flex-column px-0" id="myTab" role="tablist">

                                                    @foreach ($categorys as $key => $category)
                                                        <li class="nav-item">
                                                            <a class="nav-link main_cat_triger {{ $key == 0 ? 'active' : '' }}"
                                                                id="Cosmetics-tab" data-toggle="tab"
                                                                href="#category{{ $category->id }}" role="tab"
                                                                aria-controls="Cosmetics"
                                                                aria-selected="true">{{ $category->category_name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="tab-content" id="myTabContent">
                                                    @foreach ($categorys as $key => $category)
                                                        <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}"
                                                            id="category{{ $category->id }}" role="tabpanel"
                                                            aria-labelledby="Cosmetics-tab">
                                                            @php
                                                                $catwissubcat = App\Models\Admin\SubCategory::where(
                                                                    'status',
                                                                    '1',
                                                                )
                                                                    ->where('category_id', $category->id)
                                                                    ->orderBy('subcategory_name', 'ASC')
                                                                    ->latest()
                                                                    ->get();
                                                            @endphp
                                                            <div class="row main-cat-height">
                                                                @forelse ($catwissubcat as $subcat)
                                                                    <div class="col-lg-3">
                                                                        <p
                                                                            class="font-weight-bold pt-3 header-menu-border">
                                                                            {{ $subcat->subcategory_name }}
                                                                        </p>

                                                                        @php
                                                                            $childcats = App\Models\Admin\ChildCategory::where(
                                                                                'status',
                                                                                '1',
                                                                            )
                                                                                ->where('subcategory_id', $subcat->id)
                                                                                ->orderBy('childcategory_name', 'ASC')
                                                                                ->limit(7)
                                                                                ->latest()
                                                                                ->get();
                                                                        @endphp
                                                                        <ul>
                                                                            @forelse ($childcats as $childcat)
                                                                                <li>

                                                                                    <a href="{{ url('product/childcategory/' . $childcat->id . '/' . $childcat->childcategory_slug) }}"
                                                                                        class="text-muted px-0 py-1">{{ $childcat->childcategory_name }}</a>
                                                                                </li>
                                                                            @empty
                                                                                <p>No ChildCategory Avaiable</p>
                                                                            @endforelse

                                                                        </ul>
                                                                    </div>
                                                                @empty
                                                                    <p>No Subcategory Avaiable</p>
                                                                @endforelse
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <ul class="navbar-nav mr-auto mobile-menu">
                    <li class="nav-item active">
                        <a class="nav-link main-menu-link" href="{{ route('index') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    {{-- All Brands Menu --}}
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link main-menu-link dropdown-toggle" href="javascript:void(0)"
                            id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Brands
                        </a>

<<<<<<< HEAD
                        @php
                            $brands = App\Models\Brand::where('status', '1')
                                ->orderBy('brand_name', 'ASC')
                                ->limit(8)
                                ->latest()
                                ->get();
                        @endphp
                        <div class="dropdown-menu w-100 mt-0 rounded-0 border-bottom-0 main-menu-drop"
                            style="border-top: 4px solid #cd3301" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row">
                                    @foreach ($brands as $brand)
                                        <div class="col-lg-3">
                                            <a href="javascript:;" class="main-sub-menu">{{ $brand->brand_name }}</a>
                                            <div class="link-divider"></div>
                                            @php
                                                $categorys = App\Models\Admin\Product::where('category_id', $brand->id)
                                                    ->latest()
                                                    ->get();
                                            @endphp
                                            <ul class="submenu level-1">
                                                @forelse ($categorys as $category)
                                                    <li class=""> <a
                                                            href="javascript:void();">{{ $category['category']['category_name'] }}</a>
                                                    </li>
                                                @empty
                                                    <p>No Category Avaiable</p>
                                                @endforelse
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                    {{-- All Brands Menu --}}
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link main-menu-link dropdown-toggle" href="javascript:void(0)"
                            id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Offers
                        </a>

                        @php
                            $brands = App\Models\Brand::where('status', '1')
                                ->orderBy('brand_name', 'ASC')
                                ->limit(8)
                                ->latest()
                                ->get();
                        @endphp
                        <div class="dropdown-menu w-100 mt-0 rounded-0 border-bottom-0 main-menu-drop"
                            style="border-top: 4px solid #cd3301" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row">
                                    @foreach ($brands as $brand)
                                        <div class="col-lg-3">
                                            <a href="javascript:;" class="main-sub-menu">{{ $brand->brand_name }}</a>
                                            <div class="link-divider"></div>
                                            @php
                                                $categorys = App\Models\Admin\Product::where('category_id', $brand->id)
                                                    ->latest()
                                                    ->get();
                                            @endphp
                                            <ul class="submenu level-1">
                                                @forelse ($categorys as $category)
                                                    <li class=""> <a
                                                            href="javascript:void();">{{ $category['category']['category_name'] }}</a>
                                                    </li>
                                                @empty
                                                    <p>No Category Avaiable</p>
                                                @endforelse
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div>
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <form class="searchbox" action="{{ route('product.search') }}" method="POST">
                                @csrf
                                <input type="search" placeholder="Search......" name="search"
                                    class="searchbox-input" id="search" name="search" onkeyup="buttonUp();"
                                    required>
                                <button class="searchbox-submit" value="GO"><i
                                        class="icofont-search-2"></i></button>
                                <span class="searchbox-icon"><i class="icofont-search-2"></i></span>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart--header__middle d-none d-md-block">
                                <div class="cart--header__list">
                                    <ul class="list-inline">
                                        <li>
                                            <div class="dropdown">
                                                <a href="" class="border-0 bg-none text-muted" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    style="font-size: 20px;">
                                                    <i class="fa-solid fa-user text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu p-3 user-panel-login"
                                                    aria-labelledby="dropdownMenuButton" style="">
                                                    <a href="registration.html"
                                                        class="btn btn-primary w-100">Login</a>
                                                    <hr class="mb-2 mt-3">
                                                    <p>First time here? <a href="" class="text-danger">Sign
                                                            Up</a>
                                                    </p>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fal fa-user pr-2"></i>
                                                        My Profile</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fal fa-star pr-2" aria-hidden="true"></i> My
                                                        Favorites</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fal fa-list pr-2" aria-hidden="true"></i> My
                                                        Booked</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="">
                                            <a href="{{ route('wishlist') }}" style="font-size: 20px;">
                                                <i class="fa-solid fa-heart text-muted">
                                                    <span class="cart__count" id="wishQty">0</span>
                                                </i>
                                            </a>
                                        </li>


                                        <li class="">
                                            <a class="mini__cart--link" href="jaxascript:;" style="font-size: 20px;">
                                                <i class="fa-solid fa-cart-plus text-muted">
                                                    <span class="cart__count" id="cartQty">0</span>
                                                </i>
                                            </a>
                                        </li>

                                        <li class="d-none">
                                            <a href="#"><i class="fal fa-sync text-muted"
                                                    style="font-size: 20px;"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mini__cart--box">
                                    <div id="miniCart">
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="total-text d-flex justify-content-between">
                                                <span class="f-800 cod__black-color">Total Bag</span>
                                                <span class="f-800 cod__black-color">Tk <span
                                                        id="cartSubTotal"></span></span>
=======
                                {{-- Brand List  --}}

                                <li class="mega-menu static dropdown-icon">
                                    <a href="javascript:void(0)">Brand</a>

                                    @php
                                        $categorys = App\Models\Admin\Category::where('status', '1')
                                            ->orderBy('id', 'DESC')
                                            ->limit(4)
                                            ->latest()
                                            ->get();
                                    @endphp

                                    <ul class="submenu mega-full">

                                        @foreach ($categorys as $category)
                                            <li>
                                                <a href="javascript:;">{{ $category->category_name }}</a>

                                                @php
                                                    $products = App\Models\Admin\Product::where('status', '1')
                                                        ->where('brand_id', $category->id)
                                                        ->limit(4)
                                                        ->latest()
                                                        ->get();
                                                @endphp



                                                <ul class="submenu level-1">

                                                    @forelse ($products as $brand)
                                                        <li> <a href="">{{ $brand->brand->brand_name }}</a>
                                                        </li>
                                                    @empty
                                                        <p>No Brand</p>
                                                    @endforelse



                                                </ul>

                                            </li>
                                        @endforeach

                                    </ul>
                                </li>

                                {{-- Brand List  --}}

                                <li class="mega-menu static dropdown-icon">
                                    <a href="javascript:void(0)">Offers</a>

                                    @php
                                        $offercats = App\Models\Admin\OfferCategory::where('status', '1')
                                            ->orderBy('id', 'DESC')
                                            ->limit(4)
                                            ->latest()
                                            ->get();
                                    @endphp

                                    <ul class="submenu mega-full">

                                        @forelse ($offercats as $offercat)
                                            <li>
                                                <a href="javascript:;">{{ $offercat->offer_category_name }}</a>

                                                @php
                                                    $offers = App\Models\Admin\Offer::where('status', '1')->where('offer_category_id',$offercat->id)
                                                        ->orderBy('id', 'DESC')
                                                        ->limit(4)
                                                        ->latest()
                                                        ->get();
                                                @endphp

                                                <ul class="submenu level-1">

                                                    @forelse ($offers as $offer)
                                                    <li>
                                                        <a href="">{{ $offer->offer_name }}</a>
                                                    </li>
                                                    @empty
                                                        <p>No Item Avaiable</p>
                                                    @endforelse

                                                </ul>
                                            </li>
                                        @empty
                                            <p class="text-center">No Offer Avaiable</p>
                                        @endforelse

                                    </ul>
                                </li>
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041

                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('template.one.view.cart') }}"
                                                    class="checkout">Checkout</a>
                                                <a href="{{ route('template.one.view.cart') }}" class="viewcart">View
                                                    Cart</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
