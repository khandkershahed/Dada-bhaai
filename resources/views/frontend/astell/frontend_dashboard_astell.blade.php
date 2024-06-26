<!DOCTYPE html>
<html lang="en">

@include('frontend.astell.partials.style_link')

<body>

    <div class="overlay"></div>

    @if (Route::is('index'))
        <div class="line-bg">
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="line3"></span>
            <span class="line4"></span>
            <span class="line5"></span>
            <span class="line6"></span>
            <span class="line7"></span>
            <span class="line8"></span>
            <span class="line9"></span>
            <span class="line10"></span>
        </div>
    @endif



    <div class="body-wrap">

        <div class="side-group">

            {{-- <div class="quick">
                <a href="#" class="btn-star"></a>
                <div class="inner">
                    <a href="javascript:;" class="txt">Listen to Our New Product</a>
                    <a href="#" class="btn-close"></a>
                </div>
            </div> --}}

            <a href="javascript:;" class="btn-top">TOP</a>
        </div>

        <!--Header//-->
        {{-- @if (Route::is('index')) --}}
        @include('frontend.astell.partials.header')
        {{-- @endif --}}

        <!--//Header-->

        <!--Content//-->


        @yield('index_astell')


        <!--//content-->

        {{-- footer  --}}
        @include('frontend.astell.partials.footer')

    </div>

    @include('frontend.astell.partials.js_link')

</body>

</html>
