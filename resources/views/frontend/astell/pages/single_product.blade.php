@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')

    {{-- @if (!empty($sproducts)) --}}
    <main class="sub">

        <section class="lnb">

            {{-- <a href="/product/productSub.jsp?productCode1=DAP&amp;productCode2=AnUltima" class="btn-back">A&amp;ultima</a> --}}

            <div class="swiper-container v1 swiper-container-initialized swiper-container-horizontal">
                <ul class="swiper-wrapper" style="transition-duration: 0ms;transform: translate3d(762.711px, 0px, 0px);">
                    <li class="swiper-slide">
                        <a id="moveFeature" class="m1 on">Features</a>
                    </li>
                    <li id="designGroupInfo" class="swiper-slide swiper-slide-prev" style="">
                        <a id="moveDesign" href="javascript:void(0);" class="m2">Design</a>
                    </li>
                    <li class="swiper-slide swiper-slide-active">
                        <a id="moveSpecification" href="javascript:void(0);" class="m3">Specification</a>
                    </li>
                </ul>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

        </section>

        {{-- Product Area Info  --}}
        <section class="sub-visual3 scrollAniTop view">

            <div class="bg">
                <div class="swiper-container">

                    <ul class="swiper-wrapper">


                        <li class="swiper-slide">
                            <img src="{{ isset($product->product_image) ? asset($product->product_image) : asset('upload/no_image.jpg') }}"
                                alt="">
                        </li>

                    </ul>

                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="wrap">

                <p>{{ $product->brand->brand_name }}</p>

                <h1 class="w-25" style="font-size: 50px;width: 31%;"> {{ $product->product_name }} </h1>

                <div class="btn-group tmpProductInfo tmpProductInfo_0 mt-5" style="">
                    <a type="submit" style="cursor:pointer;" class="lnk-ty1 add_to_cart_btn_product_astell"
                        data-product_id="{{ $product->id }}" style="margin-top: 4rem;">Add To Cart</a>
                </div>

                <div class="scroll-icon">
                    Scroll
                    <div class="line"></div>
                </div>

            </div>

        </section>
        {{-- Product Area Info  --}}


        {{-- Row Area Two Start --}}
        @if (
            !empty($sproducts->row_two_image_one) ||
                !empty($sproducts->row_two_image_two) ||
                !empty($sproducts->row_two_image_three) ||
                !empty($sproducts->row_two_image_four))
            <section class="img-group scrollAni n2">
                <ul>
                    <li>
                        <a href="javascript:void(0);" data-type="popMediaOpenN1"
                            style="
                                background-image: url('{{ asset('storage/single_product/' . $sproducts->row_two_image_one) }}');

                            "></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-type="popMediaOpenN2"
                            style="
                                background-image: url('{{ asset('storage/single_product/' . $sproducts->row_two_image_two) }}');
                                ">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-type="popMediaOpenN3"
                            style="
                            background-image: url('{{ asset('storage/single_product/' . $sproducts->row_two_image_three) }}');
                            ">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-type="popMediaOpenN4"
                            style="
                            background-image: url('{{ asset('storage/single_product/' . $sproducts->row_two_image_four) }}');
                            "></a>
                    </li>
                </ul>
            </section>
        @endif
        {{-- Row Area Two End  --}}



        {{-- Row Area Three Start --}}
        <section class="detail-group1 scrollAni n3">
            <div class="wrap">
                <h3>{{ $sproducts->row_three_title }}</h3>
                <p>
                    {{ $sproducts->row_three_description }}
                </p>
            </div>
            <div class="gallery">
                <div class="swiper-container top">
                    <ul class="swiper-wrapper">
                        @foreach ($multiImages as $image)
                            <li class="swiper-slide">
                                <img src="{{ asset($image->multi_image) }}" alt="product" />
                            </li>
                        @endforeach
                    </ul>
                    <div class="swiper-page-group">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-container thumbs">
                    <ul class="swiper-wrapper">
                        @foreach ($multiImages as $image)
                            <li class="swiper-slide">
                                <img src="{{ asset($image->multi_image) }}" alt="product" />
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        {{-- Row Area Three End  --}}

        {{-- Row Area Four Start  --}}
        @if (!empty($sproducts->row_four_image))
            <section class="detail-group10 scrollAni n5">
                <div class="bg"
                    style=" background-image: url('{{ asset('storage/single_product/' . $sproducts->row_four_image) }}');">
                </div>
                <div class="wrap">
                    <div class="inner">
                        <h2>
                            {{ $sproducts->row_four_title }}
                        </h2>
                    </div>
                </div>
            </section>
        @endif
        {{-- Row Area End Start  --}}

        {{-- Row Area Five Start  --}}

        @if (!empty($sproducts->row_five_image))
            <section class="detail-group63 scrollAni n20 view" style="background:#f8f3ea;margin-top:0px;">
                <div class="wrap">
                    <div class="inner">
                        <h3>
                            {{ $sproducts->row_five_title }}
                        </h3>
                        <p>
                            {{ $sproducts->row_five_description }}
                        </p>
                    </div>
                    <div class="img"
                        style="background:url({{ asset('storage/single_product/' . $sproducts->row_five_image) }}) no-repeat left center">
                    </div>
                </div>
            </section>
        @endif
        {{-- Row Area Five End  --}}


        {{-- Row Six Area Start  --}}
        @if (!empty($sproducts->row_six_background_image))
            <section class="detail-group29 scrollAni n4">

                <div class="bg"
                    style="background-image: url('{{ asset('storage/single_product/' . $sproducts->row_six_background_image) }}');">
                </div>

                <div class="wrap">
                    <h2>
                        {{ $sproducts->row_six_title }}
                    </h2>
                    <div class="n4-wrapper">
                        <h3>
                            {{ $sproducts->row_six_sub_title }}
                        </h3>
                        <div class="n4-item">
                            <p>
                                {{ $sproducts->row_six_short_description }}
                            </p>
                            <p>
                                {{ $sproducts->row_six_description }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        {{-- Row Six Area End  --}}


        {{-- Row Area Seven Start  --}}

        @if (!empty($sproducts->row_seven_background_image))
            <section class="detail-group10 scrollAni n5 view">
                <div class="bg"
                    style="background: #111420 url({{ asset('storage/single_product/' . $sproducts->row_seven_background_image) }});">
                </div>
                <div class="wrap">
                    <div class="inner">
                        <h2>
                            {{ $sproducts->row_seven_title }}
                        </h2>
                    </div>
                </div>
            </section>
        @endif
        {{-- Row Area Seven End  --}}


        {{-- Row Eight Area Start  --}}
        @if (!empty($sproducts->row_eight_image))
            <section class="detail-group10 scrollAni n6">
                <div class="wrap">
                    <img src="{{ asset('storage/single_product/' . $sproducts->row_eight_image) }}" />
                </div>
            </section>
        @endif
        {{-- Row Eight Area End  --}}

        {{-- Row Nine Area Start --}}

        @if (!empty($sproducts->row_nine_background_image) || !empty($sproducts->row_nine_image))
            <section class="detail-group10 scrollAni n7 view"
                style="background: #111420 url({{ asset('storage/single_product/' . $sproducts->row_nine_background_image) }}) no-repeat right bottom;">
                <div class="wrap">
                    <h3>
                        {{ $sproducts->row_nine_title }}
                    </h3>
                    <p>
                        {{ $sproducts->row_nine_sub_title }}
                    </p>
                    <a href="../story/story_detail.jsp?storyNo=9&amp;categoryCode=Sound" class="lnk-ty2">Discover more
                    </a>
                    <img src="{{ asset('storage/single_product/' . $sproducts->row_nine_image) }}">
                </div>
            </section>
        @endif
        {{-- Row Nine Area End  --}}




        {{-- Row Area Ten & Eleven Start --}}
        @if (
            !empty($sproducts->row_ten_image_one) ||
                !empty($sproducts->row_ten_image_two) ||
                !empty($sproducts->row_eleven_image))
            <section class="detail-group29 scrollAni n8">
                <div class="wrap">
                    <h3>
                        <span class="text-light">{{ $sproducts->row_ten_title }}</span>
                    </h3>
                    <div class="row">
                        <div class="col-6">
                            <div class="thumbnail">
                                <img style="width: 500px; height: auto;"
                                    src="{{ asset('storage/single_product/' . $sproducts->row_ten_image_one) }}" />
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="thumbnail">
                                <img style="width: 500px; height: auto;"
                                    src="{{ asset('storage/single_product/' . $sproducts->row_ten_image_two) }}" />
                            </div>
                        </div>
                    </div>
                    <p>
                        {{ $sproducts->row_ten_description }}
                    </p>
                    <div class="box">

                        <div class="row">
                            <div class="col-6">
                                <h3>
                                    {{ $sproducts->row_eleven_title }}</h3>
                                <p>

                                    {{ $sproducts->row_eleven_description }}
                                </p>
                            </div>
                            <div class="col-6">
                                <img style="width: 500px; height: auto;"
                                    src="{{ asset('storage/single_product/' . $sproducts->row_eleven_image) }}" />
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endif
        {{-- Row Area Ten & Eleven End  --}}


        {{-- Twelve Area Start  --}}
        <section class="detail-group9 v3 scrollAni n9">
            <div class="wrap">
                <div class="" style="font-size: 20px;">
                    <p>
                        {!! $sproducts->row_twelve_description !!}
                    </p>

                </div>
            </div>
        </section>
        {{-- Tweleve Area End  --}}

        {{-- Thirteen Area Start  --}}
        @if (
            !empty($sproducts->row_thirteen_background_image) ||
                !empty($sproducts->row_thirteen_image_one) ||
                !empty($sproducts->row_thirteen_image_two))
            <section class="detail-group8 v1 scrollAni n10">
                <div class="bg"
                    style="
                        background-image: url('{{ asset('storage/single_product/' . $sproducts->row_thirteen_background_image) }}');
                        ">
                </div>
                <div class="wrap">
                    <h3>{{ $sproducts->row_thirteen_image_one_title }}</h3>
                    <p></p>
                    <img class="img1" src="{{ asset('storage/single_product/' . $sproducts->row_thirteen_image_one) }}"
                        alt="img" />
                    <h3>{{ $sproducts->row_thirteen_image_two_title }}</h3>
                    <p></p>
                    <img class="img2" src="{{ asset('storage/single_product/' . $sproducts->row_thirteen_image_two) }}"
                        alt="img" />
                </div>
            </section>
        @endif
        {{-- Thirteen Area End  --}}

        {{-- Fourteen Area Start  --}}
        @if (!empty($sproducts->row_fourteen_background_image))
            <section class="detail-group3 scrollAni n11">
                <div class="bg"
                    style="background-image: url('{{ asset('storage/single_product/' . $sproducts->row_fourteen_background_image) }}'); background-color: transparent;background-position: center bottom;">
                </div>

                <div class="wrap">
                    <h3>{{ $sproducts->row_fourteen_title }}</h3>
                </div>
            </section>
        @endif
        {{-- Fourteen Area End  --}}

        {{-- 15 Area Start  --}}
        @if (!empty($sproducts->row_fifteen_image))
            <section class="detail-group4 scrollAni n12">
                <div class="bg"></div>
                <div class="wrap">
                    <h3>
                        {{ $sproducts->row_fifteen_title }}
                    </h3>
                    <p>
                        {{ $sproducts->row_fifteen_description }}
                    </p>
                </div>
            </section>
        @endif
        {{-- 15 Area End  --}}

        {{-- 16 Area Start  --}}
        @if (!empty($sproducts->row_sixteen_background_image) || !empty($sproducts->row_sixteen_image))
            <section class="detail-group29 scrollAni n13">
                <div class="bg"
                    style="
                    background-image: url({{ asset('storage/single_product/' . $sproducts->row_sixteen_background_image) }});
                    ">
                </div>
                <div class="wrap">
                    <h3>
                        <span>{{ $sproducts->row_sixteen_title }}</span>
                        {{ $sproducts->row_sixteen_sub_title }}
                    </h3>
                    <p>
                        {{ $sproducts->row_sixteen_description }}
                    </p>
                    <img style="width: 500px; height: auto;"
                        src="{{ asset('storage/single_product/' . $sproducts->row_sixteen_image) }}" alt="detail_5" />
                </div>
            </section>
        @endif
        {{-- 16 Area End  --}}

        {{-- 17 Area Start  --}}


        @if (!empty($sproducts->row_seventeen_image))
            <section class="detail-group19 scrollAni n14" style="background-color: #040802">

                <div class="bg"
                    style="background-image: url({{ asset('storage/single_product/' . $sproducts->row_seventeen_image) }}); background-color: #040802; background-size: cover;">
                </div>

                <div class="wrap">
                    <h3>
                        {{ $sproducts->row_seventeen_title }}
                    </h3>
                </div>
            </section>
        @endif
        {{-- 17 Area End  --}}

        {{-- 18 Area Start  --}}
        @if (!empty($sproducts->row_eighteen_background_image) || !empty($sproducts->row_eighteen_image))
            <section class="detail-group29 scrollAni n17">

                <div class="bg"
                    style="background-image: url('{{ asset('storage/single_product/' . $sproducts->row_eighteen_background_image) }}'); background-size: cover;">
                </div>

                <div class="wrap">
                    <h2>{{ $sproducts->row_eighteen_title }}</h2>
                    <h4 class="text-white">{{ $sproducts->row_eighteen_sub_title }}</h4>
                    <p>
                        {{ $sproducts->row_eighteen_description }}
                    </p>
                    <img class="text-center"
                        src="{{ asset('storage/single_product/' . $sproducts->row_eighteen_image) }}" />
                </div>
            </section>
        @endif
        {{-- 18 Area Start  --}}

        {{-- 19 Area Start  --}}

        @if (
            !empty($sproducts->row_nineteen_image_one) ||
                !empty($sproducts->row_nineteen_image_two) ||
                !empty($sproducts->row_nineteen_image_three))
            <section class="detail-group15 scrollAni n18 view">
                <div class="wrap">
                    <div class="inner">
                        <h3>{{ $sproducts->row_nineteen_title }}</h3>
                        <p>
                            {{ $sproducts->row_nineteen_description }}
                        </p>
                    </div>
                    <div
                        class="swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">
                        <ul class="swiper-wrapper" style="transition-duration: 0ms">
                            <li class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="3"
                                style="width: 450px; transition-duration: 0ms; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                <img src="{{ asset('storage/single_product/' . $sproducts->row_nineteen_image_one) }}">
                                <strong>{{ $sproducts->row_nineteen_image_one_title }}</strong>
                            </li>

                            <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                style="width: 450px; transition-duration: 0ms; opacity: 1; transform: translate3d(-450px, 0px, 0px);">
                                <img src="{{ asset('storage/single_product/' . $sproducts->row_nineteen_image_two) }}">
                                <strong>{{ $sproducts->row_nineteen_image_two_title }}</strong>
                            </li>
                            <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                style="width: 450px;transition-duration: 0ms;opacity: 0;transform: translate3d(-900px, 0px, 0px);">
                                <img src="{{ asset('storage/single_product/' . $sproducts->row_nineteen_image_three) }}">
                                <strong>{{ $sproducts->row_nineteen_image_three_title }}</strong>
                            </li>
                        </ul>
                        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 2"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 3"></span>
                        </div>

                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </section>
        @endif
        {{-- 19 Area End  --}}


        {{-- Feature Area Start  --}}

        @if (
            !empty($sproducts->feature_section_background_image) ||
                !empty($sproducts->feature_one_image) ||
                !empty($sproducts->feature_two_image) ||
                !empty($sproducts->feature_three_image) ||
                !empty($sproducts->feature_four_image) ||
                !empty($sproducts->feature_five_image) ||
                !empty($sproducts->feature_six_image))
            <section class="detail-group8 scrollAni n19">

                <div class="bg"
                    style="background-image: url('{{ asset('storage/single_product/' . $sproducts->feature_section_background_image) }}');">
                </div>

                <div class="wrap">
                    <div class="inner">

                        <div class="row">

                            <div class="col-6">
                                <div class="item">

                                    <img style="width: 80px; height: 80px;"
                                        src="{{ asset('storage/single_product/' . $sproducts->feature_one_image) }}" />

                                    <h4>{{ $sproducts->feature_one_title }}</h4>
                                    <p>
                                        {{ $sproducts->feature_one_description }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="item">
                                    <img style="width: 80px; height: 80px;"
                                        src="{{ asset('storage/single_product/' . $sproducts->feature_two_image) }}" />
                                    <h4>{{ $sproducts->feature_two_title }}</h4>
                                    <p>
                                        {{ $sproducts->feature_two_description }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="item">
                                    <img style="width: 80px; height: 80px;"
                                        src="{{ asset('storage/single_product/' . $sproducts->feature_three_image) }}" />
                                    <h4>{{ $sproducts->feature_three_title }}</h4>
                                    <p>
                                        {{ $sproducts->feature_three_description }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <img style="width: 80px; height: 80px;"
                                        src="{{ asset('storage/single_product/' . $sproducts->feature_four_image) }}" />

                                    <h4>{{ $sproducts->feature_four_title }}</h4>
                                    <p>
                                        {{ $sproducts->feature_four_description }}
                                    </p>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <img style="width: 80px; height: 80px;"
                                        src="{{ asset('storage/single_product/' . $sproducts->feature_five_image) }}" />

                                    <h4>{{ $sproducts->feature_five_title }}</h4>
                                    <p>
                                        {{ $sproducts->feature_five_description }}
                                    </p>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <img style="width: 80px; height: 80px;"
                                        src="{{ asset('storage/single_product/' . $sproducts->feature_six_image) }}" />

                                    <h4>{{ $sproducts->feature_six_title }}</h4>
                                    <p>
                                        {{ $sproducts->feature_six_description }}
                                    </p>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
        @endif
        {{-- Feature Area End  --}}

        {{-- Design Area Start  --}}
        @if (
            !empty($sproducts->design_section_image_one) ||
                !empty($sproducts->design_section_image_two) ||
                !empty($sproducts->design_section_image_three) ||
                !empty($sproducts->design_section_image_four))
            <section class="design-group scrollAni n12">
                <div class="wrap">
                    <h6>{{ $sproducts->design_section_title }}</>
                        <p>
                            {{ $sproducts->design_section_description }}
                        </p>
                </div>
                <div class="slide-group">
                    <div class="list">
                        <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                            <ul class="swiper-wrapper"
                                style="transition-duration: 0ms;transform: translate3d(-1903px, 0px, 0px);">

                                {{-- <li class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                    data-swiper-slide-index="4" style="width: 1903px">
                                    <div class="img"
                                        style="background-image: url('{{ asset('storage/single_product/' . $sproducts->design_section_image_one) }}');">
                                    </div>
                                </li> --}}

                                <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                    style="width: 1903px">
                                    <div class="img"
                                        style="background-image: url('{{ asset('storage/single_product/' . $sproducts->design_section_image_two) }}');">
                                    </div>
                                </li>

                                <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                    style="width: 1903px">
                                    <div class="img"
                                        style="background-image: url('{{ asset('storage/single_product/' . $sproducts->design_section_image_three) }}');">
                                    </div>
                                </li>

                                <li class="swiper-slide" data-swiper-slide-index="2" style="width: 1903px">
                                    <div class="img"
                                        style="background-image: url('{{ asset('storage/single_product/' . $sproducts->design_section_image_four) }}');">
                                    </div>
                                </li>

                                <li class="swiper-slide" data-swiper-slide-index="3" style="width: 1903px">
                                    <div class="img"
                                        style="background-image: url('{{ asset('storage/single_product/' . $sproducts->design_section_image_one) }}');">
                                    </div>
                                </li>

                            </ul>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                    <div class="thumb">
                        <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                            <ul class="swiper-wrapper">

                                {{-- <li class="swiper-slide swiper-slide-active">
                                    <a href="javascript:void(0);" class="active">
                                        <div class="img"
                                            style="background-image: url('{{ asset('storage/single_product/' . $sproducts->design_section_image_one) }}');">
                                        </div>
                                    </a>
                                </li> --}}

                                <li class="swiper-slide swiper-slide-next">
                                    <a href="javascript:void(0);">
                                        <div class="img"
                                            style="background-image: url('{{ asset('storage/single_product/' . $sproducts->design_section_image_two) }}');">
                                        </div>
                                    </a>
                                </li>

                                <li class="swiper-slide">
                                    <a href="javascript:void(0);">
                                        <div class="img"
                                            style="background-image: url('{{ asset('storage/single_product/' . $sproducts->design_section_image_three) }}');">
                                        </div>
                                    </a>
                                </li>

                                <li class="swiper-slide">
                                    <a href="javascript:void(0);">
                                        <div class="img"
                                            style="background-image: url('{{ asset('storage/single_product/' . $sproducts->design_section_image_four) }}');">
                                        </div>
                                    </a>
                                </li>

                                <li class="swiper-slide">
                                    <a href="javascript:void(0);">
                                        <div class="img"
                                            style="background-image: url('{{ asset('storage/single_product/' . $sproducts->design_section_image_one) }}');">
                                        </div>
                                    </a>
                                </li>


                            </ul>
                            <div class="swiper-pagination"></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        {{-- Design Area End  --}}




        <section class="dropdown-list">
            < <div class="wrap">
                <h3>Specification</h3>
                <ul>

                    <li>
                        <a href="javascript:void(0)">Overview</a>
                        <div class="cont">
                            <ul>
                                {!! $product->overview !!}
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="javascript:void(0)">Specification</a>
                        <div class="cont">
                            <ul>
                                {!! $product->specification !!}
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="javascript:void(0)">Short Description</a>
                        <div class="cont">
                            <ul>
                                {!! $product->short_desc !!}
                            </ul>
                        </div>
                    </li>

                </ul>
                </div>
        </section>
    </main>
    {{-- @else
        <p>No Content</p>
    @endif --}}
@endsection

@push('scripts')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>

    {{-- add_to_cart_btn_product --}}
    <script>
        $('.add_to_cart_btn_product_astell').click(function() {

            var product_id = $(this).data('product_id');
            //var qty = $(this).closest('.d-flex').find('.qty-input').val();


            $.ajax({

                type: "POST",
                dataType: 'json',
                url: '/product-store-cart-product',

                data: {
                    product_id: product_id,
                    // qty: qty,
                },

                success: function(data) {

                    $('.cart_icon').removeClass('d-none');

                    miniCart();
                    miniCartRelated();

                    // Start Message

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })

                        // window.location.href = '/template.one.view.cart';

                    } else {

                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        })
                    }

                    // End Message
                }

            })

        })
    </script>
    {{-- add_to_cart_btn_product --}}
@endpush
