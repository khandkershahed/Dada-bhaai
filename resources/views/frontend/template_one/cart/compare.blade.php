@extends('frontend.template_one.frontend_dashboard_template_one')

@section('index_template_one')
@section('title')
    DadaBhaai | Compare
@endsection
<style>
    .cd-features-list li {
        padding: 10px 40px;
        border: 1px solid #dee2e6;
        border-bottom: 0;
        border-left: 0;
    }
    .sidebar-text-compare{
        font-weight: bolder;
    }

    .compare-title {
        font-size: 1rem;
        margin-bottom: 0px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .top-info {
        position: relative;
        height: 225px;
        text-align: center;
        border-right: 1px solid #dee2e6;
        padding: 2.25em 2.5em;
        -webkit-transition: height 0.3s;
        -moz-transition: height 0.3s;
        transition: height 0.3s;
        cursor: pointer;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .compare-product-img {
        width: 150px;
        height: 150px;
        object-fit: contain;
    }
</style>

<!-- page banner area start -->
<section class="page-banner-area blog-page"
    data-background="{{ asset('frontend/template_one/assets/img/bg/banner.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <div class="banner-text text-center pt-180 pb-120">
                        <h2 class="f-800 cod__black-color">
                            Compare <span class="grenadier-color">Product</span>
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pt-3">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item grenadier-color active" aria-current="page">
                                    <a href="">
                                        <span class="grenadier-color">Compare</span>
                                    </a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Compare List  --}}
<section>
    <div class="container py-5">
        <div class="row g-0">
            <div class="col-lg-2 px-0 pr-0">
                {{-- Sidebar Column --}}
                <div>
                    <ul class="cd-features-list border sidebar-text-compare" style="background: #e8e9eb;">
                        <li style="height: 225px;align-items: center; display: flex;">MODELS</li>
                        <li>Name</li>
                        <li>PRICE</li>
                        <li>CUSTOMER RATING</li>
                        <li>RESOLUTION</li>
                        <li>SCREEN TYPE</li>
                        <li>DISPLAY SIZE</li>
                        <li>REFRESH RATE</li>
                        <li>MODEL YEAR</li>
                        <li>TUNER TECHNOLOGY</li>
                        <li>ETHERNET INPUT</li>
                        <li>USB INPUT</li>
                        <li>SCART INPUT</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-3 px-0" style="border-top: 1px solid #dee2e6;border-bottom: 1px solid #dee2e6;">
                        <div class="top-info">
                            <img class="img-fluid compare-product-img" src="https://i.ibb.co/BGw4YX4/product.png"
                                alt="product image">

                        </div>
                        <ul class="cd-features-list text-center">
                            <li>
                                <h3 class="compare-title">Samsung Series 6 J6300</h3>
                            </li>
                            <li>$600</li>
                            <li class="rate"><span>5/5</span></li>
                            <li>1080p</li>
                            <li>LED</li>
                            <li>47.6 inches</li>
                            <li>800Hz</li>
                            <li>2015</li>
                            <li>mpeg4</li>
                            <li>1 Side</li>
                            <li>3 Port</li>
                            <li>1 Rear</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 px-0" style="border-top: 1px solid #dee2e6;border-bottom: 1px solid #dee2e6;">
                        <div class="top-info">
                            <img class="img-fluid compare-product-img"
                                src="https://i.ibb.co/LSmYM2b/Cudy-M1800-1-Pack-AX1800-Whole-Home-Mesh-Dual-Band-Wi-Fi-Router-2-320x320-removebg-preview.png"
                                alt="product image">

                        </div>
                        <ul class="cd-features-list text-center">
                            <li>
                                <h3 class="compare-title">LG 55UM7300PUA</h3>
                            </li>
                            <li>$650</li>
                            <li class="rate"><span>4.5/5</span></li>
                            <li>4K</li>
                            <li>LED</li>
                            <li>55 inches</li>
                            <li>120Hz</li>
                            <li>2019</li>
                            <li>ATSC</li>
                            <li>1 Side</li>
                            <li>3 Port</li>
                            <li>1 Rear</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 px-0" style="border-top: 1px solid #dee2e6;border-bottom: 1px solid #dee2e6;">
                        <div class="top-info">
                            <img class="img-fluid compare-product-img" src="https://i.ibb.co/BGw4YX4/product.png"
                                alt="product image">

                        </div>
                        <ul class="cd-features-list text-center">
                            <li>
                                <h3 class="compare-title">Sony X750H</h3>
                            </li>
                            <li>$700</li>
                            <li class="rate"><span>4/5</span></li>
                            <li>4K</li>
                            <li>LED</li>
                            <li>55 inches</li>
                            <li>60Hz</li>
                            <li>2020</li>
                            <li>ATSC</li>
                            <li>1 Side</li>
                            <li>3 Port</li>
                            <li>1 Rear</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 px-0" style="border-top: 1px solid #dee2e6;border-bottom: 1px solid #dee2e6;">
                        <div class="top-info">
                            <img class="img-fluid compare-product-img"
                                src="https://i.ibb.co/DCypTwb/51l-Gm-F29-Jd-L-AC-UF350-350-QL80-removebg-preview.png"
                                alt="product image">

                        </div>
                        <ul class="cd-features-list text-center">
                            <li>
                                <h3 class="compare-title">TCL 6-Series</h3>
                            </li>
                            <li>$750</li>
                            <li class="rate"><span>4.8/5</span></li>
                            <li>4K</li>
                            <li>QLED</li>
                            <li>65 inches</li>
                            <li>120Hz</li>
                            <li>2021</li>
                            <li>ATSC</li>
                            <li>1 Side</li>
                            <li>3 Port</li>
                            <li>1 Rear</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Compare List  --}}

@endsection
