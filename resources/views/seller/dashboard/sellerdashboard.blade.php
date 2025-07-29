<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmConnect - Farmer Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4CAF50;
            --primary-dark: #388E3C;
            --secondary: #FF9800;
            --accent: #8BC34A;
            --light: #F5F5F5;
            --dark: #333333;
            --background: #F9F6F0;
            --card: #FFFFFF;
            --text: #424242;
            --success: #4CAF50;
            --warning: #FFC107;
            --danger: #F44336;
            --earth: #795548;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--background);
            color: var(--text);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 20px 0;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            height: 100%;
            z-index: 100;
            overflow-y: auto;
        }

        .logo-container {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .logo {
            background-color: white;
            color: var(--primary);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-right: 10px;
        }

        .logo-text {
            font-size: 22px;
            font-weight: 700;
        }

        .nav-item {
            padding: 15px 30px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .nav-item:hover,
        .nav-item.active {
            background: rgba(255, 255, 255, 0.1);
            border-left: 4px solid var(--secondary);
        }

        .nav-item i {
            margin-right: 15px;
            font-size: 18px;
            width: 24px;
            text-align: center;
        }

        .farmer-info {
            padding: 20px;
            background: rgba(0, 0, 0, 0.1);
            margin-top: auto;
            display: flex;
            align-items: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .farmer-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: white;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-right: 15px;
            overflow: hidden;
        }

        .farmer-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .farmer-details {
            flex: 1;
        }

        .farmer-name {
            font-weight: 600;
            margin-bottom: 3px;
        }

        .farmer-type {
            font-size: 12px;
            opacity: 0.8;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .welcome h1 {
            font-size: 28px;
            color: var(--dark);
            margin-bottom: 5px;
        }

        .welcome p {
            color: var(--text);
            opacity: 0.7;
        }

        .search-bar {
            position: relative;
            width: 300px;
        }

        .search-bar input {
            width: 100%;
            padding: 12px 20px 12px 45px;
            border-radius: 30px;
            border: 1px solid #ddd;
            background-color: var(--card);
            font-size: 14px;
            outline: none;
            transition: all 0.3s;
        }

        .search-bar input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(139, 195, 74, 0.2);
        }

        .search-bar i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 12px 20px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            display: flex;
            align-items: center;
            transition: all 0.3s;
        }

        .btn i {
            margin-right: 8px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: rgba(76, 175, 80, 0.1);
        }

        /* Dashboard Grid */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background-color: var(--card);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .stat-card {
            display: flex;
            flex-direction: column;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .bg-green {
            background-color: rgba(76, 175, 80, 0.15);
            color: var(--primary);
        }

        .bg-orange {
            background-color: rgba(255, 152, 0, 0.15);
            color: var(--secondary);
        }

        .bg-blue {
            background-color: rgba(33, 150, 243, 0.15);
            color: #2196F3;
        }

        .bg-brown {
            background-color: rgba(121, 85, 72, 0.15);
            color: var(--earth);
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 14px;
            color: var(--text);
            opacity: 0.7;
        }

        .stat-trend {
            margin-top: 10px;
            font-size: 13px;
            display: flex;
            align-items: center;
        }

        .trend-up {
            color: var(--success);
        }

        .trend-down {
            color: var(--danger);
        }

        /* Charts Section */
        .charts-section {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .chart-card {
            padding: 25px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: var(--dark);
        }

        .chart-container {
            height: 300px;
            position: relative;
        }

        /* Products Table */
        .products-section {
            margin-bottom: 30px;
        }

        .products-table {
            width: 100%;
            border-collapse: collapse;
            background-color: var(--card);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .products-table th {
            background-color: rgba(76, 175, 80, 0.1);
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            color: var(--dark);
        }

        .products-table td {
            padding: 15px 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .products-table tr:last-child td {
            border-bottom: none;
        }

        .products-table tr:hover {
            background-color: rgba(139, 195, 74, 0.05);
        }

        .product-info {
            display: flex;
            align-items: center;
        }

        .product-image {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background-color: #f5f5f5;
            margin-right: 15px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-name {
            font-weight: 600;
            margin-bottom: 3px;
        }

        .product-category {
            font-size: 12px;
            color: #888;
        }

        .stock-indicator {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .stock-high {
            background-color: rgba(76, 175, 80, 0.15);
            color: var(--primary);
        }

        .stock-medium {
            background-color: rgba(255, 152, 0, 0.15);
            color: var(--secondary);
        }

        .stock-low {
            background-color: rgba(244, 67, 54, 0.15);
            color: var(--danger);
        }

        .action-cell {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.05);
            cursor: pointer;
            transition: all 0.3s;
        }

        .action-btn:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Footer */
        .dashboard-footer {
            text-align: center;
            padding: 20px;
            color: var(--text);
            opacity: 0.7;
            font-size: 14px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Chart styling */
        .chart-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
            font-size: 16px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="white"/><path d="M0,100 L20,60 L40,80 L60,40 L80,70 L100,30" fill="none" stroke="%234CAF50" stroke-width="2"/></svg>') no-repeat center;
            background-size: contain;
        }

        .doughnut-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #aaa;
            font-size: 16px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200"><circle cx="100" cy="100" r="90" fill="none" stroke="%23f0f0f0" stroke-width="20"/><path d="M100,10 A90,90 0 0,1 190,100 A90,90 0 0,1 100,190 A90,90 0 0,1 10,100 A90,90 0 0,1 100,10" fill="none" stroke="%234CAF50" stroke-width="20" stroke-dasharray="565,565" stroke-dashoffset="0"/></svg>') no-repeat center;
            background-size: contain;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .dashboard-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .charts-section {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .logo-text,
            .nav-text,
            .farmer-details {
                display: none;
            }

            .logo-container {
                justify-content: center;
                padding: 20px 0;
            }

            .logo {
                margin-right: 0;
            }

            .nav-item {
                justify-content: center;
                padding: 20px 0;
            }

            .nav-item i {
                margin-right: 0;
                font-size: 20px;
            }

            .farmer-info {
                justify-content: center;
                padding: 15px 0;
            }

            .farmer-avatar {
                margin-right: 0;
            }

            .main-content {
                margin-left: 70px;
            }

            .top-bar {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .search-bar {
                width: 100%;
            }

            .action-buttons {
                width: 100%;
                justify-content: space-between;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-container">
            <div class="logo">
                <i class="fas fa-leaf"></i>
            </div>
            <div class="logo-text">FarmConnect</div>
        </div>

        <div class="nav-item active">
            <i class="fas fa-home"></i>
            <span class="nav-text">Dashboard</span>
        </div>
        <div class="nav-item">
            <i class="fas fa-shopping-basket"></i>
            <span class="nav-text">Products</span>
        </div>
        <div class="nav-item">
            <i class="fas fa-file-invoice-dollar"></i>
            <span class="nav-text">Orders</span>
        </div>
        <div class="nav-item">
            <i class="fas fa-chart-line"></i>
            <span class="nav-text">Analytics</span>
        </div>
        <div class="nav-item">
            <i class="fas fa-truck"></i>
            <span class="nav-text">Delivery</span>
        </div>
        <div class="nav-item">
            <i class="fas fa-comments"></i>
            <span class="nav-text">Messages</span>
        </div>
        <div class="nav-item">
            <i class="fas fa-cog"></i>
            <span class="nav-text">Settings</span>
        </div>

        <div class="farmer-info">
            <div class="farmer-avatar">
                <i class="fas fa-user"></i>
            </div>
            <div class="farmer-details">
                <div class="farmer-name">Robert Farmington</div>
                <div class="farmer-type">Organic Produce Farm</div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="top-bar">
            <div class="welcome">
                <h1>Welcome, Robert!</h1>
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
                <div class="stat-value">$3,842</div>
                <div class="stat-label">Total Revenue</div>
                <div class="stat-trend trend-up">
                    <i class="fas fa-arrow-up"></i> 12.5% from last month
                </div>
            </div>

            <div class="card stat-card">
                <div class="stat-icon bg-orange">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="stat-value">42</div>
                <div class="stat-label">New Orders</div>
                <div class="stat-trend trend-up">
                    <i class="fas fa-arrow-up"></i> 8.3% from last week
                </div>
            </div>

            <div class="card stat-card">
                <div class="stat-icon bg-blue">
                    <i class="fas fa-box-open"></i>
                </div>
                <div class="stat-value">28</div>
                <div class="stat-label">Products</div>
                <div class="stat-trend trend-down">
                    <i class="fas fa-arrow-down"></i> 2 products out of stock
                </div>
            </div>

            <div class="card stat-card">
                <div class="stat-icon bg-brown">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-value">4.8/5</div>
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
                    <tr>
                        <td>
                            <div class="product-info">
                                <div class="product-image">
                                    <i class="fas fa-apple-alt" style="color: #d32f2f; font-size: 24px;"></i>
                                </div>
                                <div>
                                    <div class="product-name">Organic Apples</div>
                                    <div class="product-category">Fruits</div>
                                </div>
                            </div>
                        </td>
                        <td>$3.99/kg</td>
                        <td>
                            <span class="stock-indicator stock-high">In Stock (42kg)</span>
                        </td>
                        <td>
                            <i class="fas fa-star" style="color: gold;"></i> 4.7
                        </td>
                        <td class="action-cell">
                            <div class="action-btn">
                                <i class="fas fa-edit"></i>
                            </div>
                            <div class="action-btn">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="product-info">
                                <div class="product-image">
                                    <i class="fas fa-carrot" style="color: #ff9800; font-size: 24px;"></i>
                                </div>
                                <div>
                                    <div class="product-name">Fresh Carrots</div>
                                    <div class="product-category">Vegetables</div>
                                </div>
                            </div>
                        </td>
                        <td>$2.49/kg</td>
                        <td>
                            <span class="stock-indicator stock-medium">Low Stock (8kg)</span>
                        </td>
                        <td>
                            <i class="fas fa-star" style="color: gold;"></i> 4.5
                        </td>
                        <td class="action-cell">
                            <div class="action-btn">
                                <i class="fas fa-edit"></i>
                            </div>
                            <div class="action-btn">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="product-info">
                                <div class="product-image">
                                    <i class="fas fa-seedling" style="color: #4CAF50; font-size: 24px;"></i>
                                </div>
                                <div>
                                    <div class="product-name">Spinach Leaves</div>
                                    <div class="product-category">Greens</div>
                                </div>
                            </div>
                        </td>
                        <td>$4.25/kg</td>
                        <td>
                            <span class="stock-indicator stock-high">In Stock (25kg)</span>
                        </td>
                        <td>
                            <i class="fas fa-star" style="color: gold;"></i> 4.9
                        </td>
                        <td class="action-cell">
                            <div class="action-btn">
                                <i class="fas fa-edit"></i>
                            </div>
                            <div class="action-btn">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="product-info">
                                <div class="product-image">
                                    <i class="fas fa-cheese" style="color: #ffeb3b; font-size: 24px;"></i>
                                </div>
                                <div>
                                    <div class="product-name">Farmhouse Cheese</div>
                                    <div class="product-category">Dairy</div>
                                </div>
                            </div>
                        </td>
                        <td>$8.75/unit</td>
                        <td>
                            <span class="stock-indicator stock-low">Out of Stock</span>
                        </td>
                        <td>
                            <i class="fas fa-star" style="color: gold;"></i> 4.8
                        </td>
                        <td class="action-cell">
                            <div class="action-btn">
                                <i class="fas fa-edit"></i>
                            </div>
                            <div class="action-btn">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="dashboard-footer">
            FarmConnect Seller Dashboard • © 2023 All Rights Reserved
        </div>
    </div>

    <script>
        // Simple interactivity for the dashboard
        document.addEventListener('DOMContentLoaded', function() {
            // Set active nav item
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    navItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Add ripple effect to buttons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    ripple.classList.add('ripple');
                    const rect = button.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.style.backgroundColor = 'rgba(255,255,255,0.4)';

                    button.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });
    </script>
</body>

</html>
