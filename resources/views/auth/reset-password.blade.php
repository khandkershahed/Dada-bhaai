@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <!-- page banner area start -->
    <section class="page-banner-area" data-background="{{ asset('frontend/template_one/assets/img/bg/page-banner.jpg') }}" style="margin-top: 4.7rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-12">
                    <div class="banner-text text-center pt-90 pb-90">
                        <h2 class="f-800 cod__black-color">Reset Password</h2>

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
                            {{-- <li class="nav-item mr-40">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Sign In</a>
                            </li> --}}
                            <li class="nav-item ml-40">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Reset Password</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">

                            {{-- Login  --}}
                            {{-- <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">

                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('login') }}">

                                    @csrf

                                    <div class="field">
                                        <label>Email Address</label>

                                        @error('email')
                                            <div class="text-danger" style="margin-top: 0px;">{{ $message }}</div>
                                        @enderror

                                        <input type="email" placeholder="Email Address" value="{{ old('email') }}"
                                            required name="email">
                                    </div>

                                    <div class="field">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password" required>


                                    </div>

                                    <button type="submit">Login</button>

                                    <span>
                                        <input type="checkbox" name="remember" id="remember_me" class="check">
                                        Remember me
                                    </span>
                                    <a href="{{ route('password.request') }}" class="lost-pass">Forgot Password?</a>
                                </form>

                            </div> --}}
                            {{-- Login  --}}


                            {{-- Register --}}
                            <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('password.store') }}">

                                    @csrf

                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">


                                    <div class="field">
                                        <label>Email Address</label>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="email" id="email" placeholder="Email Address"
                                            value="{{ old('email', $request->email) }}" readonly name="email" required>
                                    </div>

                                    <div class="row">

                                        <div class="col-6">
                                            <div class="field">
                                                <label>Password</label>
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="password" name="password" id="password" placeholder="Password"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-6">

                                            <div class="field">
                                                <label>Confirm Password</label>
                                                @error('password_confirmation')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="password" name="password_confirmation"
                                                    id="password_confirmation" placeholder="Confirm Password" required>
                                            </div>
                                        </div>

                                    </div>


                                    <button type="submit">Password Update</button>

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




{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
