@extends('admin.dashboard')
@push('style')
    <link rel="stylesheet" href="{{ asset('css/dip/overview.css') }}">
@endpush
@push('title')
    <h1>OverView</h1>
@endpush
@section('dashboard-content')
    <div class="stats-row">
        <div class="stat-card card-1">
            <div class="stat-info">
                <h3>Total Revenue</h3>
                <div class="value">৳24,580</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 12.5% from last month
                </div>
            </div>
            <div class="stat-icon">
                <i class="fas fa-sack-dollar"></i>
            </div>
        </div>

        <div class="stat-card card-2">
            <div class="stat-info">
                <h3>Orders</h3>
                <div class="value">1,240</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 8.3% from last month
                </div>
            </div>
            <div class="stat-icon">
                <i class="fas fa-box-open"></i>
            </div>
        </div>

        <div class="stat-card card-3">
            <div class="stat-info">
                <h3>Farmers</h3>
                <div class="value">5,840</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 5.2% from last month
                </div>
            </div>
            <div class="stat-icon">
                <i class="fas fa-tractor"></i>
            </div>
        </div>

        <div class="stat-card card-4">
            <div class="stat-info">
                <h3>Customers</h3>
                <div class="value">7,210</div>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 6.8% from last month
                </div>
            </div>
            <div class="stat-icon">
                <i class="fas fa-user-friends"></i>
            </div>
        </div>

        <div class="stat-card card-5">
            <div class="stat-info">
                <h3>Pending Orders</h3>
                <div class="value">134</div>
                <div class="trend down">
                    <i class="fas fa-arrow-down"></i> 1.2% from last month
                </div>
            </div>
            <div class="stat-icon">
                <i class="fas fa-hourglass-half"></i>
            </div>
        </div>

        <div class="stat-card card-6">
            <div class="stat-info">
                <h3>Pending Orders Amount</h3>
                <div class="value">৳1,420</div>
                <div class="trend down">
                    <i class="fas fa-arrow-down"></i> 1.2% from last month
                </div>
            </div>
            <div class="stat-icon">
                <i class="fas fa-coins"></i>
            </div>
        </div>

        <div class="stat-card card-7">
            <div class="stat-info">
                <h3>Cancelled Orders</h3>
                <div class="value">67</div>
                <div class="trend down">
                    <i class="fas fa-arrow-down"></i> 0.8% from last month
                </div>
            </div>
            <div class="stat-icon">
                <i class="fas fa-times-circle"></i>
            </div>
        </div>

        <div class="stat-card card-8">
            <div class="stat-info">
                <h3>Cancelled Orders Amount</h3>
                <div class="value">৳620</div>
                <div class="trend down">
                    <i class="fas fa-arrow-down"></i> 0.8% from last month
                </div>
            </div>
            <div class="stat-icon">
                <i class="fas fa-money-bill-wave"></i>
            </div>
        </div>
    </div>

    <!-- Charts and Tables -->
    <div class="dashboard-content">
        <div class="chart-container">
            <div class="section-header">
                <h2>Revenue Overview</h2>
                <a href="#">View Report <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="chart-filters">
                <button class="chart-filter-btn" data-period="week">Weekly</button>
                <button class="chart-filter-btn" data-period="month">Monthly</button>
                <button class="chart-filter-btn active" data-period="quarter">Quarterly</button>
            </div>
            <div class="chart-wrapper">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>

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
@endsection
@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Chart initialization
            const ctx = document.getElementById('revenueChart').getContext('2d');

            // Chart data
            const chartData = {
                week: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    data: [18200, 21500, 19300, 24700, 26100, 30500, 28900],
                    label: 'Weekly Revenue'
                },
                month: {
                    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                    data: [98000, 105000, 112000, 124000],
                    label: 'Monthly Revenue'
                },
                quarter: {
                    labels: ['Jul', 'Aug', 'Sep', 'Oct'],
                    data: [425000, 437000, 468000, 502000],
                    label: 'Quarterly Revenue'
                }
            };

            // Create the chart
            const revenueChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: chartData.quarter.labels,
                    datasets: [{
                        label: chartData.quarter.label + ' (in ৳)',
                        data: chartData.quarter.data,
                        backgroundColor: 'rgba(46, 125, 50, 0.1)',
                        borderColor: 'rgba(46, 125, 50, 1)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(46, 125, 50, 1)',
                        pointRadius: 5,
                        pointHoverRadius: 7,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return `৳${context.parsed.y.toLocaleString()}`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return '৳' + value.toLocaleString();
                                }
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Chart period switching
            document.querySelectorAll('.chart-filter-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    document.querySelectorAll('.chart-filter-btn').forEach(b =>
                        b.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    // Get period
                    const period = this.dataset.period;

                    // Update chart
                    revenueChart.data.labels = chartData[period].labels;
                    revenueChart.data.datasets[0].data = chartData[period].data;
                    revenueChart.data.datasets[0].label = chartData[period].label + ' (in ৳)';
                    revenueChart.update();
                });
            });
        });
    </script>
@endpush
