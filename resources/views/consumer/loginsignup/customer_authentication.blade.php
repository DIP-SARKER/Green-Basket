@extends('index')

@push('style')
<title>Customer Authentication | Green Basket | Farm to Table</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/customer_auth.css') }}">
@endpush

@section('main-content') 

<div class="auth-container">
    <div id="register-form" class="auth-form ">
        <h2>Register</h2>
        <form method="POST" action="{{ url('/register') }}">
            @csrf
            <input type="text" name="name" placeholder="Name" required> <br>
            <input type="tel" name="phone" placeholder="Phone" required> <br>
            <input type="email" name="email" placeholder="Email" required> <br>
            <input type="text" name="address" placeholder="Address" required> <br>
            <input type="password" name="password" placeholder="Password" required> <br>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required> <br>
            <button type="submit">Register</button>
        </form>
        <span class="toggle-link" id="show-login">Already have an account? Login</span>
    </div>

    <div id="login-form" class="auth-form active">
        <h2>Login</h2>
        <form method="POST" action="{{ url('/customer/login') }}">
            @csrf
            <input type="tel" name="phone" placeholder="Phone" required><br>
            <input type="password" name="password" placeholder="Password" required> <br>
            <button type="submit">Login</button>
        </form>
        <span class="toggle-link" id="show-register">Don't have an account? Register</span>
    </div>
</div>

<script src="{{ asset('js/hridoy/customer_auth.js') }}">

</script>

@push('script')
<script>

</script>
@endpush

@endsection
