@extends('index')

@push('style')
    <title>গ্রাহক প্রমাণীকরণ | গ্রীন বাস্কেট | ফার্ম টু টেবিল</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/customer_auth.css') }}">
@endpush

@section('main-content')

    <div class="auth-container">
        <div id="register-form" class="auth-form active">
            <h2>রেজিস্টার</h2>
            <!-- Register Form -->
            <form method="POST" action="{{ url('/register') }}">
                @csrf
                <input type="text" name="name" placeholder="নাম" value="{{ old('name') }}" required>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>

                <input type="tel" name="phone" placeholder="ফোন" value="{{ old('phone') }}" required>
                @error('phone')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>

                <input type="email" name="email" placeholder="ইমেইল" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>

                <input type="text" name="address" placeholder="ঠিকানা" value="{{ old('address') }}" required>
                @error('address')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>

                <input type="password" name="password" placeholder="পাসওয়ার্ড" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>

                <input type="password" name="password_confirmation" placeholder="পাসওয়ার্ড নিশ্চিত করুন" required>
                <br>

                <button type="submit">রেজিস্টার</button>
            </form>
            <a href="{{ route('customer_auth') }}" class="toggle-link">আগেই অ্যাকাউন্ট আছে? লগইন করুন</a>
            
        </div>

    </div>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif



@endsection