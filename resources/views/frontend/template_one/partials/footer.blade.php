<footer class="footer--area">
    <div class="footer--top pt-70 pb-25">
        <div class="contaner-fluid footer-bg">
            <div class="container">
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
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h6 class="f-800">Get to Know Us</h6>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route('template.one.about') }}">About Us</a></li>
                                    <li><a href="{{ route('template.one.login') }}">Sign In</a></li>
                                    <li><a href="{{ route('template_one.contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('template.one.faq') }}">Faq</a></li>
                                    <li><a href="{{ route('template.one.term') }}">Terms</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 mb-30 col-lg-6 col-md-4 order-md-2 order-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h6 class="f-800">Contact Platform</h6>
                            </div>
                            <div class="footer-menu h1foote-menu2">
                                <ul>
                                    <li><a href="{{ $site->facebook_url }}">Facebook</a></li>
                                    <li><a href="{{ $site->skype_url }}">Skype</a></li>
                                    <li><a href="{{ $site->youtube_url }}">Youtube</a></li>
                                    <li><a href="{{ $site->linkedin_url }}">Linkdin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-4 mb-30 order-md-4 order-lg-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h6 class="f-800">Let Us Help You</h6>
                                <p>
                                    Containing information about.
                                </p>
                            </div>
                            <div class="footer-menu h1foote-menu2">
                                <form class="newsletter--form pos-rel" style="min-width: auto !important">
                                    <input class="newsletter--input w-100" type="text"
                                        placeholder="Email Address ..." />
                                    <button class="btn newsletter--button" type="button">
                                        <img src="{{ asset('frontend/template_one/assets/img/icon/plan-icon.png') }}"
                                            alt="" />
                                    </button>
                                </form>
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
                        <a class="m-0 text-center text-muted" href="https://www.dadabhaai.com/">
                            Copyright 2024
                            <span class="grenadier-color">DadaBhaai</span> All Rights
                            Reserved.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
