@extends('admin.dashboard')
@push('style')
    <link rel="stylesheet" href="{{ asset('css/dip/overview.css') }}">
@endpush
@push('title')
    <h1>OverView</h1>
@endpush
@section('dashboard-content')
    <div class="stats-row">

        <!-- 💰 REVENUE -->
        <div class="stat-card card-1">
            <div class="stat-info">
                <h3>Total Revenue</h3>
                <div class="value">৳{{ number_format($totalRevenue, 2) }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-sack-dollar"></i></div>
        </div>

        <!-- 📦 ORDERS -->
        <div class="stat-card card-2">
            <div class="stat-info">
                <h3>Total Orders</h3>
                <div class="value">{{ $totalOrders }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-box-open"></i></div>
        </div>

        <div class="stat-card card-3">
            <div class="stat-info">
                <h3>Pending Orders</h3>
                <div class="value">{{ $pendingOrders }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-hourglass-half"></i></div>
        </div>

        <div class="stat-card card-5">
            <div class="stat-info">
                <h3>Cancelled Orders</h3>
                <div class="value">{{ $cancelledOrders }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-times-circle"></i></div>
        </div>

        <!-- 🛒 PRODUCTS -->
        <div class="stat-card card-17">
            <div class="stat-info">
                <h3>Total Products</h3>
                <div class="value">{{ $totalProducts }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-cubes"></i></div>
        </div>

        <div class="stat-card card-18">
            <div class="stat-info">
                <h3>Active Products</h3>
                <div class="value">{{ $activeProducts }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-box"></i></div>
        </div>

        <div class="stat-card card-19">
            <div class="stat-info">
                <h3>Out of Stock Products</h3>
                <div class="value">{{ $outOfStockProducts }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-exclamation-triangle"></i></div>
        </div>

        <!-- 👨‍🌾 FARMERS -->
        <div class="stat-card card-6">
            <div class="stat-info">
                <h3>Total Farmers</h3>
                <div class="value">{{ $totalFarmers }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-users"></i></div>
        </div>

        <div class="stat-card card-7">
            <div class="stat-info">
                <h3>Active Farmers</h3>
                <div class="value">{{ $activeFarmers }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-user-check"></i></div>
        </div>

        <!-- 👥 CUSTOMERS -->
        <div class="stat-card card-9">
            <div class="stat-info">
                <h3>Total Customers</h3>
                <div class="value">{{ $totalCustomers }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-users"></i></div>
        </div>

        <!-- 🏷️ DISCOUNTS -->

        <div class="stat-card card-15">
            <div class="stat-info">
                <h3>Active Discounts</h3>
                <div class="value">{{ $activeDiscounts }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-percentage"></i></div>
        </div>

        <!-- 🎟️ TICKETS -->
        <div class="stat-card card-13">
            <div class="stat-info">
                <h3>Open Tickets</h3>
                <div class="value">{{ $openTickets }}</div>
            </div>
            <div class="stat-icon"><i class="fas fa-envelope-open"></i></div>
        </div>

    </div>



    <!-- Charts and Tables -->
    <div class="dashboard-content">
        <div class="top-products">
            <div class="section-header">
                <h2>Top Selling Products</h2>
            </div>

            @foreach ($topProducts as $product)
                <div class="product-item">
                    <div class="product-info">
                        <h3>{{ $product['name'] }}</h3>
                        <p>{{ $product['details'] }} | ৳{{ $product['price'] }}/kg</p>
                        <small>Best Seller</small>
                    </div>
                    <div class="product-sales">{{ $product['sales'] }} sales</div>
                </div>
            @endforeach

        </div>
        <div class="recent-orders">
            <div class="section-header">
                <h2>Recent Orders</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentOrders as $order)
                        <tr>
                            <td>#ORD-{{ $order->id }}</td>
                            <td>{{ $order->customer->name ?? 'Unknown' }}</td>
                            <td>{{ $order->created_at->format('M d, Y') }}</td>
                            <td>৳{{ number_format($order->total_price, 2) }}</td>
                            <td><span class="status {{ strtolower($order->status) }}">{{ ucfirst($order->status) }}</span>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
@push('script')
    <script></script>
@endpush
