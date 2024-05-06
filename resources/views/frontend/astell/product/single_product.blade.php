@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
    <main class="sub">

        {{-- <section class="lnb">
      <a href="#" class="btn-back">A&amp;ultima</a>
      <div class="swiper-container v1">
        <ul class="swiper-wrapper">
          <li class="swiper-slide">
            <a id="moveFeature" class="m1 on">Features</a>
          </li>
          <li id="designGroupInfo" class="swiper-slide" style="display: none">
            <a id="moveDesign" href="#" class="m2">Design</a>
          </li>
          <li class="swiper-slide">
            <a id="moveSpecification" href="#" class="m3">Specification</a>
          </li>
        </ul>
      </div>
    </section> --}}

        {{-- Product Name Complate --}}
        <section class="sub-visual3 scrollAniTop">
            <div class="bg">
                <div class="swiper-container">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide"
                            style=" background-image: url('{{ isset($product->product_image) ? asset($product->product_image) : asset('upload/no_image.jpg') }}');">
                        </li>
                    </ul>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="wrap">
                {{-- <em>Ultra Portable &amp; Ultra Performance</em> --}}
                <strong> {{ Str::limit($product->product_name) }} </strong>

                <div class="scroll-icon">
                    Scroll
                    <div class="line"></div>
                </div>
            </div>
        </section>
        {{-- Product Name Complate --}}

        {{-- 1 2 3 4 --}}
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
        {{-- <section class="img-group scrollAni n2">
            <ul>
                <li>
                    <a href="#" data-type="popMediaOpenN1"
                        style="
                background-image: url('https://i.ibb.co/tZ9LGb7/20220831133937-7a1695ab-9bc5-4370-b25c-98fcb4bc8a7f.jpg');
              "></a>
                </li>
                <li>
                    <a href="#" data-type="popMediaOpenN2"
                        style="
                background-image: url('https://i.ibb.co/Tg4CQKC/20220831153619-4c1b7237-b1c3-4a3a-9600-11b9e405c544.jpg');
              "></a>
                </li>
                <li>
                    <a href="#" data-type="popMediaOpenN3"
                        style="
                background-image: url('https://i.ibb.co/fksBWwc/20220831133938-562d9738-99df-4d84-be79-8375599a06f7.jpg');
              "></a>
                </li>
                <li>
                    <a href="#" data-type="popMediaOpenN4"
                        style="
                background-image: url('https://i.ibb.co/zQtCFxM/20220831133938-b739bc31-c701-4ffc-a5d9-5d550a1dcdeb.jpg');
              "></a>
                </li>
            </ul>
        </section> --}}

        @if (
            !empty($sproducts->row_two_image_one) &&
                !empty($sproducts->row_two_image_two) &&
                !empty($sproducts->row_two_image_three) &&
                !empty($sproducts->row_two_image_four))
            <div class="popup-media n1" style="display: none">
                <div class="overlay" data-type="popMediaClose"></div>
                <div class="pop-inner">
                    <a href="javascript:void(0);" class="pop-close" data-type="popMediaClose"></a>
                    <div class="cont">
                        <img src="{{ asset('storage/single_product/' . $sproducts->row_two_image_one) }}" alt="product" />
                    </div>
                </div>
            </div>
            <div class="popup-media n2" style="display: none">
                <div class="overlay" data-type="popMediaClose"></div>
                <div class="pop-inner">
                    <a href="javascript:void(0);" class="pop-close" data-type="popMediaClose"></a>
                    <div class="cont">
                        <img src="{{ asset('storage/single_product/' . $sproducts->row_two_image_two) }}" alt="product" />
                    </div>
                </div>
            </div>
            <div class="popup-media n3" style="display: none">
                <div class="overlay" data-type="popMediaClose"></div>
                <div class="pop-inner">
                    <a href="javascript:void(0);" class="pop-close" data-type="popMediaClose"></a>
                    <div class="cont">
                        <img src="{{ asset('storage/single_product/' . $sproducts->row_two_image_three) }}"
                            alt="product" />
                    </div>
                </div>
            </div>
            <div class="popup-media n4" style="display: none">
                <div class="overlay" data-type="popMediaClose"></div>
                <div class="pop-inner">
                    <a href="javascript:void(0);" class="pop-close" data-type="popMediaClose"></a>
                    <div class="cont">
                        <img src="{{ asset('storage/single_product/' . $sproducts->row_two_image_four) }}" alt="product" />
                    </div>
                </div>
            </div>
        @endif

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

        {{-- <section class="detail-group80 scrollAni n3" style="background-color: #e4f2ff">
            <div class="wrap">
                <div class="top-cont">
                    <h3>SP1000 <strong style="color: #004c8e">M</strong></h3>
                    <p>
                        The <strong style="color: #004c8e">"M"</strong> in SP1000M does
                        not stand for a specific word, <br />
                        but rather encompasses directions that the product aims to
                        pursue.
                    </p>
                </div>
                <ul>
                    <li>
                        <strong> <span style="color: #004c8e">M</span>ini </strong>
                        <p>Smaller than the SP1000</p>
                    </li>
                    <li>
                        <strong> <span style="color: #004c8e">M</span>obility </strong>
                        <p>More portable.</p>
                    </li>
                    <li>
                        <strong> <span style="color: #004c8e">M</span>aximum </strong>
                        <p>Produces the highest-quality audio.</p>
                    </li>
                    <li>
                        <strong> <span style="color: #004c8e">M</span>ania </strong>
                        <p>For users who have a mania for original sound.</p>
                    </li>
                    <li>
                        <strong> <span style="color: #004c8e">M</span>ate </strong>
                        <p>Perfect anytime and anywhere.</p>
                    </li>
                    <li>
                        <strong> <span style="color: #004c8e">M</span>oment </strong>
                        <p>Listeners are in the present with music.</p>
                    </li>
                </ul>
            </div>
        </section> --}}

        <!-- 비교테이블 -->

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
                        <h3 class="custom-title">
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

        {{-- <section class="detail-group9 v2 scrollAni n4">
            <div class="wrap">
                <h3>SP1000M vs. SP1000</h3>
                <div class="dv3">
                    <!-- &lt;strong&gt;Bluetooth version comparison&lt;/strong&gt; -->
                    <div>
                        <div class="n1"></div>
                        <div class="n2">SP1000M</div>
                        <div class="n3">SP1000</div>
                    </div>
                    <ul>
                        <li>
                            <span class="n1">CPU</span>
                            <span class="n2"> Exynos 7420 Octa-Core </span>
                            <span class="n3"> Exynos 7420 Octa-Core </span>
                        </li>
                        <li>
                            <span class="n1">LCD</span>
                            <span class="n2"> 4.1inch (720 x 1,280) Touchscreen </span>
                            <span class="n3"> 5inch (720 x 1,280) Touchscreen </span>
                        </li>
                        <li>
                            <span class="n1">DAC</span>
                            <span class="n2">AKM AK4499EQ x2 (Dual DAC)</span>
                            <span class="n3">AKM AK4497EQ x2 (Dual DAC)</span>
                        </li>
                        <li>
                            <span class="n1">Material</span>
                            <span class="n2"> Aluminum </span>
                            <span class="n3"> Stainless Steel, Copper </span>
                        </li>
                        <li>
                            <span class="n1">Memory</span>
                            <span class="n2"> 128GB </span>
                            <span class="n3"> 256GB </span>
                        </li>
                        <li>
                            <span class="n1">Battery</span>
                            <span class="n2"> 3,300mAh / 10hrs </span>
                            <span class="n3"> 3,700mAh / 12hrs </span>
                        </li>
                        <li>
                            <span class="n1">Output Level</span>
                            <span class="n2">Unbalanced 3.0Vrms <br />
                                Balanced 4.2Vrms (Condition No Load)
                            </span>
                            <span class="n3">Unbalanced 2.2Vrms <br />
                                Balanced 3.9Vrms (Condition No Load)
                            </span>
                        </li>
                        <li>
                            <span class="n1">Signal to Noise Ratio</span>
                            <span class="n2">Unbalance 120dB @ 1kHz <br />
                                Balance 123dB @ 1kHz
                            </span>
                            <span class="n3">Unbalance 120dB @ 1kHz <br />
                                Balance 122dB @ 1kHz
                            </span>
                        </li>
                        <li>
                            <span class="n1">THD+N</span>
                            <span class="n2">Unbalance 0.0007% @ 1kHz <br />
                                Balance 0.0006% @ 1kHz
                            </span>
                            <span class="n3">Unbalance 0.0005% @ 1kHz <br />
                                Balance 0.0008% @ 1kHz
                            </span>
                        </li>
                        <li>
                            <span class="n1">Clock Jitter</span>
                            <span class="n2">25ps(typ) </span>
                            <span class="n3">30ps(typ) </span>
                        </li>
                    </ul>
                </div>
                <p>
                    * SNR (Signal to Noise Ratio) As the signal-to-noise ratio
                    increases, the clearer the sound becomes. <br />
                    * THD+N (THD + Noise, Distortion) over the THD + Noise signal
                    rate, less distortion is heard.
                </p>
            </div>
        </section> --}}

        <!-- 비교테이블 -->
        @if (!empty($sproducts->row_seven_background_image))
            <section class="detail-group10 scrollAni n5">
                <div class="bg"
                    style="background-image:  url('{{ asset('storage/single_product/' . $sproducts->row_seven_background_image) }}');">
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
        {{-- <section class="detail-group21 scrollAni n5" style="background-color: #f5f5f5">
            <div class="bg"
                style="
            background-image: url('https://i.ibb.co/N9HG4Jg/20211018201649-6620b42e-1590-4c12-af55-9badfd4b4f1b.png');
            background-color: #f5f5f5;
          ">
            </div>
            <div class="wrap">
                <div class="inner">
                    <h3>Using Open APP Service</h3>
                    <p>
                        The Open APP Service enables the user to install specific APK
                        music streaming apps to the device. <br />
                        Copy the desired APK into the Open Service folder of the product
                        and install the relevant App in the Menu-Service of the product.
                        <br />
                        <br />
                        <a href="#" target="_blank" class="lnk-ty1">Open APP Service</a>
                    </p>
                </div>
            </div>
        </section> --}}
        @if (!empty($sproducts->row_eight_image))
            <section class="detail-group10 scrollAni n6">
                <div class="wrap">
                    <img src="{{ asset('storage/single_product/' . $sproducts->row_eight_image) }}" />
                </div>
            </section>
        @endif
        {{-- <section class="detail-group13 scrollAni n6">
            <div class="wrap">
                <h3>Advanced User Interface</h3>
                <div class="group n1">
                    <img src="https://i.ibb.co/XZsCdQH/file-ima-1.png" alt="Advanced User Interface" />
                    <div class="inner">
                        <p>
                            While the A&amp;ultima SP1000M has the same intuitive menu
                            composition as its predecessor, the SP1000, its user interface
                            has been improved with the optional Virtual Back Key, which
                            enables users to control the device more easily and
                            conveniently. <br />
                            <br />
                            Use the Floating feature to place the Virtual Back Key at a
                            desired location or disable it by simply dragging it to the
                            middle of the screen or turning it off from the Settings menu.
                        </p>
                    </div>
                </div>
            </div>
        </section> --}}

        @if (!empty($sproducts->row_nine_background_image))
            <section class="detail-group10 scrollAni n7"
                style="background: #111420 url('{{ asset('storage/single_product/' . $sproducts->row_nine_background_image) }}') no-repeat right bottom;">
                {{-- row_nine_background_image --}}
                {{-- <style>
                    .detail-group10.n7 {}
                </style> --}}

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

        {{-- <section class="detail-group3 scrollAni n7">
            <div class="bg"></div>
            <div class="wrap">
                <h3>Great Performance for the Ultimate Experience</h3>
                <p>
                    The A&amp;ultima SP1000M is equipped with an octa-core CPU which
                    allows the player to produce the exact musical detail present in
                    the original recording without distortion and provides a quick,
                    lag-free operation. The A&amp;ultima SP1000M features faster
                    booting times, speedy file transfers, lag-free processing and a
                    new intuitive user interface for the ultimate player experience.
                </p>
                <ul>
                    <li>
                        <img src="https://i.ibb.co/4FGRwzF/core5.png" alt="Octa-Core" />
                        <p>Octa-Core</p>
                    </li>
                    <li>
                        <img src="https://i.ibb.co/pvHcBVC/core4.png" alt="Hex-Core" />
                        <p>Hex-Core</p>
                    </li>
                    <li>
                        <img src="https://i.ibb.co/1mYv6yj/core3.png" alt="Quad-Core" />
                        <p>Quad-Core</p>
                    </li>
                    <li>
                        <img src="https://i.ibb.co/Syg078B/core2.png" alt="Dual-Core" />
                        <p>Dual-Core</p>
                    </li>
                    <li>
                        <img src="https://i.ibb.co/sqXxWgy/core1.png" alt="Single-Core" />
                        <p>Single-Core</p>
                    </li>
                </ul>
            </div>
        </section> --}}

        <!-- 다이어그램 -->

        <!-- &lt;section class="detail-group8 v1 scrollAni n7" style="background-image: url('https://www.iriverplus.com/site/ak/eng/img/userdata/sp1000m/img_usq_pattern_lg.png')"&gt; -->

        @if (
            !empty($sproducts->row_ten_image_one) &&
                !empty($sproducts->row_ten_image_two) &&
                !empty($sproducts->row_eleven_image))
            <section class="detail-group29 scrollAni n8">
                <div class="wrap">
                    <h3>
                        <span>{{ $sproducts->row_ten_title }}</span>
                    </h3>
                    <div class="thumbnail">
                        <img src="{{ asset('storage/single_product/' . $sproducts->row_ten_image_one) }}" />
                        <img src="{{ asset('storage/single_product/' . $sproducts->row_ten_image_two) }}" />
                    </div>
                    <p>
                        {{ $sproducts->row_ten_description }}
                    </p>
                    <div class="box">
                        <div>
                            <h3>
                                {{ $sproducts->row_eleven_title }}</h3>
                            <p>

                                {{ $sproducts->row_eleven_description }}
                            </p>
                        </div>
                        <img src="{{ asset('storage/single_product/' . $sproducts->row_eleven_image) }}" />
                    </div>
                </div>
            </section>
        @endif

        {{-- <section class="detail-group8 v1 scrollAni n8" style="background-color: #000000">
            <div class="wrap">
                <h3>Ultimate Sound Quality</h3>
                <p>
                    The latest AK4497EQ dual-DAC design and the upgraded CPU in the
                    A&amp;ultima SP1000M allows for accurate playback of native
                    32bit/384kHz audio with no compromise on sound quality. The music
                    is played back, bit-for-bit, just as the artist and engineer
                    intended for it to be heard. <br />
                    <br />
                    The A&amp;ultima SP1000M also supports native bit-to-bit DSD
                    playback up to 11.2MHz for the best sound possible.
                </p>
                <p>32-bit bit-to-bit Playback by the SP1000M</p>
                <img src="https://i.ibb.co/8XZcrpq/20211022135918-cf122857-6847-4aa7-9a56-d14fb2a6290d.png" alt="img"
                    style="max-width: 720px" />
                <p>32-bit Playback by Other Products</p>
                <img src="https://i.ibb.co/tYpBGPW/20211022135941-47066dc1-7a48-4100-9adc-3217c80e684e.png" alt="img"
                    style="max-width: 720px" />
            </div>
        </section> --}}

        <!-- 다이어그램 -->
        <section class="detail-group9 v3 scrollAni n9">
            {{-- <div class="wrap">
                <div class="box"> --}}
            {!! $sproducts->row_twelve_description !!}
            {{-- </div> --}}
        </section>

        {{-- <section class="detail-group6 scrollAni n9">
            <!--애니메이션 추가입니다. scrollAni n8-->
            <h3>Faster Charging, Quicker File Transfer</h3>
            <ul class="n1">
                <li>
                    <img src="https://i.ibb.co/jHycRb3/i-power.png" alt="2hours" />
                    <strong>3hours</strong>
                    <p>Charging about</p>
                </li>
                <li>
                    <img src="https://i.ibb.co/xgY6FNg/i-login.png" alt="12hours" />
                    <strong>10hours</strong>
                    <p>Playing back up to</p>
                </li>
                <li>
                    <img src="https://i.ibb.co/vDBVgRh/i-wifi.png" alt="10Gbps" />
                    <strong>10Gbps</strong>
                    <p>file transfer speeds up to</p>
                </li>
            </ul>
            <div class="n2">
                <p>
                    Next generation USB Type-C support allows file transfer speeds up
                    to 10Gbps and supports both data transfer and charging from the
                    same cable. USB 3.0 protocol transfers data twice as fast when
                    compared to other Astell&amp;Kern players. Charging with a fast
                    charger (at 9V/1.67A) takes only two hours and allows up to 12
                    hours of continuous playback.
                </p>
                <ul>
                    <li>
                        The maximum 10-hour continuous play is based on 16-bit/44 kHz,
                        FLAC file format, screen off, 75 of volume playback.
                    </li>
                    <li>
                        Fast charger (9V/1.67A) and general Charger (5V/2A) are not
                        included in the package.
                    </li>
                </ul>
            </div>
        </section> --}}

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

        {{-- <section class="detail-group7 scrollAni n10">
            <ul>
                <li>
                    <img src="https://i.ibb.co/XW2PVLy/mqa-logo.png" alt="mqa_logo" />
                    <p>
                        MQA (Master Quality Authenticated) is an award-winning British
                        technology that delivers the sound of the original master
                        recording. <br />
                        The master MQA file is fully authenticated and is small enough
                        to stream or download. Visit mqa.co.uk for more information.
                        <br />
                        Astell&amp;Kern SP1000M includes MQA technology, which enables
                        you to play back MQA audio files and streams, <br />
                        delivering the sound of the original master recording. <br />
                        <br />
                        The MQA logo is a trade mark of MQA Limited. © MQA Limited 2018
                        <br />
                    </p>
                    <a href="https://i.ibb.co/19dzt63/mqa-logo.png" target="_blank" class="lnk-ty1">Discover more</a>
                </li>
                <li>
                    <img src="https://i.ibb.co/cxTrj3q/roonready-logo.png" alt="roon ready_logo" />
                    <p>
                        Roon Ready network players from our partners have Roon’s
                        high-resolution streaming technology built right in. <br />
                        They combine simple setup, daily reliability, and support for
                        the highest level of digital audio performance in the industry.
                        <br />
                        Every Roon Ready player is certified by Roon to guarantee the
                        same stellar experience, regardless of its manufacturer, its
                        price, or its features.
                    </p>
                    <a href="#" target="_blank" class="lnk-ty1">Discover more</a>
                </li>
            </ul>
        </section> --}}

        @if (!empty($sproducts->row_fourteen_background_image))
            <section class="detail-group3 scrollAni n11">
                <div class="bg"
                    style="
                    background-image:  url('{{ asset('storage/single_product/' . $sproducts->row_fourteen_background_image) }}');
                    background-color: transparent;
                    background-position: center bottom;
                    ">
                </div>
                <div class="wrap">
                    <h3>{{ $sproducts->row_fourteen_title }}</h3>
                </div>
            </section>
        @endif

        {{-- <section class="design-group scrollAni n11">
            <div class="wrap">
                <h3>DESIGN</h3>
                <p>
                    Inspiration for the design of the SP1000M comes from Iirregularly
                    patterned natural stones combined with Lapis Lazuli, one of the
                    oldest of all gems, createsto create the SP1000M's color - Lapis
                    Blue. <br />
                    Lapis Lazuli, whose history stretches back to 5,000 BC, was a
                    precious gem used in Mesopotamia and Egypt during ancient times.
                    <br />
                    <br />
                    The SP1000M's vivid blue represents youth, enthusiasm and power.
                    The darker blue highlights appear at different angles to add
                    elegance to the A&amp;ultima product. <br />
                    The dakota leather used in the SP1000M bundle leather case is a
                    premium vegetable leather made from an Italian tanner named 'Ra
                    Perla Azura'. <br />
                    It's a manufacture of Italian and French origin. <br />
                    'La Perla Azura' was founded in 1967 and has a long history over
                    50 years. <br />
                    It is located in 'Santa Croce sull´Arno' which is only high-end
                    leather production district in Italy. <br />
                    The SP1000M Onyx Black case uses Beta leather from NUOVA ALBORA.
                    Beta leather is a high quality leather which contains a large
                    amount of oil as a whole, strong resiliency of scratches, and can
                    sense changes with the passage of time. <br />
                </p>
            </div>
            <div class="slide-group">
                <div class="list">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="img"
                                    style="
                      background-image: url('https://i.ibb.co/qyxpLks/dap-list-img1.png');
                    ">
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"
                                    style="
                      background-image: url('https://i.ibb.co/BcHb4kL/dap-list-img2.png');
                    ">
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"
                                    style="
                      background-image: url('https://i.ibb.co/yStfK1k/dap-list-img3.png');
                    ">
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"
                                    style="
                      background-image: url('https://i.ibb.co/yStfK1k/dap-list-img3.png');
                    ">
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"
                                    style="
                      background-image: url('https://i.ibb.co/yStfK1k/dap-list-img3.png');
                    ">
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="img"
                                    style="
                      background-image: url('https://i.ibb.co/W5rzv34/dap-list-img6.png');
                    ">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="thumb">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <a href="#" class="active">
                                    <div class="img"
                                        style="
                        background-image: url('https://i.ibb.co/qyxpLks/dap-list-img1.png');
                      ">
                                    </div>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#">
                                    <div class="img"
                                        style="
                        background-image: url('https://i.ibb.co/BcHb4kL/dap-list-img2.png');
                      ">
                                    </div>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#">
                                    <div class="img"
                                        style="
                        background-image: url('https://i.ibb.co/yStfK1k/dap-list-img3.png');
                      ">
                                    </div>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#">
                                    <div class="img"
                                        style="
                        background-image: url('https://i.ibb.co/yStfK1k/dap-list-img3.png');
                      ">
                                    </div>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#">
                                    <div class="img"
                                        style="
                        background-image: url('https://i.ibb.co/yStfK1k/dap-list-img3.png');
                      ">
                                    </div>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="#">
                                    <div class="img"
                                        style="
                        background-image: url('https://i.ibb.co/W5rzv34/dap-list-img6.png');
                      ">
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <style>
            .detail-group4.n12 .bg {
                background: transparent url('{{ asset(' storage/single_product/' . $product->row_fifteen_image) }}') center bottom -20px no-repeat;
            }
        </style> --}}

        @if (!empty($sproducts->row_fifteen_image))
            <section class="detail-group4 scrollAni n12">
                <div class="bg">{{ $sproducts->row_fifteen_title }}</div>
                <div class="wrap">
                    <h3>
                        {{ $sproducts->row_fifteen_sub_title }}
                    </h3>
                    <p>
                        {{ $sproducts->row_fifteen_description }}
                </div>
            </section>
        @endif

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
                    <img src="{{ asset('storage/single_product/' . $sproducts->row_sixteen_image) }}" alt="detail_5" />
                </div>
            </section>
        @endif

        @if (!empty($sproducts->row_seventeen_image))
            <section class="detail-group19 scrollAni n14" style="background-color: #040802">
                <div class="bg"
                    style="
                    background-image: url({{ asset('storage/single_product/' . $sproducts->row_seventeen_image) }});
                    background-color: #040802;
                    background-size: cover;
                    ">
                </div>

                <div class="wrap">
                    <h3>
                        {{ $sproducts->row_seventeen_title }}
                    </h3>
                </div>
            </section>
        @endif

        {{-- End 17 --}}

        


        <!-- 디자인 -->
        <section class="dropdown-list">
            <div class="wrap">
                <h3>Product Details</h3>
                <ul>
                    <li>
                        <a href="javascript:void(0)">Short Description</a>
                        <div class="cont">
                            <ul>
                                {!! $product->short_desc !!}
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0)">OverView</a>
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
                </ul>
            </div>
        </section>

        <div class="popup-media v1" style="display: none">
            <div class="overlay" data-type="popMediaClose"></div>
            <div class="pop-inner">
                <a href="#" class="pop-close" data-type="popMediaClose"></a>
                <div class="cont">
                    <img id="imgIframe" src="#" alt="" />
                </div>
            </div>
        </div>
        <div class="popup-media v2" style="display: none">
            <div class="overlay" data-type="popMediaClose"></div>
            <div class="pop-inner">
                <a href="#" class="pop-close" data-type="popMediaClose"></a>
                <div class="cont">
                    <div class="youtube-area">
                        <iframe id="videoIframe" width="100%" height="100%" src="#"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
