@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
@section('title', 'Dada Bhaai | Login')
<!-- page banner area start -->
<section class="page-banner-area" data-background="{{ asset('frontend/template_one/assets/img/bg/banner.jpeg') }}"
    style="margin-top: 4.7rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-sm-12">
                <div class="banner-text text-center pt-90 pb-90">
                    <h2 class="f-800 cod__black-color">Sign Up</h2>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page banner area end -->

<!-- reg area start -->
<section class="reg-area pt-60 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="reg-wrapper">
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item mr-40">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Sign In</a>
                        </li>
                        <li class="nav-item ml-40">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Registration</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        {{-- Login  --}}
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="mt-2 d-flex justify-content-between aligin-items-center">
                                <a href="{{ route('login.google') }}" class="cart-button w-100 mt-0">Google Login</a>
                                <a class="w-100">Facebook Login</a>
                            </div>
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="field">
                                    <label>Email Address</label>
                                    @error('email')
                                        <div class="text-danger" style="margin-top: 0px;">{{ $message }}</div>
                                    @enderror
                                    <input type="email" class="form-control form-control-sm "
                                        placeholder="Email Address" value="{{ old('email') }}" required name="email">
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    @error('password')
                                        <div class="text-danger" style="margin-top: 0px;">{{ $message }}</div>
                                    @enderror
                                    <input type="password" class="form-control form-control-sm " name="password"
                                        placeholder="Password" required>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input check" type="checkbox" name="remember"
                                            id="remember_me">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Remember Me
                                        </label>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="lost-pass">Forgot Password?</a>
                                </div>
                                <button type="submit" class="w-100 mt-4">Sign In</button>
                            </form>
                        </div>
                        {{-- Login  --}}


                        {{-- Register --}}
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="mt-2 d-flex justify-content-between aligin-items-center">
                                <button class="w-100 mr-2">Google Login</button>
                                <button class="w-100">Facebook Login</button>
                            </div>
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="field">
                                    <label>Name</label>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control form-control-sm " id="name"
                                        placeholder="User Name" value="{{ old('name') }}" name="name" required>
                                </div>

                                <div class="field">
                                    <label>Email Address</label>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="email" class="form-control form-control-sm " id="email"
                                        placeholder="Email Address" value="{{ old('email') }}" name="email"
                                        required>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="field">
                                            <label>Password</label>
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <input type="password" class="form-control form-control-sm "
                                                name="password" id="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="field">
                                            <label>Confirm Password</label>
                                            @error('password_confirmation')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <input type="password" class="form-control form-control-sm "
                                                name="password_confirmation" id="password_confirmation"
                                                placeholder="Confirm Password" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="w-100">Register Here</button>
                            </form>
                        </div>
                        {{-- Register --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- reg area end -->
@endsection
