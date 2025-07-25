@extends('index')
@push('style')
    <title>Customer Authentication | Green Basket | Farm to Table</title>
@endpush
@section('main-content')
    <div>
        <h1>This is Customer Profile</h1>
        <h2>Welcome, {{ $customer->name }}!</h2>

        <hr>

        @if(Auth::guard('customer')->check())
            <div class="dropdown">
                <a href="{{ route('cprofile') }}">{{ Auth::guard('customer')->user()->name }}</a>
                <form action="{{ route('customer_logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        @else
            <a href="{{ route('customer_auth') }}">Login/SignUp</a>
        @endif

    </div>
@endsection