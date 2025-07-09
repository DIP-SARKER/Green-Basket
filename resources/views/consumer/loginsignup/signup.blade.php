@extends('index')
@push('style')
    <title>Sign UP | Green Basket</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/signup.css') }}">
@endpush


@section('main-content')

    <main>
        <div class="container">
            <div class="auth-container">
                <h1 class="auth-title">Create Your Account</h1>
                <p class="auth-subtitle">Sign up to start shopping fresh products directly from local farms across
                    Bangladesh</p>

                <form class="auth-form" id="signupForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first_name" placeholder="Rahim" required>
                        </div>

                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last_name" placeholder="Uddin" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="rahim@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Mobile Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="01XXXXXXXXX" 
                            required>
                    </div>

                    <div class="form-group">
                        <label for="password">Create Password</label>
                        <input type="password" id="password" name="password" placeholder="At least 8 characters" required>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm_password"
                            placeholder="Retype your password" required>
                    </div>

                    <div class="terms-checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms" class="terms-text">
                            I agree to the <a href="{{ route('termsandcondition') }}" target="_blank">Terms & Conditions</a>
                            and <a href="{{ route('privacypolicy') }}" target="_blank">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="auth-button" id="submitButton">Sign Up</button>
                </form>

                <div class="auth-footer">
                    Already have an account? <a href="{{ route('login') }}">Log in here</a>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/hridoy/script.js') }}"></script>

@endsection