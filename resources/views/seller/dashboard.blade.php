@extends('seller.seller-index')
@push('style')
    <title>Seller Dashboard | GreenBasket</title>
     <link rel="stylesheet" href="{{ asset('css/hridoy/seller/dashboard.css') }}">
@endpush

@section('main-content')
    <!-- Main Content -->
    <div class="main-content">
        <div class="top-bar">
            <div class="welcome">
                <h1>Welcome, {{ Auth::guard('seller')->user()->name }}👋</h1>
                <p>Here's your farming dashboard for today</p>
            </div>

            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search products, orders, customers...">
            </div>

            <div class="action-buttons">
                <button class="btn btn-outline">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Product
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="dashboard-grid">
            <div class="card stat-card">
                <div class="stat-icon bg-green">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-value">৳{{ $totalRevenue }}</div>
                <div class="stat-label">Total Revenue</div>
                <div class="stat-trend trend-up">
                    <i class="fas fa-arrow-up"></i> 0% from last month
                </div>
            </div>

            <div class="card stat-card">
                <div class="stat-icon bg-orange">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="stat-value">{{ $totalOrders }}</div>
                <div class="stat-label">New Orders</div>
                <div class="stat-trend trend-up">
                    <i class="fas fa-arrow-up"></i> {{ $totalOrders }}% from last week
                </div>
            </div>

            <div class="card stat-card">
                <div class="stat-icon bg-blue">
                    <i class="fas fa-box-open"></i>
                </div>
                <div class="stat-value">{{ $totalProducts }}</div>
                <div class="stat-label">Products</div>
                <div class="stat-trend trend-down">
                    <i class="fas fa-arrow-down"></i> 2 products out of stock
                </div>
            </div>

            <div class="card stat-card">
                <div class="stat-icon bg-brown">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-value">{{ $averageRating }}/5</div>
                <div class="stat-label">Customer Rating</div>
                <div class="stat-trend trend-up">
                    <i class="fas fa-arrow-up"></i> 0.2 improvement
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="charts-section">
            <div class="card chart-card">
                <div class="section-header">
                    <div class="section-title">Sales Overview</div>
                    <select style="padding: 8px 15px; border-radius: 20px; border: 1px solid #ddd; background: white;">
                        <option>Last 7 Days</option>
                        <option>Last 30 Days</option>
                        <option>Last 90 Days</option>
                    </select>
                </div>
                <div class="chart-container">
                    <div class="chart-placeholder">Sales Chart Visualization</div>
                </div>
            </div>

            <div class="card chart-card">
                <div class="section-header">
                    <div class="section-title">Product Categories</div>
                </div>
                <div class="chart-container">
                    <div class="doughnut-placeholder">Category Distribution</div>
                </div>
            </div>
        </div>

        <!-- Products Table -->
        <div class="products-section">
            <div class="section-header">
                <div class="section-title">Your Products</div>
                <button class="btn btn-outline">
                    <i class="fas fa-plus"></i> Add New
                </button>
            </div>

            <table class="products-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Rating</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>
                                <div class="product-info">
                                    <div class="product-image">
                                        @if ($product->image_url)
                                            <img src="{{ $product->image_url }}" alt="Product Image"
                                                style="">
                                        @else
                                            <i class="fas fa-box" style="font-size: 24px;"></i>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="product-name">{{ $product->name }}</div>
                                        <div class="product-category">{{ $product->category->name ?? 'Uncategorized' }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>${{ number_format($product->price, 2) }}/kg</td>
                            <td>
                                @if ($product->stock_quantity > 20)
                                    <span class="stock-indicator stock-high">In Stock ({{ $product->stock_quantity }}kg)</span>
                                @elseif ($product->stock_quantity > 0)
                                    <span class="stock-indicator stock-medium">Low Stock
                                        ({{ $product->stock_quantity }}kg)</span>
                                @else
                                    <span class="stock-indicator stock-low">Out of Stock</span>
                                @endif
                            </td>
                            <td>
                                @php
                                    $avgRating = round($product->reviews->avg('rating'), 1);
                                @endphp
                                <i class="fas fa-star" style="color: gold;"></i> {{ $avgRating ?? 'N/A' }}
                            </td>
                            <td class="action-cell">
                                <a href="{{ route('seller.products.edit', $product->id) }}" class="action-btn" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="action-btn" title="Stats">
                                    <i class="fas fa-chart-line"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No products available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

        
    </div>

@endsection