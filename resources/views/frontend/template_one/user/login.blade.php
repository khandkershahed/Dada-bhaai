@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
@section('title', 'Dada Bhaai | Login')
<!-- page banner area start -->
<section class="page-banner-area" data-background="{{ asset('frontend/template_one/assets/img/bg/banner.jpg') }}">
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
<section class="reg-area pt-60">
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
                            {{-- <div class="mt-2 d-flex justify-content-between aligin-items-center">
                                <a href="{{ route('login.google') }}" class="cart-button w-100 mt-0">Google Login</a>
                                <a href="{{ route('login.google') }}" class="cart-button w-100 mt-0 ml-2">Facebook
                                    Login</a>
                            </div> --}}
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
                            {{-- <div class="mt-2 d-flex justify-content-between aligin-items-center">
                                <button class="w-100 mr-2">Google Login</button>
                                <button class="w-100">Facebook Login</button>
                            </div> --}}
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="field">
                                    <label for="name">Name</label>
                                    <input type="text"
                                        class="form-control form-control-sm @error('name') is-invalid @enderror"
                                        id="name" placeholder="Full Name" value="{{ old('name') }}"
                                        name="name" required>
                                    <span id="nameValidation"></span> <!-- Span to show validation icon -->

                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="field">
                                    <label for="email">Email Address</label>
                                    <input type="email"
                                        class="form-control form-control-sm @error('email') is-invalid @enderror"
                                        id="email" placeholder="Email Address" value="{{ old('email') }}"
                                        name="email" required>
                                    <span id="emailValidation"></span> <!-- Span to show validation icon -->

                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="field">
                                            <label for="password">Password</label>
                                            <input type="password"
                                                class="form-control form-control-sm @error('password') is-invalid @enderror"
                                                name="password" id="password" placeholder="Password" required>
                                            <span id="passwordValidation"></span> <!-- Span to show validation icon -->

                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="field">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password"
                                                class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation" id="password_confirmation"
                                                placeholder="Confirm Password" required>
                                            <span id="passwordConfirmationValidation"></span>
                                            <!-- Span to show validation icon -->

                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label pt-0" for="exampleCheck1">I agree on DadaBhaai
                                            Term & Condition.</label>
                                    </div>
                                </div>

                                <button type="submit" class="w-100" id="submitBtn">Register Here</button>
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

<script>
    function validateForm() {
        var checkbox = document.getElementById('exampleCheck1');
        if (!checkbox.checked) {
            alert("Please agree to the terms and conditions.");
            return false;
        }
        return true;
    }
</script>

<script>
    // Function to update validation icon based on input validity
    function updateValidationIcon(inputElement, isValid) {
        const validationSpan = inputElement.nextElementSibling; // Get the next sibling (span) for validation icon
        if (isValid) {
            validationSpan.innerHTML = '<i class="fas fa-check-circle text-success"></i>'; // Checkmark icon
        } else {
            validationSpan.innerHTML = '<i class="fas fa-times-circle text-danger"></i>'; // Crossmark icon
        }
    }

    // Function to validate Name field
    document.getElementById('name').addEventListener('input', function() {
        const nameInput = this;
        const isValid = nameInput.value.trim() !== ''; // Example: Name should not be empty
        updateValidationIcon(nameInput, isValid);
    });

    // Function to validate Email field
    document.getElementById('email').addEventListener('input', function() {
        const emailInput = this;
        const isValid = emailInput.checkValidity(); // Using built-in HTML5 validation for email
        updateValidationIcon(emailInput, isValid);
    });

    // Function to validate Password field
    document.getElementById('password').addEventListener('input', function() {
        const passwordInput = this;
        const isValid = passwordInput.value.length >= 6; // Example: Password must be at least 6 characters
        updateValidationIcon(passwordInput, isValid);
    });

    // Function to validate Confirm Password field
    document.getElementById('password_confirmation').addEventListener('input', function() {
        const passwordConfirmationInput = this;
        const passwordInput = document.getElementById('password');
        const isValid = passwordConfirmationInput.value === passwordInput.value;
        updateValidationIcon(passwordConfirmationInput, isValid);
    });
</script>



@endsection
