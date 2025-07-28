@extends('index')
@push('style')
    <title>{{ $seller->name }} | Green Basket</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/sellerProfile.css') }}">
@endpush

@section('main-content')
    <div class="seller-profile-content">
        <!-- Profile Header -->
        <div class="profile-header">
            <div class="profile-avatar">
                <img src="https://via.placeholder.com/150" alt="Seller Avatar">
            </div>
            <div class="profile-info">
                <div class="seller-name">{{ $seller->name }}</div>
                <div class="seller-email">{{ $seller->email }}</div>
                <div class="seller-phone">{{ $seller->phone }}</div>
                <div class="seller-joined-date">Member since: {{$seller->created_at}}</div>
            </div>
            <button class="edit-profile-button">Edit Profile</button>
        </div>

        <!-- Seller Stats -->
        <div class="seller-stats">
            <div class="stat-box">
                <div class="stat-label">Total Products</div>
                <div class="stat-value">42</div>
            </div>
            <div class="stat-box">
                <div class="stat-label">Orders Received</div>
                <div class="stat-value">128</div>
            </div>
            <div class="stat-box">
                <div class="stat-label">Rating</div>
                <div class="stat-value">{{ $averageRating }} ★</div>
            </div>
        </div>

        <!-- Products List -->
        <div class="seller-products-section">
            <div class="section-header">
                <div class="section-title">Your Products</div>
                <a href="{{ route('seller.products.create') }}">
                    <button class="add-product-button">+ Add Product</button>
                </a>
            </div>
            <div class="product-grid">
                @forelse($products as $product)
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ $product->image_url }}" alt="Product Image">
                        </div>
                        <div class="product-name">{{ $product->name }}</div>
                        <div class="product-price">${{ number_format($product->price, 2) }}</div>
                        <div class="edit-delete-buttons">
                            <a href="{{ route('seller.products.edit', $product->id) }}">
                                <button class="edit-button">Edit</button>
                            </a>
                            <form action="{{ route('seller.products.destroy', $product->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button"
                                    onclick="return confirm('Delete this product?')">Delete</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div>No products found.</div>
                @endforelse
            </div>
        </div>

        <!-- Recent Orders -->
        <div class="seller-orders-section">
            <div class="section-title">Recent Orders</div>
            <div class="order-list">
                <!-- Order Items -->
                <div class="order-item">
                    <div class="order-id">#ORD-1001</div>
                    <div class="order-customer">Sarah Johnson</div>
                    <div class="order-total">$89.97</div>
                    <div class="order-status shipped">Shipped</div>
                </div>
                <div class="order-item">
                    <div class="order-id">#ORD-1000</div>
                    <div class="order-customer">Michael Brown</div>
                    <div class="order-total">$29.99</div>
                    <div class="order-status processing">Processing</div>
                </div>
                <div class="order-item">
                    <div class="order-id">#ORD-999</div>
                    <div class="order-customer">Emily Davis</div>
                    <div class="order-total">$64.98</div>
                    <div class="order-status delivered">Delivered</div>
                </div>
            </div>
        </div>
    </div>
@endsection