@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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

                <div class="btn-group tmpProductInfo tmpProductInfo_0" style="">
                    <a href="#" class="lnk-ty1" style="margin-top: 4rem;">Add To Cart</a>
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
            !empty($sproducts->row_two_image_one) &&
                !empty($sproducts->row_two_image_two) &&
                !empty($sproducts->row_two_image_three) &&
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
        @if (!empty($sproducts->row_five_image))
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
            <section class="detail-group63 scrollAni n20">
                <div class="wrap">
                    <div class="inner">
                        <h3>
                            {{ $sproducts->row_five_title }}
                        </h3>
                        <p>
                            {{ $sproducts->row_five_description }}
                        </p>
                    </div>
                    <div class="img">
                        <img src="{{ asset('storage/single_product/' . $sproducts->row_five_image) }}" alt="">
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
            <section class="detail-group17 scrollAni n19" style="padding: 100px;">

                <div class="bg"
                    style="background-image: url('{{ asset('storage/single_product/' . $sproducts->row_seven_background_image) }}');">
                </div>

                <div class="wrap">
                    <div class="inner">
                        <h3>
                            {{ $sproducts->row_seven_title }}
                        </h3>
                        {{-- <p>
                                {{ $sproducts->row_six_short_description }}
                            </p> --}}
                    </div>
                </div>
            </section>
        @endif
        {{-- Row Area Seven End  --}}

        {{-- <section class="detail-group10 scrollAni n5">
                <div class="bg"
                    style=" background-image: url('https://cdn.astellnkern.com/editor/img/202208/20220831141533_c103b372-b8eb-4e18-8997-8316538ab974.png');">
                </div>
                <div class="wrap">
                    <div class="inner">
                        <h2>
                            Sound,<br />
                            Infinite Possibilities
                        </h2>
                    </div>
                </div>
            </section> --}}

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
        @if (!empty($sproducts->row_nine_background_image))
            <section class="detail-group10 scrollAni n7"
                style="background: #111420 url('{{ asset('storage/single_product/' . $sproducts->row_nine_background_image) }}') no-repeat right bottom;">


                <div class="wrap">
                    <h3>
                        {{ $sproducts->row_nine_title }}
                    </h3>
                    <p>
                        {{ $sproducts->row_nine_sub_title }}
                    </p>
                    {{-- <a href="" class="lnk-ty2">Discover more
                    </a> --}}
                    <img src="{{ asset('storage/single_product/' . $sproducts->row_nine_image) }}" />
                </div>
            </section>
        @endif
        {{-- Row Nine Area End  --}}


        {{-- <section class="detail-group29 scrollAni n8">
                <div class="wrap">
                    <h3>
                        <span>First Use of AKM’s Latest Flagship DAC,</span>
                        Complete Separation of Digital and Analog Signals
                    </h3>
                    <div class="thumbnail">
                        <img
                            src="https://cdn.astellnkern.com/editor/img/202208/20220831141936_c89531df-d2b0-42e9-ab9f-c3576c796519.png" />
                        <img
                            src="https://cdn.astellnkern.com/editor/img/202208/20220831141940_39d15977-49a9-4034-9e6d-09870a73ae08.png" />
                    </div>
                    <p>
                        The SP3000 is a flagship product with the latest technology and
                        uncompromising design. Astell&amp;Kern worked with AKM from the
                        initial development stage to develop the DAC and circuit
                        structure.
                        <br /><br />
                        As a result of the collaboration, the world's first four AK4499EX
                        DACs, AKM's latest flagship, were applied to the SP3000, and the
                        innovative HEXA-Audio Circuitry structure in which two AK4191EQs
                        that process digital signals are applied separately, complete the
                        amazing sound that can only be found from Astell&amp;Kern.
                        <br /><br />
                        Most digital players process digital and analog signals together
                        inside the DAC. However, the SP3000’s advanced HEXA-Audio
                        Circuitry structure reduces the noise of the digital signal input
                        through the AK4191EQ, a separate digital delta-sigma modulator,
                        and the AK4499EX DAC is then designed to process the analog
                        signals separately. By applying this unique design, digital and
                        analog signal processing that is physically separated has been
                        achieved for the first time in a digital audio player, and the
                        overwhelming SNR (Signal-to-Noise Ratio) is maximized, making it
                        possible to experience an incredible level of sound that has never
                        been experienced before.
                    </p>
                    <div class="box">
                        <div>
                            <h3>Silver Plated Shield Can</h3>
                            <p>
                                A shield can is applied to prevent various noise and
                                electromagnetic interference from affecting the audio block.
                                The SP3000 takes it a step further to achieve excellent audio
                                performance and perfect shielding by applying highly
                                conductive, high-purity silver on the existing shield can, and
                                physically separating digital and analog signals.
                            </p>
                        </div>
                        <img
                            src="https://cdn.astellnkern.com/editor/img/202208/20220831141945_1022205a-f5fa-42d8-b482-fd7c436a01c3.jpg" />
                    </div>
                </div>
            </section> --}}

        {{-- Row Area Ten & Eleven Start --}}
        @if (
            !empty($sproducts->row_ten_image_one) &&
                !empty($sproducts->row_ten_image_two) &&
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

                <div class="box">
                    <p>
                        {!! $sproducts->row_twelve_description !!}
                    </p>

                </div>
            </div>
        </section>
        {{-- Tweleve Area End  --}}

        {{-- Thirteen Area Start  --}}
        @if (
            !empty($sproducts->row_thirteen_background_image) &&
                !empty($sproducts->row_thirteen_image_one) &&
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
        @if (!empty($sproducts->row_sixteen_background_image) && !empty($sproducts->row_sixteen_image))
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
        @if (!empty($sproducts->row_eighteen_background_image) && !empty($sproducts->row_eighteen_image))
            <section class="detail-group29 scrollAni n17">

                <div class="bg"
                    style="background-image: url('{{ asset('storage/single_product/' . $sproducts->row_eighteen_background_image) }}'); background-size: cover;">
                </div>

                <div class="wrap">
                    <h3>{{ $sproducts->row_eighteen_title }}</h3>
                    <h5>{{ $sproducts->row_eighteen_sub_title }}</h5>
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
            !empty($sproducts->row_nineteen_image_one) &&
                !empty($sproducts->row_nineteen_image_two) &&
                !empty($sproducts->row_nineteen_image_three))
            <section class="detail-group15 scrollAni n18">
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

                            <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                style="width: 450px;transition-duration: 0ms;opacity: 1;transform: translate3d(-450px, 0px, 0px);">
                                <img src="{{ asset('storage/single_product/' . $sproducts->row_nineteen_image_one) }}" />
                                <strong>{{ $sproducts->row_nineteen_image_one_title }}</strong>
                            </li>

                            <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                style="width: 450px;transition-duration: 0ms;opacity: 1;transform: translate3d(-450px, 0px, 0px);">
                                <img src="{{ asset('storage/single_product/' . $sproducts->row_nineteen_image_two) }}" />
                                <strong>{{ $sproducts->row_nineteen_image_two_title }}</strong>
                            </li>

                            <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                style="width: 450px;transition-duration: 0ms;opacity: 0;transform: translate3d(-900px, 0px, 0px);">
                                <img
                                    src="{{ asset('storage/single_product/' . $sproducts->row_nineteen_image_three) }}" />
                                <strong>{{ $sproducts->row_nineteen_image_three_title }}</strong>
                            </li>



                        </ul>

                        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
                        </div>

                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>

                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 2"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0"
                                role="button" aria-label="Go to slide 4"></span>
                        </div>

                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </section>
        @endif
        {{-- 19 Area End  --}}


        {{-- Feature Area Start  --}}

        @if (
            !empty($sproducts->feature_section_background_image) &&
                !empty($sproducts->feature_one_image) &&
                !empty($sproducts->feature_two_image) &&
                !empty($sproducts->feature_three_image) &&
                !empty($sproducts->feature_four_image) &&
                !empty($sproducts->feature_five_image) &&
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
            !empty($sproducts->design_section_image_one) &&
                !empty($sproducts->design_section_image_two) &&
                !empty($sproducts->design_section_image_three) &&
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
            <div class="wrap">
                <h3>Specification</h3>
                <ul>

                    <li>
                        <a href="javascript:void(0)">Overview</a>
                        <div class="cont">
                            {!! $product->overview !!}
                        </div>
                    </li>

                    <li>
                        <a href="javascript:void(0)">Specification</a>
                        <div class="cont">
                            {!! $product->specification !!}
                        </div>
                    </li>

                    <li>
                        <a href="javascript:void(0)">Short Description</a>
                        <div class="cont">
                            {!! $product->short_desc !!}
                        </div>
                    </li>

                    {{-- <li>
                            <a href="javascript:void(0)">Etc.</a>
                            <div class="cont">
                                <ul>
                                    <li>
                                        <strong> </strong>
                                        <p>
                                            - Audio was NOT muted during the measurement.<br />- The
                                            image/specification may be changed without notice to
                                            improve product performance and quality.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}


                </ul>
            </div>
        </section>
    </main>
    {{-- @else
        <p>No Content</p>
    @endif --}}
@endsection

@push('scripts')

@endpush
