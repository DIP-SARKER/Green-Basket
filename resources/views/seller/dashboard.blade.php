@extends('seller.seller-index')
@push('style')
    <title>Seller Dashboard | GreenBasket</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/seller/dashboard.css') }}">
@endpush

@section('main-content')

    <div class="content-area">
        <!-- Welcome Message -->
        <div class="welcome-card">
            <div class="welcome-title">Welcome back, {{ Auth::guard('seller')->user()->name}}!👋</div>
            <div class="welcome-subtitle">Here's what's happening with your store today</div>
            <div class="welcome-stats">
                <div class="welcome-stat">
                    <div class="welcome-stat-value">{{ $totalOrders }}</div>
                    <div class="welcome-stat-label">New Orders Today</div>
                </div>
                <div class="welcome-stat">
                    <div class="welcome-stat-value">৳{{ $totalRevenue }}</div>
                    <div class="welcome-stat-label">Today's Revenue</div>
                </div>
                <div class="welcome-stat">
                    <div class="welcome-stat-value">{{$totalProducts}}</div>
                    <div class="welcome-stat-label">Active Products</div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="stats-grid">
            <!-- Total Revenue Card -->
            <div class="stat-card revenue">
                <div class="stat-header">
                    <div class="stat-title">Total Revenue</div>
                    <div class="stat-icon revenue">💰</div>
                </div>
                <div class="stat-value">৳{{ $totalRevenue }}</div>
                <div class="stat-change positive">
                    ↗ +12.5% <span style="font-weight: normal;">from last month</span>
                </div>
                <div class="stat-meta">Last updated: 2 hours ago</div>
            </div>

            <!-- New Orders Card -->
            <div class="stat-card orders">
                <div class="stat-header">
                    <div class="stat-title">New Orders</div>
                    <div class="stat-icon orders">🛒</div>
                </div>
                <div class="stat-value">{{ $totalOrders }}</div>
                <div class="stat-change positive">
                    ↗ +8.2% <span style="font-weight: normal;">from last week</span>
                </div>
                <div class="stat-meta">{{ $totalOrders }} pending fulfillment</div>
            </div>

            <!-- Total Products Card -->
            <div class="stat-card products">
                <div class="stat-header">
                    <div class="stat-title">Total Products</div>
                    <div class="stat-icon products">📦</div>
                </div>
                <div class="stat-value">{{$totalProducts}}</div>
                <div class="stat-change positive">
                    ↗ +3 <span style="font-weight: normal;">new this week</span>
                </div>
                <div class="stat-meta">{{ $totalProducts }} out of stock</div>
            </div>

            <!-- Customer Ratings Card -->
            <div class="stat-card ratings">
                <div class="stat-header">
                    <div class="stat-title">Customer Ratings</div>
                    <div class="stat-icon ratings">⭐</div>
                </div>
                <div class="stat-value">{{ $averageRating }}</div>
                <div class="star-rating">
                    @for ($i = 0; $i < floor($averageRating); $i++)
                        <span class="star">★</span>
                    @endfor
                    <span class="rating-text">Based on 342 reviews</span>
                </div>

                <div class="stat-meta">24 new reviews this week</div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="charts-grid">
            <!-- Sales Overview Chart -->
            <div class="chart-card">
                <div class="chart-header">
                    <div class="chart-title">Sales Overview</div>
                    <div class="chart-period">Last 30 days</div>
                </div>
                <div class="chart-content">
                    <div class="chart-container">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Product Categories Distribution -->
            <div class="chart-card">
                <div class="chart-header">
                    <div class="chart-title">Product Categories</div>
                    <div class="chart-period">Distribution</div>
                </div>
                <div class="chart-content">
                    <div class="chart-container small">
                        <canvas id="categoriesChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <a href="#" class="action-btn">
                <div class="action-icon">➕</div>
                <div class="action-text">Add Product</div>
            </a>
            <a href="#" class="action-btn">
                <div class="action-icon">📋</div>
                <div class="action-text">View Orders</div>
            </a>
            <a href="#" class="action-btn">
                <div class="action-icon">📊</div>
                <div class="action-text">Analytics</div>
            </a>
            <a href="#" class="action-btn">
                <div class="action-icon">⚙️</div>
                <div class="action-text">Settings</div>
            </a>
        </div>
    </div>
    </main>
    </div>

@endsection