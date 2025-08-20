@extends('index')

@push('style')
<title>গ্রাহক প্রমাণীকরণ | গ্রীন বাস্কেট | ফার্ম টু টেবিল</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/customer_auth.css') }}">
@endpush

@section('main-content') 

<div class="auth-container">
    <div id="register-form" class="auth-form ">
        <h2>রেজিস্টার</h2>
        <form method="POST" action="{{ url('/register') }}">
            @csrf
            <input type="text" name="name" placeholder="নাম" required> <br>
            <input type="tel" name="phone" placeholder="ফোন" required> <br>
            <input type="email" name="email" placeholder="ইমেইল" required> <br>
            <input type="text" name="address" placeholder="ঠিকানা" required> <br>
            <input type="password" name="password" placeholder="পাসওয়ার্ড" required> <br>
            <input type="password" name="password_confirmation" placeholder="পাসওয়ার্ড নিশ্চিত করুন" required> <br>
            <button type="submit">রেজিস্টার</button>
        </form>
        <span class="toggle-link" id="show-login">আগেই অ্যাকাউন্ট আছে? লগইন করুন</span>
    </div>

    <div id="login-form" class="auth-form active">
        <h2>লগইন</h2>
        <form method="POST" action="{{ url('/customer/login') }}">
            @csrf
            <input type="tel" name="phone" placeholder="ফোন" required><br>
            <input type="password" name="password" placeholder="পাসওয়ার্ড" required> <br>
            <button type="submit">লগইন</button>
        </form>
        <span class="toggle-link" id="show-register">অ্যাকাউন্ট নেই? রেজিস্টার করুন</span>
    </div>
</div>

<script src="{{ asset('js/hridoy/customer_auth.js') }}"></script>

@push('script')
<script>

</script>
@endpush

@endsection
