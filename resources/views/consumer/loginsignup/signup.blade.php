@extends('index')
@push('style')
<title>Sign UP | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/signup.css') }}">
@endpush


@section('main-content')

    <main>
        <div class="container">
            <div class="auth-container">
                <h1 class="auth-title">Join Green Basket</h1>
                <p class="auth-subtitle">Create your account to start shopping farm-fresh groceries</p>
                
                <form class="auth-form" id="signupForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first_name" placeholder="John" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last_name" placeholder="Doe" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="your@email.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="••••••••" required>
                    </div>
                    
                    <div class="terms-checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms" class="terms-text">
                            I agree to the <a href="{{ route('termsandcondition') }}" target="_blank">Terms and Conditions</a> and <a href="{{ route('privacypolicy') }}" target="_blank">Privacy Policy</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="auth-button" id="submitButton">Create Account</button>
                </form>
                
                <div class="auth-footer">
                    Already have an account? <a href="{{ route('login') }}">Log in</a>
                </div>
            </div>
        </div>
    </main>

@endsection