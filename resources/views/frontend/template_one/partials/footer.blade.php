<footer class="footer--area">
    <div class="footer--top pt-70 pb-25">
        <div class="contaner-fluid footer-bg">
            <div class="container">
<<<<<<< HEAD
                <div class="row gx-0">
                    <div class="col-xl-4 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                        <div>
                            <a class="img-fluid" href="{{ route('index') }}"><img class="" width="250px"
                                    src="https://www.dadabhaai.com/upload/logo_black/202405071136jaragroups404413.png"
                                    alt="">
                            </a>
                            <p class="pt-3">
                                Indulge in a comprehensive range at Dadabhaai, spanning from the latest fashion trends
                                to top-notch electronics. With an array of choices tailored to your needs, embark on a
                                seamless shopping journey like no other.
                            </p>
=======
                <div class="row">

                    @php
                        $site = App\Models\Sites::find(1);
                    @endphp

                    <div class="col-xl-4 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                        <div class="logo--header__middle">
                            <div class="logo">

                                <a class="logo__link" href="home.html"><img class="" width="250px"
                                        src="{{ asset('upload/logo_black/' . $site->logo_black) }}" alt=""></a>

                                <p class="pt-3">{{ $site->site_slogan }}</p>
                            </div>
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h6 class="f-800">Inquery</h6>
                            </div>
                            <div class="footer-menu">
                                <ul>
<<<<<<< HEAD
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="{{ route('template_one.contact') }}">Contact Us</a></li>
                                    <li><a href="terms.html">Terms</a></li>
                                    <li><a href="">Brands</a></li>

=======
                                    <li><a href="{{ route('template.one.about') }}">About Us</a></li>
                                    <li><a href="{{ route('template.one.login') }}">Sign In</a></li>
                                    <li><a href="{{ route('template_one.contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('template.one.faq') }}">Faq</a></li>
                                    <li><a href="{{ route('template.one.term') }}">Terms</a></li>
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h6 class="f-800">Contact Platform</h6>
                            </div>
                            <div class="footer-menu h1foote-menu2">
                                <ul>
<<<<<<< HEAD
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">What's App</a></li>
                                    <li><a href="#">Skype</a></li>
                                    <li><a href="">Offers</a></li>
=======
                                    <li><a href="{{ $site->facebook_url }}">Facebook</a></li>
                                    <li><a href="{{ $site->skype_url }}">Skype</a></li>
                                    <li><a href="{{ $site->youtube_url }}">Youtube</a></li>
                                    <li><a href="{{ $site->linkedin_url }}">Linkdin</a></li>
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h6 class="f-800">Connect With Us</h6>
                            </div>
<<<<<<< HEAD
                            <div>
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous"
                                    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0&appId=1071946983902795" nonce="2wAZemwC">
                                </script>

                                <div class="fb-wrap">
                                    <div class="fb-page" data-href="https://www.facebook.com/ngenitltd"
                                        data-tabs="timeline" data-width="500" data-height="135"
                                        data-small-header="false" data-adapt-container-width="true"
                                        data-hide-cover="false" data-show-facepile="true"></div>
                                </div>
=======
                            <div class="footer-menu h1foote-menu2">
                                <form class="newsletter--form pos-rel" style="min-width: auto !important">
                                    <input class="newsletter--input w-100" type="text"
                                        placeholder="Email Address ..." />
                                    <button class="btn newsletter--button" type="button">
                                        <img src="{{ asset('frontend/template_one/assets/img/icon/plan-icon.png') }}"
                                            alt="" />
                                    </button>
                                </form>
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom gray-bg pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright text-center">
<<<<<<< HEAD
                        <a class="m-0 text-center text-muted" href="{{ route('index') }}">
                            Copyright 2024
                            <span class="grenadier-color">Dada Bhaai</span> All Rights
=======
                        <a class="m-0 text-center text-muted" href="https://www.dadabhaai.com/">
                            Copyright 2024
                            <span class="grenadier-color">DadaBhaai</span> All Rights
>>>>>>> 202353e99b5117f2cd83076ae8f750f173d07041
                            Reserved.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
