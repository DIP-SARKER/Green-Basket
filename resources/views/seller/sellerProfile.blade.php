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
            <img src="{{ $seller->profile_picture ?? 'https://via.placeholder.com/150' }}" alt="Profile Picture">
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
