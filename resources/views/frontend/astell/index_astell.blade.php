@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
    {{-- @include('frontend.astell.home_page.home_video')

    @include('frontend.astell.home_page.image_banner')

    @include('frontend.astell.home_page.category')

    @include('frontend.astell.home_page.banner') --}}


    <section class="key-visual">
        <div class="swiper-container">
            <ul class="swiper-wrapper">
                <li class="swiper-slide" data-slide-type="vdo">
                    <video class="video-js" muted controls autoplay playsinline>
                        <source
                            src="https://cdn.astellnkern.com/main_page_key_visual/202209/20220913110058_c4206e91-5c98-4f5b-81d3-7cfd0b81fe29.mp4"
                            type="video/mp4" />
                    </video>
                    <div class="txt">
                        <strong style="color: #ffffff">DIFFERENCE</strong>
                        <p style="color: #ffffff">In Sound Quality</p>
                    </div>
                </li>
            </ul>
            <div class="swiper-pagination"></div>
            <div class="swiper-progress-bar">
                <div class="progress"></div>
            </div>
        </div>
    </section>

    <section class="product-banner">
        <p class="top-txt">
            Ultimate High Fidelity Sound System, <strong>Astell&Kern</strong>
        </p>
        <div class="swiper-container">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <div class="bg"
                        style="
                  background-image: url('main-images/main_page_product/202209/20220913110059_b236c0fd-5f95-4507-8138-ed6bb58c6817.jpg');
                ">
                    </div>
                    <div class="inner" data-swiper-parallax="-100%">
                        <div class="flex-center">
                            <div>
                                <p class="txt1">Luxury Meets Innovation</p>
                                <p class="txt2">SP3000</p>
                                <p class="txt3">
                                    The A&amp;ultima SP3000 is the flagship product that is
                                    the essence of everything learned and engineered over
                                    the last 10+ years of digital music processing.
                                </p>
                                <a href="product/product_detailbcae.html?productNo=138" class="btn-line-ty1">
                                    <span>Discover more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="bg"
                        style="
                  background-image: url('main-images/main_page_product/202305/20230510152756_711b599f-cb77-4ee6-b08c-3cd9fb8fe715.jpg');
                ">
                    </div>
                    <div class="inner" data-swiper-parallax="-100%">
                        <div class="flex-center">
                            <div>
                                <p class="txt1">The Future of Analog Sound</p>
                                <p class="txt2">SE300</p>
                                <p class="txt3">
                                    SE300, the fourth model in the A&amp;futura, represents
                                    Astell&amp;Kern&rsquo;s ceaseless efforts for
                                    innovation, is equipped with an ultra-refined R-2R DAC,
                                    Class A/AB dual amps.
                                </p>
                                <a href="product/product_detail4db7.html?productNo=146" class="btn-line-ty1">
                                    <span>Discover more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="bg"
                        style="
                  background-image: url('https://i.ibb.co/2tZs2Jk/20230510152930-c48737cd-1f43-47e8-bc42-58735b2388e7.jpg');
                ">
                    </div>
                    <div class="inner" data-swiper-parallax="-100%">
                        <div class="flex-center">
                            <div>
                                <p class="txt1">Precision meets emotion</p>
                                <p class="txt2">AURA</p>
                                <p class="txt3">
                                    Expertly crafted in Germany, AURA blends innovation,
                                    sophisticated styling and cutting-edge technology to
                                    create a listening experience like no other.
                                </p>
                                <a href="product/product_detail3dd7.html?productNo=147" class="btn-line-ty1">
                                    <span>Discover more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="bg"
                        style="
                  background-image: url('https://i.ibb.co/dg05SJ3/20230406110446-ad574542-d4ac-4b47-918a-7f5b04fcc584.jpg');
                ">
                    </div>
                    <div class="inner" data-swiper-parallax="-100%">
                        <div class="flex-center">
                            <div>
                                <p class="txt1">Hi-Fi Sound on-the-go</p>
                                <p class="txt2">SR35</p>
                                <p class="txt3">
                                    The A&amp;norma SR35 delivers the essence of true Hi-Fi
                                    sound with its small and light weight and stunning audio
                                    specifications such as Astell&amp;Kern's premium
                                    amplifier circuit and Quad DAC.
                                </p>
                                <a href="product/product_detail40a2.html?productNo=143" class="btn-line-ty1">
                                    <span>Discover more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="bg"
                        style="
                  background-image: url('https://i.ibb.co/dg05SJ3/20230406110446-ad574542-d4ac-4b47-918a-7f5b04fcc584.jpg');
                ">
                    </div>
                    <div class="inner" data-swiper-parallax="-100%">
                        <div class="flex-center">
                            <div>
                                <p class="txt1">Advanced Quad-brid IEM</p>
                                <p class="txt2">AK ZERO2</p>
                                <p class="txt3">
                                    The AK ZERO2 is an IEM that features a 'Quad-brid'
                                    design centered around an advanced driver array and
                                    Super Low Noise Cross-Over Network perfectly tuned.
                                </p>
                                <a href="product/product_detail7d28.html?productNo=144" class="btn-line-ty1">
                                    <span>Discover more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="bg"
                        style="
                  background-image: url('https://i.ibb.co/dg05SJ3/20230406110446-ad574542-d4ac-4b47-918a-7f5b04fcc584.jpg');
                ">
                    </div>
                    <div class="inner" data-swiper-parallax="-100%">
                        <div class="flex-center">
                            <div>
                                <p class="txt1">Engineered to Powerful Perfection</p>
                                <p class="txt2">KANN MAX</p>
                                <p class="txt3">
                                    The 4th product of KANN series, KANN MAX builds on the
                                    advantages of the KANN series with ultra-high output,
                                    fullest sound of Quad-DAC and noise-free Circuit Design.
                                </p>
                                <a href="product/product_detail8fee.html?productNo=133" class="btn-line-ty1">
                                    <span>Discover more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="swiper-button-prev">
                <span class="prev-info"></span>
            </div>
            <div class="swiper-button-next">
                <span class="next-info"></span>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-progress-bar">
                <div class="progress"></div>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="tab-ty">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="javascript:void(0);" class="n1 on nav-link active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                        aria-selected="true">DAP</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="javascript:void(0);" class="n2 nav-link" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">Headphones</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="javascript:void(0);" class="n3 nav-link" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                        aria-selected="false">Home Audio</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="javascript:void(0);" class="n4 nav-link" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                        aria-selected="false">Accessories</a>
                </li>
            </ul>
        </div>
        <div class="tab-content " id="myTabContent">
            <div class="tab-pane fade show active tab-cont n1 on" id="home" role="tabpanel"
                aria-labelledby="home-tab">.
                <div class="wrap">
                    <div class="wl">
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="sp3000_list_1.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="sp2000t_01.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="sp2000_g.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="sp1000_b.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="sp1000m_blue.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="sp1000m_g.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="se300_list.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="se180.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="se200.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="se100.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="se100_m.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="SR35LIST (1).png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="sr25mk2 (1).png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="sr25_s.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="sr15.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="kannmax_list.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="kannalpha_b_01.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="kanncube.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="kann_b.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="sa700_s.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak380_t.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak380_c.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="javascript:void(0);"product_detail.html>
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak380_ss.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak320.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak300.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak240.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak240ss.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak240_blue.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak120_2.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak100_2.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak70mk2.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak70.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="akjr.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak120.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak120t.png" />
                                    </a>
                                </li>
                                <li class="swiper-slide">
                                    <a href="product_detail.html">
                                        <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                            alt="ak100.png" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="wr">
                        <strong class="tmpProductInfo tmpProductInfo_0">SP3000</strong>
                        <p class="tmpProductInfo tmpProductInfo_0">
                            The A&amp;ultima SP3000 is the flagship product that is the
                            essence of everything learned and engineered over the last 10+
                            years of digital music processing.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_0" style="display: none">
                            <a href="#" class="lnk-ty0">Find store</a>
                        </div>

                        <strong class="tmpProductInfo tmpProductInfo_1" style="display: none">SP2000T</strong>
                        <p class="tmpProductInfo tmpProductInfo_1" style="display: none">
                            The SP2000T combines the OP AMP configuration of our SP2000
                            with a nostalgic vacuum TUBE AMP, adding a vintage feel to the
                            portable player.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_1" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>=
                        </div>

                        <strong class="tmpProductInfo tmpProductInfo_2" style="display: none">SP2000</strong>
                        <p class="tmpProductInfo tmpProductInfo_2" style="display: none">
                            A&amp;ultima SP2000 is the third player released in the
                            A&amp;ultima lineup. A&amp;ultima SP2000 features newly
                            developed audio circuitry and amplifier design.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_2" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_3" style="display: none">SP1000</strong>
                        <p class="tmpProductInfo tmpProductInfo_3" style="display: none">
                            The A&amp;ultima SP1000 is a one-of-a-kind, high-end, powerful
                            flagship high resolution music player equipped with the latest
                            advanced features.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_3" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_4" style="display: none">SP1000M</strong>
                        <p class="tmpProductInfo tmpProductInfo_4" style="display: none">
                            The A&amp;ultima SP1000M achieves greater portability, without
                            sacrificing the level of performance found in the original
                            SP1000.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_4" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_5" style="display: none">SP1000M GOLD</strong>
                        <p class="tmpProductInfo tmpProductInfo_5" style="display: none">
                            A&amp;ultima's second product, SP1000M, which was born with no
                            compromise as to sound, gave a new value to Gold.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_5" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_6" style="display: none">SE300</strong>
                        <p class="tmpProductInfo tmpProductInfo_6" style="display: none">
                            SE300, the fourth model in the A&amp;futura, represents
                            Astell&amp;Kern&rsquo;s ceaseless efforts for innovation, is
                            equipped with an ultra-refined R-2R DAC, Class A/AB dual amps.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_6" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_7" style="display: none">SE180</strong>
                        <p class="tmpProductInfo tmpProductInfo_7" style="display: none">
                            The SE180, continues the trend of exciting innovation for
                            Astell&amp;Kern products, while providing the uncompromised
                            sound quality Astell&amp;Kern is famous for.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_7" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_8" style="display: none">SE200</strong>
                        <p class="tmpProductInfo tmpProductInfo_8" style="display: none">
                            The SE200 is the second model from the Astell&amp;Kern
                            A&amp;futura premium line of Digital Audio Players.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_8" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_9" style="display: none">SE100</strong>
                        <p class="tmpProductInfo tmpProductInfo_9" style="display: none">
                            The SE100, the first model of A&amp;futura, is designed for
                            you to feel the quality of premium Hi-Fi from the moment you
                            hold it.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_9" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_10" style="display: none">SE100 M.Chat</strong>
                        <p class="tmpProductInfo tmpProductInfo_10" style="display: none">
                            M.Chat (also known as Monsieur Chat and Mr Chat) is the name
                            of a graffiti cat that originally appeared in Orl&eacute;ans,
                            France in 1997.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_10" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_11" style="display: none">SR35</strong>
                        <p class="tmpProductInfo tmpProductInfo_11" style="display: none">
                            The A&amp;norma SR35 delivers the essence of true Hi-Fi sound
                            with its small and light weight and stunning audio
                            specifications such as Astell&amp;Kern's premium amplifier
                            circuit and Quad DAC.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_11" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_12" style="display: none">SR25 MKII</strong>
                        <p class="tmpProductInfo tmpProductInfo_12" style="display: none">
                            True to the core values of Astell&amp;Kern, high fidelity
                            sound lies at the heart of the SR25 MKII, delivering
                            exceptional audio performance to a diverse range of music
                            lovers.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_12" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_13" style="display: none">SR25</strong>
                        <p class="tmpProductInfo tmpProductInfo_13" style="display: none">
                            The SR25 is the second model in the Astell&amp;Kern
                            A&amp;norma standard line.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_13" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_14" style="display: none">SR15</strong>
                        <p class="tmpProductInfo tmpProductInfo_14" style="display: none">
                            The SR15, the first model of A&amp;norma, is the beginning
                            point of the Hi-Fi Audio experience that allows you to enjoy
                            the philosophy and technologies of Astell&amp;Kern.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_14" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_15" style="display: none">KANN MAX</strong>
                        <p class="tmpProductInfo tmpProductInfo_15" style="display: none">
                            The 4th product of KANN series, KANN MAX builds on the
                            advantages of the KANN series with ultra-high output, fullest
                            sound of Quad-DAC and noise-free Circuit Design.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_15" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_16" style="display: none">KANN ALPHA</strong>
                        <p class="tmpProductInfo tmpProductInfo_16" style="display: none">
                            KANN ALPHA is the third model from the KANN line, which
                            focuses on high fidelity with powerful output and low noise.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_16" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_17" style="display: none">KANN CUBE</strong>
                        <p class="tmpProductInfo tmpProductInfo_17" style="display: none">
                            KANN CUBE is the second model from the KANN line, which
                            focuses on high fidelity with powerful output and low noise.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_17" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_18" style="display: none">KANN</strong>
                        <p class="tmpProductInfo tmpProductInfo_18" style="display: none">
                            Astell&amp;Kern's KANN provides a new power standard for
                            mobile music performance.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_18" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_19" style="display: none">SA700</strong>
                        <p class="tmpProductInfo tmpProductInfo_19" style="display: none">
                            &quot;Past Meets Present&quot; The SA700 is a product where
                            past emotions and current technology meet.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_19" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_20" style="display: none">AK380</strong>
                        <p class="tmpProductInfo tmpProductInfo_20" style="display: none">
                            The new AK380 offers the most authentic sound from any digital
                            music format with enhanced features that are sought-after by
                            Pro-Audio.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_20" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_21" style="display: none">AK380 Copper</strong>
                        <p class="tmpProductInfo tmpProductInfo_21" style="display: none">
                            Witness the birth of a new instrument - The AK380 Copper
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_21" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_22" style="display: none">AK380 Stainless Steel
                            Package</strong>
                        <p class="tmpProductInfo tmpProductInfo_22" style="display: none">
                            Another new AK380 Stainless Steel Package is introduced.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_22" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_23" style="display: none">AK320</strong>
                        <p class="tmpProductInfo tmpProductInfo_23" style="display: none">
                            We wanted even more people to experience the AK320 and its
                            ability to deliver the original sound as intended.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_23" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_24" style="display: none">AK300</strong>
                        <p class="tmpProductInfo tmpProductInfo_24" style="display: none">
                            While succeeding the state-of-the-art DAC and scalability as
                            applied to the AK380 and AK320, the latest model has improved
                            accessibility by being priced at a reasonable level.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_24" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_25" style="display: none">AK240</strong>
                        <p class="tmpProductInfo tmpProductInfo_25" style="display: none">
                            Now with the AK240, we can dare say that we have gotten
                            &ldquo;that much closer&rdquo; to the sound quality of the
                            original recording.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_25" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_26" style="display: none">AK240SS</strong>
                        <p class="tmpProductInfo tmpProductInfo_26" style="display: none">
                            We at Astell&amp;Kern have created the most special version of
                            the AK240 to date using stainless steel to bring you only the
                            best.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_26" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_27" style="display: none">AK240 BLUENOTE</strong>
                        <p class="tmpProductInfo tmpProductInfo_27" style="display: none">
                            BLUENOTE Plays 24bit Music. Astell&amp;Kern Blue Note 75th
                            Anniversary Package: Limited Edition.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_27" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_28" style="display: none">AK120 II</strong>
                        <p class="tmpProductInfo tmpProductInfo_28" style="display: none">
                            The AK120 2nd Generation allows you to experience the highest
                            sound quality by directly inheriting the sound design
                            structure implemented in the AK240.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_28" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_29" style="display: none">AK100 II</strong>
                        <p class="tmpProductInfo tmpProductInfo_29" style="display: none">
                            We present &quot;A New Standard in Listening to Music&quot;
                            with the AK100 2nd Generation.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_29" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_30" style="display: none">AK70 MK II</strong>
                        <p class="tmpProductInfo tmpProductInfo_30" style="display: none">
                            Back in black and ready to impress! The AK70 MK&#8545; has a
                            whole lot to offer with its advanced features.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_30" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_31" style="display: none">AK70</strong>
                        <p class="tmpProductInfo tmpProductInfo_31" style="display: none">
                            The AK70's DAC, based on market-proven CS4398 chips of Cirrus
                            Logic, has been used for years in Hi-Fi audios and the
                            second-generation Astell&amp;Kern devices.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_31" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_32" style="display: none">AK Jr</strong>
                        <p class="tmpProductInfo tmpProductInfo_32" style="display: none">
                            The AK Jr project gives everyone the opportunity to
                            comfortably listen to high resolution audio, anytime and
                            anywhere.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_32" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_33" style="display: none">AK120</strong>
                        <p class="tmpProductInfo tmpProductInfo_33" style="display: none">
                            A Refined Design with an Analog Feel
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_33" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_34" style="display: none">AK120 TITAN</strong>
                        <p class="tmpProductInfo tmpProductInfo_34" style="display: none">
                            Scratches are no longer a concern, and the AK120 TITAN retains
                            its original shape over time.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_34" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_35" style="display: none">AK100</strong>
                        <p class="tmpProductInfo tmpProductInfo_35" style="display: none">
                            A Refined Design with an Analog Feel
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_35" style="display: none">
                            <a href="#" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <div class="list">
                            <div class="swiper-container">
                                <ul class="swiper-wrapper">
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);" class="active">
                                            <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                                alt="sp3000_list_1.png" />
                                            <span>SP3000</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="sp2000t_01.png" />
                                            <span>SP2000T</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="sp2000_g.png" />
                                            <span>SP2000</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="sp1000_b.png" />
                                            <span>SP1000</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="sp1000m_blue.png" />
                                            <span>SP1000M</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="sp1000m_g.png" />
                                            <span>SP1000M GOLD</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="se300_list.png" />
                                            <span>SE300</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="se180.png" />
                                            <span>SE180</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="se200.png" />
                                            <span>SE200</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="se100.png" />
                                            <span>SE100</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="se100_m.png" />
                                            <span>SE100 M.Chat</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="SR35LIST (1).png" />
                                            <span>SR35</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="sr25mk2 (1).png" />
                                            <span>SR25 MKII</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="sr25_s.png" />
                                            <span>SR25</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="sr15.png" />
                                            <span>SR15</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="kannmax_list.png" />
                                            <span>KANN MAX</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="kannalpha_b_01.png" />
                                            <span>KANN ALPHA</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="kanncube.png" />
                                            <span>KANN CUBE</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="kann_b.png" />
                                            <span>KANN</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="sa700_s.png" />
                                            <span>SA700</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak380_t.png" />
                                            <span>AK380</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak380_c.png" />
                                            <span>AK380 Copper</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak380_ss.png" />
                                            <span>AK380 Stainless Steel Package</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak320.png" />
                                            <span>AK320</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak300.png" />
                                            <span>AK300</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak240.png" />
                                            <span>AK240</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak240ss.png" />
                                            <span>AK240SS</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak240_blue.png" />
                                            <span>AK240 BLUENOTE</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak120_2.png" />
                                            <span>AK120 II</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak100_2.png" />
                                            <span>AK100 II</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak70mk2.png" />
                                            <span>AK70 MK II</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak70.png" />
                                            <span>AK70</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="akjr.png" />
                                            <span>AK Jr</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak120.png" />
                                            <span>AK120</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak120t.png" />
                                            <span>AK120 TITAN</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="javascript:void(0);">
                                            <img src="https://i.ibb.co/7SGrNtm/20211025143709-378311f6-21cb-428d-ab9c-0cfd53627ed6.png"
                                                alt="ak100.png" />
                                            <span>AK100</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="swiper-slider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade tab-cont n2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="wrap">
                    <div class="wl">
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKT5P2_main_1.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="earphone_AKT1p_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="earphone_AKT5p_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="aura_list.jpg" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="zero2 (1).png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Odyssey_list.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="pathfinder.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="uw100_list.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="akzero1_02.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="solarisx_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="ak_t9ie_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="layla_aion_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="diana_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="billie_jean_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="michelle_limited_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Michelle_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKT8iE_2_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Layla_2_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Roxanne_2_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Angie_2_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Rosie_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKT8iE_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Layla_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="Angie_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKR03_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKR02_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                        alt="AKR01_01.png" />
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="wr">
                        <strong class="tmpProductInfo tmpProductInfo_0">AK T5p 2nd Generation</strong>
                        <p class="tmpProductInfo tmpProductInfo_0">
                            AK T5p 2nd Generation is the latest collaboration between
                            beyerdynamic and Astell&amp;Kern, market leader in premium
                            portable music players.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_0">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_1" style="display: none">AK T1p</strong>
                        <p class="tmpProductInfo tmpProductInfo_1" style="display: none">
                            Beyerdynamic&rsquo;s top-of-the line T1 model returns with a
                            new and improved tesla driver and lowered ohm impedance in
                            collaboration with Astell&amp;Kern.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_1" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_2" style="display: none">AK T5P
                        </strong>
                        <p class="tmpProductInfo tmpProductInfo_2" style="display: none">
                            AK T5p offers an amazing experience to those who seek the
                            ultimate sound quality in a portable device.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_2" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_3" style="display: none">AURA</strong>
                        <p class="tmpProductInfo tmpProductInfo_3" style="display: none">
                            Expertly crafted in Germany, AURA blends innovation,
                            sophisticated styling and cutting-edge technology to create a
                            listening experience like no other.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_3" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_4" style="display: none">AK ZERO2</strong>
                        <p class="tmpProductInfo tmpProductInfo_4" style="display: none">
                            The AK ZERO2 is an IEM that features a &ldquo;Quad-brid&rdquo;
                            design centered around an advanced driver array and Super Low
                            Noise Cross-Over Network perfectly tuned.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_4" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group">
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="iF_23.jpg" />
                            </div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_5" style="display: none">ODYSSEY</strong>
                        <p class="tmpProductInfo tmpProductInfo_5" style="display: none">
                            Astell&amp;Kern and Empire Ears completed Odyssey to present
                            our most extraordinary sound, containing the essence of
                            A&amp;K and Empire Ears.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_5" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_6" style="display: none">PATHFINDER</strong>
                        <p class="tmpProductInfo tmpProductInfo_6" style="display: none">
                            A whole new hybrid IEM jointly developed by Campfire Audio and
                            Astell&amp;Kern, offers amazing new technologies and sound.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_6" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group">
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="2023_winner.png" />
                            </div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_7" style="display: none">AK UW100</strong>
                        <p class="tmpProductInfo tmpProductInfo_7" style="display: none">
                            The AK UW100, Astell&amp;Kern's first fully wireless earphone,
                            based on our proprietary audio technology, provides
                            uncompromising wireless Hi-Fi sound with no cables required.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_7" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group">
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="RED_2022.jpg" />
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="1 (1).png" />
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="2 (1).png" />
                            </div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_8" style="display: none">AK ZERO1</strong>
                        <p class="tmpProductInfo tmpProductInfo_8" style="display: none">
                            The AK ZERO1 is a brand-new In-Ear Monitor product from
                            Astell&amp;Kern.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_8" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group">
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="iF-DESIGN-AWARD-2022_l_RGB_jpg.jpg" />
                            </div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_9" style="display: none">AK SOLARIS X</strong>
                        <p class="tmpProductInfo tmpProductInfo_9" style="display: none">
                            AK SOLARIS X is a culmination of Campfire Audio's technology.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_9" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_10" style="display: none">AK T9iE</strong>
                        <p class="tmpProductInfo tmpProductInfo_10" style="display: none">
                            The AK T9iE is the third in-ear collaboration product by
                            beyerdynamic and Astell&amp;Kern.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_10" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_11" style="display: none">Layla AION</strong>
                        <p class="tmpProductInfo tmpProductInfo_11" style="display: none">
                            Jerry Harvey Audio custom earphones world's leading creator
                            and collaboration Astell&amp;Kern.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_11" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_12" style="display: none">Diana</strong>
                        <p class="tmpProductInfo tmpProductInfo_12" style="display: none">
                            Diana is a product created by combining the world renowned IEM
                            technology of Jerry Harvey Audio.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_12" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_13" style="display: none">Bille Jean</strong>
                        <p class="tmpProductInfo tmpProductInfo_13" style="display: none">
                            Billie Jean is the latest collaboration of In-Ear-Monitors
                            (IEMs) between Astell&amp;Kern and Jerry Harvey Audio.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_13" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_14" style="display: none">Michelle Limited</strong>
                        <p class="tmpProductInfo tmpProductInfo_14" style="display: none">
                            Michelle Limited, a special edition product produced in Korea,
                            is the result of a dedicated collaboration between
                            Astell&amp;Kern.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_14" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_15" style="display: none">Michelle</strong>
                        <p class="tmpProductInfo tmpProductInfo_15" style="display: none">
                            The Michelle represents another collaboration to provide a
                            more affordable version for all music lovers.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_15" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_16" style="display: none">AK T8iE Mk II</strong>
                        <p class="tmpProductInfo tmpProductInfo_16" style="display: none">
                            The AK T8iE Mk&#8545; succeeds and improves on the AK T8iE,
                            the world&rsquo;s first Tesla in-ear headphone,
                            collaboratively developed by Astell&amp;Kern and beyerdynamic.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_16" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_17" style="display: none">LAYLA II</strong>
                        <p class="tmpProductInfo tmpProductInfo_17" style="display: none">
                            Jerry Harvey Audio custom earphones world's leading creator
                            and collaboration Astell&amp;Kern
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_17" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_18" style="display: none">ROXANNE II</strong>
                        <p class="tmpProductInfo tmpProductInfo_18" style="display: none">
                            Jerry Harvey Audio custom earphones world's leading creator
                            and collaboration Astell&amp;Kern
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_18" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_19" style="display: none">ANGIE II</strong>
                        <p class="tmpProductInfo tmpProductInfo_19" style="display: none">
                            Jerry Harvey Audio custom earphones world's leading creator
                            and collaboration Astell&amp;Kern
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_19" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_20" style="display: none">ROSIE</strong>
                        <p class="tmpProductInfo tmpProductInfo_20" style="display: none">
                            Jerry Harvey Audio custom earphones world's leading creator
                            and collaboration Astell&amp;Kern
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_20" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_21" style="display: none">AK T8iE</strong>
                        <p class="tmpProductInfo tmpProductInfo_21" style="display: none">
                            The Essence OF Tesla Techonolgy
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_21" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_22" style="display: none">LAYLA</strong>
                        <p class="tmpProductInfo tmpProductInfo_22" style="display: none">
                            Jerry Harvey Audio custom earphones world's leading creator
                            and collaboration Astell&amp;Kern
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_22" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_23" style="display: none">ANGIE</strong>
                        <p class="tmpProductInfo tmpProductInfo_23" style="display: none">
                            Jerry Harvey Audio custom earphones world's leading creator
                            and collaboration Astell&amp;Kern
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_23" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_24" style="display: none">AKRO3</strong>
                        <p class="tmpProductInfo tmpProductInfo_24" style="display: none">
                            Jerry Harvey Audio custom earphones world's leading creator
                            and collaboration Astell&amp;Kern
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_24" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_25" style="display: none">AKRO2</strong>
                        <p class="tmpProductInfo tmpProductInfo_25" style="display: none">
                            The Balanced Armature (BA) driver used in the AKR02 is the
                            same unit found in their BA-SS earphones which gives a deep
                            and rich sound.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_25" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_26" style="display: none">AKR01</strong>
                        <p class="tmpProductInfo tmpProductInfo_26" style="display: none">
                            The AKR01 with a balanced armature driver and special tuning
                            are premium earphones that deliver Astell&amp;Kern's deep and
                            rich sound.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_26" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <div class="list">
                            <div class="swiper-container">
                                <ul class="swiper-wrapper">
                                    <li class="swiper-slide">
                                        <a href="product_detail.html" class="active">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="AKT5P2_main_1.png" />
                                            <span>AK T5p 2nd Generation</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="earphone_AKT1p_01.png" />
                                            <span>AK T1p</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="earphone_AKT5p_01.png" />
                                            <span>AK T5P </span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="aura_list.jpg" />
                                            <span>AURA</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="zero2 (1).png" />
                                            <span>AK ZERO2</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="Odyssey_list.png" />
                                            <span>ODYSSEY</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="pathfinder.png" />
                                            <span>PATHFINDER</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="uw100_list.png" />
                                            <span>AK UW100</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="akzero1_02.png" />
                                            <span>AK ZERO1</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="solarisx_01.png" />
                                            <span>AK SOLARIS X</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="ak_t9ie_01.png" />
                                            <span>AK T9iE</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="layla_aion_01.png" />
                                            <span>Layla AION</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="diana_01.png" />
                                            <span>Diana</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="billie_jean_01.png" />
                                            <span>Bille Jean</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="michelle_limited_01.png" />
                                            <span>Michelle Limited</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="Michelle_01.png" />
                                            <span>Michelle</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="AKT8iE_2_01.png" />
                                            <span>AK T8iE Mk II</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="Layla_2_01.png" />
                                            <span>LAYLA II</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="Roxanne_2_01.png" />
                                            <span>ROXANNE II</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="Angie_2_01.png" />
                                            <span>ANGIE II</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="Rosie_01.png" />
                                            <span>ROSIE</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="AKT8iE_01.png" />
                                            <span>AK T8iE</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="Layla_01.png" />
                                            <span>LAYLA</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="Angie_01.png" />
                                            <span>ANGIE</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="AKR03_01.png" />
                                            <span>AKRO3</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="AKR02_01.png" />
                                            <span>AKRO2</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/yRwq24K/20211018114047-399edf7e-f5e9-45be-91d6-e8f3f7c45aee.png"
                                                alt="AKR01_01.png" />
                                            <span>AKR01</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="swiper-slider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade tab-cont n3" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="wrap">
                    <div class="wl">
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="ca1000t_list.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="ca1000_list.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="acro_l1000.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="BE100_B.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="acro_s1000.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="AKT1_01.png" />
                                </li>
                                <li class="swiper-slide">
                                    <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                        alt="AK500Series.png" />
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="wr">
                        <strong class="tmpProductInfo tmpProductInfo_0">ACRO CA1000T</strong>
                        <p class="tmpProductInfo tmpProductInfo_0">
                            ACRO CA1000T is an all-in-one Head-Fi audio system created for
                            those who want to enjoy the best sound wherever they are.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_0">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group">
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="2023_winner.png" />
                            </div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_1" style="display: none">ACRO CA1000</strong>
                        <p class="tmpProductInfo tmpProductInfo_1" style="display: none">
                            The ACRO CA1000 sets a new standard for headphone amplifiers,
                            providing powerful and clear sound with the features never
                            available on any other headphone amplifiers.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_1" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group">
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="RED_2022.jpg" />
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="iF-DESIGN-AWARD-2022_l_RGB_jpg.jpg" />
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="2023_winner.png" />
                            </div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_2" style="display: none">ACRO L1000</strong>
                        <p class="tmpProductInfo tmpProductInfo_2" style="display: none">
                            The ACRO L1000 is the first Desktop Headphone Amplifier from
                            Astell&amp;Kern.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_2" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_3" style="display: none">ACRO BE100</strong>
                        <p class="tmpProductInfo tmpProductInfo_3" style="display: none">
                            The Astell&amp;Kern ACRO BE100 is a Bluetooth speaker that
                            provides Hi-Fi sound quality with wireless freedom.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_3" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group">
                                <img src="https://i.ibb.co/GHsdRjP/20220905141635-3d2f686c-ea69-4ab8-90bd-9aaeff9e727d.png"
                                    alt="RED_2022.jpg" />
                            </div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_4" style="display: none">ACRO S1000</strong>
                        <p class="tmpProductInfo tmpProductInfo_4" style="display: none">
                            The ACRO S1000 enclosure not only provides acoustic benefits,
                            but it completes the aesthetically pleasing design.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_4" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_5" style="display: none">AK T1</strong>
                        <p class="tmpProductInfo tmpProductInfo_5" style="display: none">
                            The AK T1 is Astell&amp;Kern's very first all-in-one sound
                            system.
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_5" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <strong class="tmpProductInfo tmpProductInfo_6" style="display: none">AK500 Series</strong>
                        <p class="tmpProductInfo tmpProductInfo_6" style="display: none">
                            The AK500 Series consists of the AK500N (network player),
                            AK500A (power amplifier), and AK500P (power supply unit).
                        </p>
                        <div class="btn-group tmpProductInfo tmpProductInfo_6" style="display: none">
                            <a href="javascript:void(0);" class="lnk-ty1">Find store</a>
                            <div class="mark-group"></div>
                        </div>
                        <div class="list">
                            <div class="swiper-container">
                                <ul class="swiper-wrapper">
                                    <li class="swiper-slide">
                                        <a href="product_detail.html" class="active">
                                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                                alt="ca1000t_list.png" />
                                            <span>ACRO CA1000T</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                                alt="ca1000_list.png" />
                                            <span>ACRO CA1000</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                                alt="acro_l1000.png" />
                                            <span>ACRO L1000</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                                alt="BE100_B.png" />
                                            <span>ACRO BE100</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                                alt="acro_s1000.png" />
                                            <span>ACRO S1000</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                                alt="AKT1_01.png" />
                                            <span>AK T1</span>
                                        </a>
                                    </li>
                                    <li class="swiper-slide">
                                        <a href="product_detail.html">
                                            <img src="https://i.ibb.co/ws3fKXh/20230112101251-d308fd99-c6cc-411a-a978-9d0bd6f36679.png"
                                                alt="AK500Series.png" />
                                            <span>AK500 Series</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="swiper-slider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="brand-story scrollAni n2">
        <h2>
            We believe <strong>Astell&Kern</strong> is the center of music
        </h2>
        <ul>
            <li>
                <a href="#">
                    <div class="bg"
                        style="
                  background-image: url('https://i.ibb.co/m5NdQFq/20211015134226-cc9d4f48-35cf-4c1d-bebc-dee317e49ce9.jpg');
                ">
                    </div>
                    <div class="inner bg-shadow">
                        <p class="font-white">AK ULTIMATE SOUND SOLUTION</p>
                        <strong class="font-white">TERATON ALPHA</strong>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="bg"
                        style="
                  background-image: url('https://i.ibb.co/m5NdQFq/20211015134226-cc9d4f48-35cf-4c1d-bebc-dee317e49ce9.jpg');
                ">
                    </div>
                    <div class="inner bg-shadow">
                        <p class="font-white">
                            WE USE THE POWER OF MUSIC TO FULFILL YOUR LIFE
                        </p>
                        <strong class="font-white">Difference in Sound Quality
                        </strong>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="bg"
                        style="
                  background-image: url('https://i.ibb.co/m5NdQFq/20211015134226-cc9d4f48-35cf-4c1d-bebc-dee317e49ce9.jpg');
                ">
                    </div>
                    <div class="inner bg-shadow">
                        <p class="font-white">
                            The story of people who are inspired by music
                        </p>
                        <strong class="font-white">DAVID JAMIN</strong>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="bg"
                        style="
                  background-image: url('https://i.ibb.co/m5NdQFq/20211015134226-cc9d4f48-35cf-4c1d-bebc-dee317e49ce9.jpg');
                ">
                    </div>
                    <div class="inner bg-shadow">
                        <p class="font-white">People Story</p>
                        <strong class="font-white">We Love Music</strong>
                    </div>
                </a>
            </li>
        </ul>
    </section>
@endsection
