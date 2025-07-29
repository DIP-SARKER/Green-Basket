@extends('seller.seller-index')

@push('style')
    <title>{{ $seller->name }} | Profile</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/sellerProfile.css') }}">
@endpush

@section('main-content')
<div class="seller-profile-container">
    <!-- Profile Header -->
    <div class="profile-header">
        <div class="profile-picture">
            <img src="{{ $seller->profile_picture ?? 'https://images.unsplash.com/photo-1493106819501-66d381c466f1?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <h2>{{ $seller->name }}</h2>
            <p><strong>Email:</strong> {{ $seller->email ?? 'N/A' }}</p>
            <p><strong>Phone:</strong> {{ $seller->phone }}</p>
            <p><strong>Address:</strong> {{ $seller->address ?? 'Not Provided' }}</p>
        </div>
    </div>

    <!-- Edit Profile Button -->
    <div class="edit-profile-button-container">
        <a href="#">
            <button class="edit-button">Edit Profile</button>
        </a>
    </div>
</div>
@endsection
