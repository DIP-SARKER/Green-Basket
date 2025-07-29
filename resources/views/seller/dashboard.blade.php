@extends('seller.seller-index')
@push('style')
<title>Seller Dashboard | GreenBasket</title>
@endpush
@section('title', 'Seller Dashboard')

@section('main-content')
    <div class="seller-dashboard-container">

        <!-- Greeting -->
        <div class="dashboard-header">
            <h2>Welcome back, {{ Auth::guard('seller')->user()->name }} 👋</h2>
            <p>Here's a quick summary of your store performance.</p>
        </div>

        <!-- Stats Section -->
        <div class="dashboard-stats">
            <div class="stat-card">
                <div class="stat-label">Total Products</div>
                <div class="stat-value">{{ $totalProducts }}</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Total Orders</div>
                <div class="stat-value">{{ $totalOrders }}</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Revenue</div>
                <div class="stat-value">${{ number_format($totalRevenue, 2) }}</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Average Rating</div>
                <div class="stat-value">{{ $averageRating ?? 'N/A' }} ★</div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <a href="{{ route('seller.products.create') }}" class="btn btn-primary">+ Add New Product</a>
            <a href="{{ route('seller.products.index') }}" class="btn btn-outline-secondary">View All Products</a>
        </div>


        <!-- Recent Orders -->
        <div class="recent-orders-section">
            <h4>Recent Orders</h4>

            @if($recentOrders->count())
                <table class="table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentOrders as $order)
                            <tr>
                                <td>#{{ $order->id }}</td>
                                <td>{{ $order->product->name }}</td>
                                <td>{{ $order->customer->name }}</td>
                                <td>${{ number_format($order->total_amount, 2) }}</td>
                                <td>{{ ucfirst($order->status) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No recent orders found.</p>
            @endif
        </div>

    </div>
@endsection