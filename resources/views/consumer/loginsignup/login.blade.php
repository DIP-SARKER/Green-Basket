@extends('index')
@push('style')
<title>Login | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/login.css') }}">
@endpush

@section('main-content')
    <main>
        <div class="container">
            <div class="auth-container">
                <h1 class="auth-title">Welcome Back</h1>
                <p class="auth-subtitle">Login to access your Green Basket account</p>
                
                <form class="auth-form">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="your@email.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>
                    
                    <button type="submit" class="auth-button">Login</button>
                    
                    <div class="form-group" style="text-align: right; margin-top: 0.5rem;">
                        <a href="#" style="font-size: 0.9rem;">Forgot password?</a>
                    </div>
                </form>
                
                <div class="auth-footer">
                    Don't have an account? <a href="{{ route('signup') }}">Create one</a>
                </div>
            </div>
        </div>
    </main>
@endsection