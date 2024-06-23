<section class="sticky-navbar">
    <div class="container">
        @php
            $site = App\Models\Sites::find(1);
        @endphp
        <nav class="navbar navbar-expand-lg navbar-transparent">
            <a class="navbar-brand" href="{{ route('index') }}">
                {{-- <img class="" width="200px" src="{{ asset('upload/logo_black/' . $site->logo_black) }}" alt="" /> --}}
                <img class="" width="200px"
                    src="https://dadabhaai.com/upload/logo_black/202405200404Dadabhai%20Logo.png" alt="" />
            </a>
            <!-- Categories Dropdown -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle card-title cod__gray-color mb-0 main-menu-link"
                        style="background: #f5f5f5; border-radius: 5px" href="#" id="navbarDropdownFeatures"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-th pr-2" aria-hidden="true"></i>Category
                    </a>
                    <div class="dropdown-menu dropdown-menu-full main-menu-drop"
                        aria-labelledby="navbarDropdownFeatures" style="border-top: 2px solid #cd3301">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-toggle="tab"
                                                data-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">Home</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-toggle="tab"
                                                data-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Profile</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="contact-tab" data-toggle="tab"
                                                data-target="#contact" type="button" role="tab"
                                                aria-controls="contact" aria-selected="false">Contact</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">...</div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">...</div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                            aria-labelledby="contact-tab">...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Navbar Toggler -->
            {{-- <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-th pr-2" aria-hidden="true"></i>
            </button> --}}
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link main-menu-link" href="{{ route('index') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
<<<<<<< HEAD

                    {{-- All Brands Menu --}}

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link main-menu-link dropdown-toggle" href="javascript:void(0)"
                            id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
=======
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle main-menu-link" href="#" id="navbarDropdownFeatures"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
>>>>>>> 2de5b1f316fde9d635bcb66e68d61557d9706ea0
                            Brands
                        </a>

                        @php
<<<<<<< HEAD
                            $categories = DB::table('categories')->inRandomOrder()->limit(4)->get();
                        @endphp

                        <div class="dropdown-menu w-100 mt-0 rounded-0 border-bottom-0 main-menu-drop"
                            style="border-top: 2px solid #cd3301" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row">
                                    @foreach ($categories as $category)
                                        <div class="col-lg-3">
                                            <a href="javascript:;"
                                                class="main-sub-menu">{{ $category->category_name }}</a>
                                            <div class="link-divider"></div>
                                            <ul class="submenu level-1">
                                                @php
                                                    $brands = DB::table('brands')
                                                        ->join('products', 'brands.id', '=', 'products.brand_id')
                                                        ->join(
                                                            'categories',
                                                            'products.category_id',
                                                            '=',
                                                            'categories.id',
                                                        )
                                                        ->where('categories.id', $category->id)
                                                        ->pluck('brands.id')
                                                        ->unique();
                                                @endphp
                                                @forelse ($brands as $brandId)
                                                    @php
                                                        $brand = App\Models\Brand::find($brandId);
                                                    @endphp
                                                    @if ($brand)
                                                        <li><a href="javascript:;">{{ $brand->brand_name }}</a></li>
                                                    @endif
                                                @empty
                                                    <p>No brand available for this category.</p>
                                                @endforelse
=======
                            $categoriesWithBrands = DB::table('categories')
                                ->leftJoin('products', 'categories.id', '=', 'products.category_id')
                                ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')
                                ->select(
                                    'categories.id',
                                    'categories.category_name as category_name',
                                    'brands.id as brand_id',
                                    'brands.brand_name as brand_name',
                                    'brands.brand_slug as brand_slug', // assuming this is the slug field
                                )
                                ->orderBy('categories.id')
                                ->limit(8)
                                ->get();

                            // Group brands by category and remove duplicates
                            $brandsByCategory = [];
                            foreach ($categoriesWithBrands as $category) {
                                $brandsByCategory[$category->category_name][] = $category;
                            }
                            // Remove duplicates
                            foreach ($brandsByCategory as &$brands) {
                                $brands = array_unique($brands, SORT_REGULAR);
                            }
                            unset($brands); // unset reference variable
                        @endphp

                        <div class="dropdown-menu dropdown-menu-full main-menu-drop"
                            aria-labelledby="navbarDropdownFeatures" style="border-top: 2px solid #cd3301">
                            <div class="container">
                                <div class="row">

                                    @foreach ($brandsByCategory as $categoryName => $brands)
                                        <div class="col-lg-3">
                                            <a href="javascript:;" class="main-sub-menu">{{ $categoryName }}</a>
                                            <div class="link-divider"></div>
                                            <ul class="submenu level-1">
                                                @foreach ($brands as $brand)
                                                    <li><a
                                                            href="{{ url('product/brand/' . $brand->brand_id . '/' . $brand->brand_slug) }}">{{ $brand->brand_name }}</a>
                                                    </li>
                                                @endforeach
>>>>>>> 2de5b1f316fde9d635bcb66e68d61557d9706ea0
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
<<<<<<< HEAD

                    {{-- All Offer Menu --}}
=======
>>>>>>> 2de5b1f316fde9d635bcb66e68d61557d9706ea0
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle main-menu-link" href="#" id="navbarDropdownPricing"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Offers
                        </a>
                        @php
                            $offers = App\Models\Admin\OfferCategory::where('status', '1')
                                ->orderBy('offer_category_name', 'ASC')
                                ->limit(4)
                                ->latest()
                                ->get();
                        @endphp
<<<<<<< HEAD

                        <div class="dropdown-menu w-100 mt-0 rounded-0 border-bottom-0 main-menu-drop"
                            style="border-top: 2px solid #cd3301" aria-labelledby="navbarDropdown">
=======
                        <div class="dropdown-menu dropdown-menu-full main-menu-drop"
                            style="border-top: 2px solid #cd3301" aria-labelledby="navbarDropdownPricing">
>>>>>>> 2de5b1f316fde9d635bcb66e68d61557d9706ea0
                            <div class="container">
                                <div class="row">
                                    @foreach ($offers as $offer)
                                        <div class="col-lg-3">
                                            <a href="javascript:;"
                                                class="main-sub-menu">{{ $offer->offer_category_name }}</a>
                                            <div class="link-divider"></div>

                                            <ul class="submenu level-1">

                                                @php
                                                    $offerNames = App\Models\Admin\Offer::where('status', '1')
                                                        ->where('offer_category_id', $offer->id)
                                                        ->limit(4)
                                                        ->latest()
                                                        ->get();
                                                @endphp

                                                @forelse ($offerNames as $offerName)
                                                    <li class=""> <a
                                                            href="{{ route('offerwise.product', $offerName->id) }}">{{ $offerName->name }}</a>
                                                    </li>
                                                @empty
                                                @endforelse

                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item active">
<<<<<<< HEAD
                        <a class="nav-link main-menu-link"
                            href="{{ route('template.one.all_product') }}">Products<span
                                class="sr-only">(current)</span></a>
=======
                        <a class="nav-link main-menu-link" href="{{ route('template.one.all_product') }}">Product
                            <span class="sr-only">(current)</span></a>
>>>>>>> 2de5b1f316fde9d635bcb66e68d61557d9706ea0
                    </li>
                </ul>
            </div>

            <!-- Search Form -->
            {{-- <form class="form-inline my-2 my-lg-0 ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form> --}}
            <form class="searchbox ml-auto mr-3" action="{{ route('product.search') }}" method="POST">
                @csrf
                <input type="search" placeholder="Search......" name="search" class="searchbox-input"
                    id="search" autocomplete="off" name="search" onkeyup="buttonUp();" required>
                <button class="searchbox-submit" value="GO"><i class="icofont-search-2"></i></button>
                <span class="searchbox-icon"><i class="icofont-search-2"></i></span>
            </form>

            <div class="cart--header__middle d-none d-md-block">
                <div class="cart--header__list">
                    <ul class="list-inline">
                        <li>
                            <div class="dropdown">
                                <a href="javascript:void(0);" id="userIcon" class="border-0 bg-none text-muted"
                                    type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" style="font-size: 20px;">
                                    <i class="fa-solid fa-user text-muted userLogin"></i>
                                </a>

<<<<<<< HEAD
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf

                                                            <a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();this.closest('form').submit();"
                                                                class="cart-button w-100 mt-0">
                                                                Logout

                                                            </a>

                                                        </form>

                                                        <hr class="mb-2 mt-3">

                                                        <p class="text-muted pl-3">First time here? <a
                                                                href="{{ route('template.one.login') }}"
                                                                class="text-danger">Sign
                                                                Up</a>
                                                        </p>
                                                        <a class="dropdown-item"
                                                            href="{{ route('template.one.dashboard') }}"><i
                                                                class="fal fa-user pr-2"></i>
                                                            My Dashboard</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('template.one.dashboard') }}"><i
                                                                class="fal fa-star pr-2"
                                                                aria-hidden="true"></i>Password Change</a>
                                                    @else
                                                        <a href="{{ route('template.one.login') }}"
                                                            class="cart-button w-100 mt-0">
                                                            Login
                                                        </a>
                                                        <hr class="mb-2 mt-3">
                                                        <a href="{{ route('template.one.login') }}"
                                                            class="text-muted pl-3" style="font-size: 12px;">First
                                                            time
                                                            here? <span class="text-danger">Sign Up</span></a>
                                                        <hr class="mb-2 mt-2">
                                                        <a class="dropdown-item pl-3" style="font-size: 12px;"
                                                            href="{{ route('template.one.dashboard') }}"><i
                                                                class="fal fa-user pr-2"></i>
                                                            My Profile</a>
                                                        <a class="dropdown-item pl-3" style="font-size: 12px;"
                                                            href="{{ route('template.one.dashboard') }}"><i
                                                                class="fal fa-heart pr-2"></i>
                                                            My Wishlist</a>
                                                        <a class="dropdown-item pl-3" style="font-size: 12px;"
                                                            href="{{ route('template.one.dashboard') }}"><i
                                                                class="fal fa-random pr-2"></i>
                                                            My Compare</a>
                                                        <a class="dropdown-item pl-3" style="font-size: 12px;"
                                                            href="{{ route('template.one.dashboard') }}"><i
                                                                class="fal fa-box pr-2"></i>
                                                            My Order</a>
                                                        <hr class="mb-2 mt-2">
                                                        <a class="dropdown-item pl-3" style="font-size: 12px;"
                                                            href="{{ route('template.one.dashboard') }}"><i
                                                                class="fal fa-shopping-cart pr-2"></i>
                                                            My Cart</a>
                                                    @endif

                                                </div>

                                            </div>
                                        </li>


                                        @if (Auth::check())
                                            <li class="">
                                                <a href="{{ route('wishlist') }}" style="font-size: 20px;">
                                                    <i class="fa-solid fa-heart text-muted">
                                                        <span class="cart__count" id="wishQty">0</span>
                                                    </i>
                                                </a>
                                            </li>
                                        @endif


                                        <li class="">
                                            <a class="mini__cart--link" href="jaxascript:;" style="font-size: 20px;">
                                                <i class="fa-solid fa-cart-plus text-muted">
                                                    <span class="cart__count" id="cartQty">0</span>
                                                </i>
=======
                                <div class="dropdown-menu p-3 user-panel-login" aria-labelledby="dropdownMenuButton"
                                    style="">
                                    @if (Auth::user())
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();this.closest('form').submit();"
                                                class="cart-button w-100 mt-0">
                                                Logout
>>>>>>> 2de5b1f316fde9d635bcb66e68d61557d9706ea0
                                            </a>
                                        </form>
                                        <hr class="mb-2 mt-3">
                                        <p class="text-muted pl-3">First time here? <a
                                                href="{{ route('template.one.login') }}" class="text-danger">Sign
                                                Up</a>
                                        </p>
                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-user pr-2"></i>
                                            My Dashboard</a>
                                        <a class="dropdown-item" href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-star pr-2" aria-hidden="true"></i>Password Change</a>
                                    @else
                                        <a href="{{ route('template.one.login') }}" class="cart-button w-100 mt-0">
                                            Login
                                        </a>
                                        <hr class="mb-2 mt-3">
                                        <a href="{{ route('template.one.login') }}" class="text-muted pl-3"
                                            style="font-size: 12px;">First
                                            time
                                            here? <span class="text-danger">Sign Up</span></a>
                                        <hr class="mb-2 mt-2">
                                        <a class="dropdown-item pl-3" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-user pr-2"></i>
                                            My Profile</a>
                                        <a class="dropdown-item pl-3" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-heart pr-2"></i>
                                            My Wishlist</a>
                                        <a class="dropdown-item pl-3" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-random pr-2"></i>
                                            My Compare</a>
                                        <a class="dropdown-item pl-3" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-box pr-2"></i>
                                            My Order</a>
                                        <hr class="mb-2 mt-2">
                                        <a class="dropdown-item pl-3" style="font-size: 12px;"
                                            href="{{ route('template.one.dashboard') }}"><i
                                                class="fal fa-shopping-cart pr-2"></i>
                                            My Cart</a>
                                    @endif
                                </div>
                            </div>
                        </li>


                        @if (Auth::check())
                            <li class="">
                                <a class="wishlist" href="{{ route('wishlist') }}" style="font-size: 20px;">
                                    <i class="fa-solid fa-heart text-muted wishlist">
                                        <span class="cart__count" id="wishQty">0</span>
                                    </i>
                                </a>
                            </li>
                        @endif
                        {{-- <li>
                            <div class="dropdown">
                                <a class="mini__cart--link dropdown-toggle" href="jaxascript:;"
                                    style="font-size: 20px;" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-cart-plus text-muted">
                                        <span class="cart__count" id="cartQty">0</span>
                                    </i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="miniCart" style="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="d-none">
                            <a href="#"><i class="fal fa-sync text-muted" style="font-size: 20px;"></i></a>
                        </li> --}}
                    </ul>
                </div>
                <div class="mini__cart--box">
                    <div id="miniCart" style="">
                    </div>
                    <ul>
                        <li style="border: none">
                            <div class="total-text d-flex justify-content-between">
                                <span class="f-800 cod__black-color">Total Price</span>
                                <span class="f-800 cod__black-color">Tk <span id="cartSubTotal"></span></span>

                            </div>
                        </li>
                        <li style="border: none">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('template.one.view.cart') }}"
                                    class="checkout main-btn">Checkout</a>
                                <a href="{{ route('template.one.view.cart') }}" class="viewcart main-btn">View
                                    Cart</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
