@php
    $site = App\Models\Sites::find(1);
@endphp

<header>
    <div class="menu">
        <div class="overlay"></div>

        <a href="#" class="btn-menu">
            <span class="line"></span>
        </a>

        <div class="menu-box scroll-y">
            <div class="wrap">
                <div class="mo-title">
                    <h2></h2>
                    <a href="#" class="btn-menu-back"></a>
                </div>
                <ul class="depth1">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('template.two.all.product') }}">PRODUCT</a>
                    </li>
                    <li>
                        <a href="javascript:;">SUPPORT</a>
                        <ul class="depth2">
                            <li>
                                <a href="{{ route('template.two.faq') }}">FAQ</a>
                            </li>
                            <li>
                                <a href="">Buying Guide</a>
                            </li>
                            <li>
                                <a href="{{ route('template.two.contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <h1>
        <a href="{{ route('index') }}">
            <img class="" style="width: 160px;" src="{{ asset('upload/logo_black/' . $site->logo_black) }}"
                alt="">
        </a>
    </h1>

    <div class="gnb">
        <ul class="depth1">
            <li>
                <a href="{{ route('index') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('template.two.all.product') }}">PRODUCT</a>
            </li>
            <li>
                <a href="javascript:;">SUPPORT</a>
                <ul class="depth2">
                    <li>
                        <a href="{{ route('template.two.faq') }}">FAQ</a>
                    </li>
                    <li>
                        <a href="">Buying Guide</a>
                    </li>
                    <li>
                        <a href="{{ route('template.two.contact') }}">Contact Us</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <a href="javascript:void(0);" class="btn-srch"></a>

    <div class="srch-box">
        <div class="overlay" style="display: none;"></div>
        <div class="inner" style="display: none;">
            <div class="wrap">
                <div class="top">
                    <form action="{{ route('dadabhaai.product.search') }}" method="POST">
                        @csrf>
                        <input type="text" name="searchContent" class="submitSearch" placeholder="Search">
                        <a href="javascript:searchContentResult()" type="submit" class="btn-srch2">
                            <span class="blind">검색</span>
                        </a>
                    </form>
                </div>
                <!--search result-->
                <div id="searchNoResult" class="result-none" style="display:none">
                    <strong>Sorry. We cannot find the result you are searching for.</strong>
                    <p>Maybe a little spelling mistake?<br>if not, please use keyword suggestion </p>
                </div>
                <!--search result-->
                <div id="searchResult" class="result" style="display:none">
                    <div class="list">
                        <div class="total">
                            <strong>Product (<span id="searchProductCnt"></span>)</strong>
                            <a href="javascript:viewAllProduct()" id="viewAllProductBtn" style="display:none">View
                                All</a>
                        </div>
                        <ul id="searchProductLayer"></ul>
                    </div>
                    <div class="list v1">
                        <div class="total">
                            <strong>Contents (<span id="searchContentCnt"></span>)</strong>
                            <a href="javascript:viewAllContent()" id="viewAllContentBtn" style="display:none">View
                                All</a>
                        </div>
                        <ul id="searchContentLayer"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="srch-box">
        <div class="overlay"></div>
        <div class="inner">
            <div class="wrap">

                <form action="{{ route('dadabhaai.product.search') }}" method="POST">
                    @csrf

                    <div class="top">

                        <input type="text" name="search" required autocomplete="off" class="submitSearch"
                            placeholder="Search Product" />

                        <button type="submit" class="btn-srch2"></button>

                    </div>

                </form>

                <!--search result//-->
                {{-- <div id="searchNoResult" class="result-none" style="display: none">
                    <strong>Sorry. We cannot find the result you are searching
                        for.</strong>
                    <p>
                        Maybe a little spelling mistake? <br />
                        if not, please use keyword suggestion
                    </p>
                </div> --}}
                <!--//search result-->

                <!--Keyword Suggestion//-->
                {{-- <div class="keyword">
                    <strong>Keyword Suggestion</strong>
                    <ul>
                        <li>
                            <a href="#">SP3000</a>
                        </li>
                        <li>
                            <a href="#">SR35</a>
                        </li>
                        <li>
                            <a href="#">KANN MAX</a>
                        </li>
                        <li>
                            <a href="#">AK ZERO2</a>
                        </li>
                        <li>
                            <a href="#">AK HC3</a>
                        </li>
                    </ul>
                </div> --}}
                <!--//Keyword Suggestion-->

                <!--search result//-->
                {{-- <div id="searchResult" class="result" style="display: none">

                    <div class="list">
                        <div class="total">
                            <strong>Product ( <span id="searchProductCnt"></span>)
                            </strong>
                            <a href="#" id="viewAllProductBtn" style="display: none">View All</a>
                        </div>
                        <ul id="searchProductLayer"></ul>
                    </div>

                    <div class="list v1">
                        <div class="total">
                            <strong>Contents ( <span id="searchContentCnt"></span>)
                            </strong>
                            <a href="#" id="viewAllContentBtn" style="display: none">View All</a>
                        </div>
                        <ul id="searchContentLayer"></ul>
                    </div>
                </div> --}}
                <!--//search result-->
            </div>
        </div>
    </div>


</header>

@push('scripts')
    <script>
        // Search Button Click Handler
        let scrollT = 0;
        let contentH = 0;

        $('header .btn-srch').click(function() {
            scrollT = $(window).scrollTop();
            contentH = $('.key-visual').height() / 3;

            if ($(this).hasClass('on')) {
                $('.srch-box .overlay').stop().fadeOut(200);
                $(this).removeClass('on');
                $('header .srch-box .inner').stop().slideUp(200);

                if ($(".key-visual").length > 0 && scrollT < contentH) {
                    $('header').addClass('dark');
                } else {
                    $('header').removeClass('dark');
                }
            } else {
                $('.srch-box .overlay').stop().fadeIn(200);
                $(this).addClass('on');
                $('header .srch-box .inner').stop().slideDown(200);
                $('header').removeClass('dark');

                $('.gnb .depth1').hover(
                    function() {
                        $('header').removeClass('dark');
                    },
                    function() {
                        $('header').removeClass('dark');
                    }
                );
            }
        });

        $('header .srch-box .overlay').click(function() {
            scrollT = $(window).scrollTop();
            contentH = $('.key-visual').height() / 3;

            $('.srch-box .overlay').stop().fadeOut(200);
            $('header .btn-srch').removeClass('on');
            $('header .srch-box .inner').stop().slideUp(200);

            if ($(".key-visual").length > 0 && scrollT < contentH) {
                $('header').addClass('dark');
            } else {
                $('header').removeClass('dark');
            }
        });
    </script>
@endpush
