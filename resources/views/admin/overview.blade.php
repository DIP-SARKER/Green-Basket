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
                <div class="value">৳24,580</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 12.5% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-sack-dollar"></i></div>
        </div>

        <!-- 📦 ORDERS -->
        <div class="stat-card card-2">
            <div class="stat-info">
                <h3>Total Orders</h3>
                <div class="value">1,240</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 8.3% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-box-open"></i></div>
        </div>

        <div class="stat-card card-3">
            <div class="stat-info">
                <h3>Pending Orders</h3>
                <div class="value">134</div>
                <div class="trend down">
                    <i class="fas fa-arrow-down"></i> 1.2% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-hourglass-half"></i></div>
        </div>

        <div class="stat-card card-4">
            <div class="stat-info">
                <h3>Processing Orders</h3>
                <div class="value">87</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 3.4% from last week
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-sync-alt"></i></div>
        </div>

        <div class="stat-card card-5">
            <div class="stat-info">
                <h3>Cancelled Orders</h3>
                <div class="value">67</div>
                <div class="trend down">
                    <i class="fas fa-arrow-down"></i> 0.8% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-times-circle"></i></div>
        </div>

        <!-- 🛒 PRODUCTS -->
        <div class="stat-card card-17">
            <div class="stat-info">
                <h3>Total Products</h3>
                <div class="value">5,420</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 9.8% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-cubes"></i></div>
        </div>

        <div class="stat-card card-18">
            <div class="stat-info">
                <h3>Active Products</h3>
                <div class="value">4,850</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 7.1% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-box"></i></div>
        </div>

        <div class="stat-card card-19">
            <div class="stat-info">
                <h3>Out of Stock Products</h3>
                <div class="value">320</div>
                <div class="trend down">
                    <i class="fas fa-arrow-down"></i> 3.4% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-exclamation-triangle"></i></div>
        </div>

        <div class="stat-card card-20">
            <div class="stat-info">
                <h3>New Products</h3>
                <div class="value">215</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 11.2% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-plus-circle"></i></div>
        </div>

        <!-- 👨‍🌾 FARMERS -->
        <div class="stat-card card-6">
            <div class="stat-info">
                <h3>Total Farmers</h3>
                <div class="value">527</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 12.5% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-users"></i></div>
        </div>

        <div class="stat-card card-7">
            <div class="stat-info">
                <h3>Active Farmers</h3>
                <div class="value">51</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 7.2% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-user-check"></i></div>
        </div>

        <div class="stat-card card-8">
            <div class="stat-info">
                <h3>New Farmers</h3>
                <div class="value">342</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 18.9% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-seedling"></i></div>
        </div>

        <!-- 👥 CUSTOMERS -->
        <div class="stat-card card-9">
            <div class="stat-info">
                <h3>Total Customers</h3>
                <div class="value">32,134</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 8.7% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-users"></i></div>
        </div>

        <div class="stat-card card-10">
            <div class="stat-info">
                <h3>Active Customers</h3>
                <div class="value">1,512</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 5.3% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-user-check"></i></div>
        </div>

        <div class="stat-card card-11">
            <div class="stat-info">
                <h3>New Customers</h3>
                <div class="value">243</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 12.1% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-user-plus"></i></div>
        </div>

        <!-- 🏷️ DISCOUNTS -->
        <div class="stat-card card-14">
            <div class="stat-info">
                <h3>Total Discounts</h3>
                <div class="value">20</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 4.5% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-tags"></i></div>
        </div>

        <div class="stat-card card-15">
            <div class="stat-info">
                <h3>Active Discounts</h3>
                <div class="value">5</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 6.7% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-percentage"></i></div>
        </div>

        <div class="stat-card card-16">
            <div class="stat-info">
                <h3>Expired Discounts</h3>
                <div class="value">15</div>
                <div class="trend down">
                    <i class="fas fa-arrow-down"></i> 2.3% from last month
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-ban"></i></div>
        </div>

        <!-- 🎟️ TICKETS -->
        <div class="stat-card card-12">
            <div class="stat-info">
                <h3>Total Tickets</h3>
                <div class="value">248</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 8.2% from last week
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-ticket-alt"></i></div>
        </div>

        <div class="stat-card card-13">
            <div class="stat-info">
                <h3>Open Tickets</h3>
                <div class="value">42</div>
                <div class="trend down">
                    <i class="fas fa-arrow-down"></i> 3.1% from last week
                </div>
            </div>
            <div class="stat-icon"><i class="fas fa-envelope-open"></i></div>
        </div>

    </div>



    <!-- Charts and Tables -->
    <div class="dashboard-content">
        <div class="top-products">
            <div class="section-header">
                <h2>Top Selling Products</h2>
                <a href="#">View All <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Product 1: Fish -->
            <div class="product-item">
                <div class="product-img"><i class="fas fa-fish"></i></div>
                <div class="product-info">
                    <h3>Ilish (Hilsa)</h3>
                    <p>From Padma River, Barisal | ৳1100/kg</p>
                    <small>River Catch</small>
                </div>
                <div class="product-sales">257 sales</div>
            </div>

            <!-- Product 2: Vegetable -->
            <div class="product-item">
                <div class="product-img"><i class="fas fa-carrot"></i></div>
                <div class="product-info">
                    <h3>Organic Carrots</h3>
                    <p>From Johnson Family Farm | $2.49/lb</p>
                    <small>Organic</small>
                </div>
                <div class="product-sales">181 sales</div>
            </div>

            <!-- Product 3: Fruit -->
            <div class="product-item">
                <div class="product-img"><i class="fas fa-apple-alt"></i></div>
                <div class="product-info">
                    <h3>Rajshahi Mangoes</h3>
                    <p>From Bagha Orchards | ৳120/kg</p>
                    <small>Naturally Ripened</small>
                </div>
                <div class="product-sales">126 sales</div>
            </div>

            <!-- Product 4: Meat -->
            <div class="product-item">
                <div class="product-img"><i class="fas fa-drumstick-bite"></i></div>
                <div class="product-info">
                    <h3>Deshi Chicken (Free Range)</h3>
                    <p>From Tangail Poultry Farm | ৳380/kg</p>
                    <small>No Antibiotics</small>
                </div>
                <div class="product-sales">93 sales</div>
            </div>

            <!-- Product 5: Dairy/Leafy Veg -->
            <div class="product-item">
                <div class="product-img"><i class="fas fa-leaf"></i></div>
                <div class="product-info">
                    <h3>Fresh Spinach</h3>
                    <p>From Green Valley Acres | $3.99/bunch</p>
                    <small>Organic</small>
                </div>
                <div class="product-sales">57 sales</div>
            </div>
        </div>
        <div class="recent-orders">
            <div class="section-header">
                <h2>Recent Orders</h2>
                <a href="#">View All <i class="fas fa-arrow-right"></i></a>
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
                    <tr>
                        <td>#ORD-7841</td>
                        <td>Sarah Johnson</td>
                        <td>Oct 15, 2023</td>
                        <td>৳128.50</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td>#ORD-7840</td>
                        <td>Michael Brown</td>
                        <td>Oct 14, 2023</td>
                        <td>৳75.25</td>
                        <td><span class="status processing">Processing</span></td>
                    </tr>
                    <tr>
                        <td>#ORD-7839</td>
                        <td>Emma Davis</td>
                        <td>Oct 14, 2023</td>
                        <td>৳210.00</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>#ORD-7838</td>
                        <td>James Wilson</td>
                        <td>Oct 13, 2023</td>
                        <td>৳89.99</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td>#ORD-7837</td>
                        <td>Olivia Taylor</td>
                        <td>Oct 12, 2023</td>
                        <td>৳156.75</td>
                        <td><span class="status cancelled">Cancelled</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
@push('script')
    <script></script>
@endpush
