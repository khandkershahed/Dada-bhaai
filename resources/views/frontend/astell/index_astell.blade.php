@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
<<<<<<< HEAD
    <main class="main">

        {{--  @include('frontend.astell.home_page.category') --}}

=======
    <style>
        .astel-product-tabs {
            display: block;
            height: 86px;
            line-height: 75px;
            text-align: center;
            color: #888;
            font-size: 15px;
            font-weight: 300;
            letter-spacing: 0.75px;
            border: 0;
            background-color: #fff;
        }

        .tab-links li {
            display: inline-block;
            width: 25%;
            border-right: 1px solid #e6e6e6;
        }

        .nav-tabs .astel-product-tabs.show .astel-product-tabs-link,
        .nav-tabs .astel-product-tabs-link.active {
            display: inline-block;
            width: 100%;
            height: 86px;
            border: 0;
            background-color: #f4ece8;
        }

        .astel-product-tabs-link {
            display: inline-block;
            width: 100%;
            height: 86px;
            color: #888;
            border: 0;
        }

        .nav-tabs .astel-product-tabs-link:focus,
        .nav-tabs .astel-product-tabs-link:hover {
            border: 0px !important;
            outline: none !important;
        }

        .tab-links .astel-product-tabs-link {
            border: 0px !important;
            outline: none !important;
        }

        .swiper-container {
            overflow: hidden;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-container-wrapper {
            height: 100vh;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #000;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: center;
        }

        .gallery-top {
            position: relative;
            width: 100%;
            height: 75vh;
        }

        .gallery-thumbs {
            width: 100%;
            padding-top: 10px;
        }

        .gallery-thumbs .swiper-slide {
            width: 25%;
            flex-flow: row nowrap;
            height: 100%;
            opacity: 0.75;
            cursor: pointer;
            position: relative;
        }

        .gallery-thumbs .swiper-slide img {
            width: 100%;
        }

        .gallery-thumbs .swiper-slide .thumb-text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            padding: 5px;
            border-radius: 3px;
            font-size: 14px;
        }

        .gallery-thumbs .swiper-slide .thumb-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .gallery-thumbs .swiper-slide .thumb-description {
            font-size: 14px;
        }

        @media (min-width: 480px) {
            .gallery-thumbs .swiper-slide {
                flex-flow: column nowrap;
                width: 100%;
            }
        }

        .gallery-thumbs .swiper-slide-thumb-active {
            opacity: 1;
            background-color: #f4ece8;
        }

        .wr strong {
            display: block;
            font-size: 56px;
            font-weight: 500;
        }

        .swiper-containerss {
            width: 100%;
            height: 100%;
        }

        .swiper-container-bottom {
            text-align: center;
            font-size: 18px;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-button-prev,
        .swiper-container-rtl .swiper-button-next {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z' fill='%23000000'%3E%3C/path%3E%3C/svg%3E");
            left: 10px;
            right: auto;
        }

        .swiper-button-next {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22L27,22z' fill='%23000000'%3E%3C/path%3E%3C/svg%3E");
            right: 10px;
            left: auto;
        }
    </style>

    <main class="main">
>>>>>>> c1d92026f0dbf61c8b322ebc1c607d2e3e4b3397
        {{-- Home Video Section Start  --}}
        @include('frontend.astell.home_page.home_video')
        {{-- Home Video Section End  --}}

        {{-- Image Banner Section Start  --}}
        @include('frontend.astell.home_page.image_banner')
        {{-- Image Banner Section End  --}}

<<<<<<< HEAD
        {{-- Category Section Start  --}}

        {{-- Category Section End  --}}

=======
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs border-0 tab-links" id="myTab" role="tablist">
                            <li class="nav-item astel-product-tabs" role="presentation">
                                <button class="nav-link astel-product-tabs-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Foods & Supplements</button>
                            </li>
                            <li class="nav-item astel-product-tabs" role="presentation">
                                <button class="nav-link astel-product-tabs-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Decor & Appliances</button>
                            </li>
                            <li class="nav-item astel-product-tabs" role="presentation">
                                <button class="nav-link astel-product-tabs-link" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Computer & Electronics</button>
                            </li>
                            <li class="nav-item astel-product-tabs" role="presentation">
                                <button class="nav-link astel-product-tabs-link" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Test Two</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="background-color: #f4ece8;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content" id="myTabContent">
                                <!-- Foods & Supplements -->
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row align-items-center">
                                        <!-- Main Slider -->
                                        <div class="col-md-6">
                                            <div class="swiper-container gallery-top">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="https://cdn.astellnkern.com/product/202402/20240228134754_0c741f94-0d4a-4cac-aeca-6adc6c453636.png"
                                                            alt="Image 1">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://cdn.astellnkern.com/product/202110/20211025143709_378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                            alt="Image 2">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://cdn.astellnkern.com/product/202110/20211025142845_d7296e7a-41c5-4ec0-8812-606ccf9ce606.png"
                                                            alt="Image 3">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img src="https://cdn.astellnkern.com/product/202110/20211025143503_1e8c375c-2d99-438c-a53a-2f0878ab31b9.png"
                                                            alt="Image 4">
                                                    </div>
                                                </div>
                                                <!-- Navigation Buttons -->
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Slider -->
                                        <div class="col-md-6">
                                            <!-- Thumbnail Text Slider -->
                                            <div class="swiper-container thumbnail-text-slider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="thumb-text">
                                                            <div class="thumb-title wr">
                                                                <strong class="tmpProductInfo tmpProductInfo_5"
                                                                    style="">SP1000M</strong>
                                                            </div>
                                                            <div class="thumb-description wr">
                                                                <p class="tmpProductInfo tmpProductInfo_5" style="">
                                                                    The
                                                                    A&amp;ultima SP1000M achieves greater portability,
                                                                    without
                                                                    sacrificing the level of performance found in the
                                                                    original
                                                                    SP1000.</p>
                                                                <a href="#" class="lnk-ty1 text-muted">Find store</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="thumb-text">
                                                            <div class="thumb-title wr">
                                                                <strong class="tmpProductInfo tmpProductInfo_5"
                                                                    style="">SP1000M</strong>
                                                            </div>
                                                            <div class="thumb-description wr">
                                                                <p class="tmpProductInfo tmpProductInfo_5" style="">
                                                                    The
                                                                    A&amp;ultima SP1000M achieves greater portability,
                                                                    without
                                                                    sacrificing the level of performance found in the
                                                                    original
                                                                    SP1000.</p>
                                                                <a href="#" class="lnk-ty1 text-muted">Find
                                                                    store</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="thumb-text">
                                                            <div class="thumb-title wr">
                                                                <strong class="tmpProductInfo tmpProductInfo_5"
                                                                    style="">SP1000M</strong>
                                                            </div>
                                                            <div class="thumb-description wr">
                                                                <p class="tmpProductInfo tmpProductInfo_5" style="">
                                                                    The
                                                                    A&amp;ultima SP1000M achieves greater portability,
                                                                    without
                                                                    sacrificing the level of performance found in the
                                                                    original
                                                                    SP1000.</p>
                                                                <a href="#" class="lnk-ty1 text-muted">Find
                                                                    store</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="thumb-text">
                                                            <div class="thumb-title wr">
                                                                <strong class="tmpProductInfo tmpProductInfo_5"
                                                                    style="">SP1000M</strong>
                                                            </div>
                                                            <div class="thumb-description wr">
                                                                <p class="tmpProductInfo tmpProductInfo_5" style="">
                                                                    The
                                                                    A&amp;ultima SP1000M achieves greater portability,
                                                                    without
                                                                    sacrificing the level of performance found in the
                                                                    original
                                                                    SP1000.</p>
                                                                <a href="#" class="lnk-ty1 text-muted">Find
                                                                    store</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-container gallery-thumbs">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid"
                                                            src="https://cdn.astellnkern.com/product/202402/20240228134754_0c741f94-0d4a-4cac-aeca-6adc6c453636.png"
                                                            alt="Thumbnail 1">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid"
                                                            src="https://cdn.astellnkern.com/product/202110/20211025143709_378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                            alt="Thumbnail 2">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid"
                                                            src="https://cdn.astellnkern.com/product/202110/20211025142845_d7296e7a-41c5-4ec0-8812-606ccf9ce606.png"
                                                            alt="Thumbnail 3">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="img-fluid"
                                                            src="https://cdn.astellnkern.com/product/202110/20211025143503_1e8c375c-2d99-438c-a53a-2f0878ab31b9.png"
                                                            alt="Thumbnail 4">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Decor & Appliances -->
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    Add content for Decor & Appliances tab here
                                </div>
>>>>>>> c1d92026f0dbf61c8b322ebc1c607d2e3e4b3397

                                <!-- Computer & Electronics -->
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    Add content for Computer & Electronics tab here
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        {{-- Product Image Section Start  --}}
        <section class="brand-story scrollAni n2">
            <h2>
                We believe <strong>Astell&Kern</strong> is the center of music
            </h2>
            <ul>

<<<<<<< HEAD
        {{-- Home Page Banner Section Start  --}}
        @include('frontend.astell.home_page.banner')
        {{-- Home Page Banner Section End  --}}

=======
                <li>
                    <a href="#">
                        <div class="bg"
                            style=" background-image: url('{{ asset($homepage->featureProductOne->product_image) }}');">
                        </div>

                        <div class="inner bg-shadow">
                            <p class="font-white">{{ $homepage->featureProductOne->product_name }}</p>
                            <strong class="font-white">{{ $homepage->featureProductOne->category->category_name }}</strong>
                        </div>

                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="bg"
                            style="
                          background-image: url('{{ asset($homepage->featureProductTwo->product_image) }}');">
                        </div>
                        <div class="inner bg-shadow">
                            <p class="font-white">{{ $homepage->featureProductTwo->product_name }}</p>
                            <strong class="font-white">{{ $homepage->featureProductTwo->category->category_name }}</strong>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="bg"
                            style="background-image: url('{{ asset($homepage->featureProductThree->product_image) }}');">
                        </div>
                        <div class="inner bg-shadow">
                            <p class="font-white">{{ $homepage->featureProductThree->product_name }}</p>
                            <strong
                                class="font-white">{{ $homepage->featureProductThree->category->category_name }}</strong>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="bg"
                            style="background-image: url('{{ asset($homepage->featureProductFour->product_image) }}');">
                        </div>
                        <div class="inner bg-shadow">
                            <p class="font-white">{{ $homepage->featureProductFour->product_name }}</p>
                            <strong
                                class="font-white">{{ $homepage->featureProductFour->category->category_name }}</strong>
                        </div>
                    </a>
                </li>

            </ul>
        </section>
        {{-- Product Image Section End  --}}
        <section class="experience">
            <div class="container">
                <!-- Slider main container -->
                <div class="swiper-container-bottom">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://cdn.astellnkern.com/main_page_exp/202110/20211012220245_8012b251-6ba9-4951-bde6-a443f75d916f.jpg"
                                    alt="Image 1">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://cdn.astellnkern.com/main_page_exp/202110/20211012220245_0260bcf0-f2c6-4ebb-a72e-d53ae1dfd243.jpg"
                                    alt="Image 1">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://cdn.astellnkern.com/main_page_exp/202301/20230112110038_696b3f1e-c929-42a8-942f-76168164274e.jpg"
                                    alt="Image 1">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://cdn.astellnkern.com/main_page_exp/202110/20211012220245_8012b251-6ba9-4951-bde6-a443f75d916f.jpg"
                                    alt="Image 1">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="https://cdn.astellnkern.com/main_page_exp/202110/20211012220245_8012b251-6ba9-4951-bde6-a443f75d916f.jpg"
                                    alt="Image 1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
>>>>>>> c1d92026f0dbf61c8b322ebc1c607d2e3e4b3397
    </main>
@endsection
