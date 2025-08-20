@extends('index')

@push('style')
    <title>গ্রাহক প্রমাণীকরণ | গ্রীন বাস্কেট | ফার্ম টু টেবিল</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/customer_auth.css') }}">
@endpush

@section('main-content')

    <div class="auth-container">

        <div id="login-form" class="auth-form active">
            <h2>লগইন</h2>
            <form method="POST" action="{{ url('/customer/login') }}">
                @csrf
                <input type="tel" name="phone" placeholder="ফোন" value="{{ old('phone') }}" required><br>
                <input type="password" name="password" placeholder="পাসওয়ার্ড" required> <br>

                @if ($errors->any())
                    <div class="error">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <button type="submit">লগইন</button>
            </form>
            <a href="{{ route('customer_register') }}" class="toggle-link">অ্যাকাউন্ট নেই? রেজিস্টার করুন</a>
            
        </div>
    </div>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif


    <script src="{{ asset('js/hridoy/customer_auth.js') }}"></script>

    @push('script')
        <script>

        </script>
    @endpush

@endsection