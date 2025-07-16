@extends('index')
@push('style')
    <title>Customer Authentication</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/customer_authentication.css') }}">
@endpush
@section('main-content')

    <div class="auth-card">
        <!-- Login Section -->
        <div class="auth-section auth-login">
            <div id="login-form-container" class="visible-section">
                <form class="auth-form" id="login-form">
                    <h2>Welcome Back</h2>
                    <p>Sign in to access your account</p>
                    
                    <div class="input-group">
                        <label for="login-email">Email Address</label>
                        <input type="email" id="login-email" placeholder="Enter your email" required>
                        <div class="error-message" id="login-email-error"></div>
                    </div>
                    
                    <div class="input-group">
                        <label for="login-password">Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="login-password" placeholder="Enter your password" required>
                            <button type="button" class="toggle-password" aria-label="Show password">
                                <i class="eye-icon"></i>
                            </button>
                        </div>
                        <div class="error-message" id="login-password-error"></div>
                    </div>
                    
                    <div class="forgot-password">
                        <a href="#">Forgot Password?</a>
                    </div>
                    
                    <button type="submit" class="auth-btn btn-primary">Sign In</button>
                    
                    <!-- <div class="auth-divider">or</div>
                    
                    <button type="button" id="show-register" class="auth-btn btn-secondary">
                        Create New Account
                    </button> -->
                </form>
            </div>
            
            <div id="login-alternate" class="hidden-section auth-alternate">
                <h2>Have an account?</h2>
                <p>Sign in to continue your journey with us</p>
                <button id="show-login" class="auth-btn btn-primary">Sign In</button>
            </div>
        </div>
        
        <!-- Register Section -->
        <div class="auth-section auth-register">
            <div id="register-alternate" class="visible-section auth-alternate">
                <h2>New Here?</h2>
                <p>Join our community to get started</p>
                <button id="show-register-alt" class="auth-btn btn-primary">Sign Up</button>
            </div>
            
            <div id="register-form-container" class="hidden-section">
                <form class="auth-form" id="register-form">
                    <h2>Create Account</h2>
                    <p>Get started with your free account</p>
                    
                    <div class="input-group">
                        <label for="register-name">Full Name</label>
                        <input type="text" id="register-name" placeholder="Enter your full name" required>
                        <div class="error-message" id="register-name-error"></div>
                    </div>
                    
                    <!-- <div class="input-group">
                        <label for="register-email">Email Address</label>
                        <input type="email" id="register-email" placeholder="Enter your email" required>
                        <div class="error-message" id="register-email-error"></div>
                    </div> -->

                    <div class="input-group">
                        <label for="register-phone">Mobile Number</label>
                        <input type="tel" id="register-phone" placeholder="Enter your mobile number" required>
                        <div class="error-message" id="register-phone-error"></div>
                    </div>
                    
                    <div class="input-group">
                        <label for="register-password">Create Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="register-password" placeholder="Create a password (min 8 characters)" required>
                            <button type="button" class="toggle-password" aria-label="Show password">
                                <i class="eye-icon"></i>
                            </button>
                        </div>
                        <div class="error-message" id="register-password-error"></div>
                    </div>
                    
                    <div class="input-group">
                        <label for="register-confirm-password">Confirm Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="register-confirm-password" placeholder="Confirm your password" required>
                            <button type="button" class="toggle-password" aria-label="Show password">
                                <i class="eye-icon"></i>
                            </button>
                        </div>
                        <div class="error-message" id="register-confirm-password-error"></div>
                    </div>
                    
                    <div class="input-group checkbox-group">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">
                            I agree to the <a href="{{ route('termsandcondition') }}" target="_blank">Terms & Conditions</a>
                            and <a href="{{ route('privacypolicy') }}" target="_blank">Privacy Policy</a>
                        </label>
                        <div class="error-message" id="terms-error"></div>
                    </div>

                    <button type="submit" class="auth-btn btn-primary">Sign Up</button>
                    
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/hridoy/customer_authentication.js') }}"></script>

@endsection