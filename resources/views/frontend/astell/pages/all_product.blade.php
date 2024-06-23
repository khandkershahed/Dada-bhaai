@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
    <section class="lnb">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
            <ul class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0.299px, 0px, 0px);">
                <li class="swiper-slide">
                    <a href="/product/whatsNew.jsp" class="on">What's New</a>
                </li>
                <li class="swiper-slide">
                    <a href="category.html">DAP</a>
                </li>
                <li class="swiper-slide">
                    <a href="category.html">Headphones</a>
                </li>
                <li class="swiper-slide">
                    <a href="category.html">Home Audio</a>
                </li>
                <li class="swiper-slide swiper-slide-prev">
                    <a href="category.html">Accessories</a>
                </li>
                <li class="swiper-slide swiper-slide-active">
                    <a href="category.html" target="_blank">Activo</a>
                </li>
            </ul>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </section>
@endsection
