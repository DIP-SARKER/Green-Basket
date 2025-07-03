<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Management | E-commerce Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #2e7d32;
            --primary-light: #60ad5e;
            --primary-dark: #005005;
            --text: #333333;
            --text-light: #666666;
            --bg: #f8f8f8;
            --white: #ffffff;
            --border: #e0e0e0;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            --success: #4caf50;
            --warning: #ff9800;
            --danger: #f44336;
            --info: #2196f3;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: var(--white);
            box-shadow: var(--shadow);
            padding: 1.5rem 0;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 0 1.5rem 1.5rem;
            border-bottom: 1px solid var(--border);
        }

        .sidebar-header h2 {
            color: var(--primary);
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .sidebar-header h2 i {
            color: var(--primary-light);
        }

        .nav-links {
            padding: 1.5rem 0;
        }

        .nav-links li {
            list-style: none;
            margin-bottom: 0.25rem;
        }

        .nav-links a {
            display: flex;
            align-items: center;
            padding: 0.8rem 1.5rem;
            color: var(--text);
            text-decoration: none;
            transition: all 0.2s ease;
            font-weight: 500;
        }

        .nav-links a:hover {
            background: rgba(46, 125, 50, 0.05);
            color: var(--primary);
        }

        .nav-links a.active {
            background: rgba(46, 125, 50, 0.1);
            color: var(--primary);
            border-left: 4px solid var(--primary);
        }

        .nav-links a i {
            width: 30px;
            font-size: 1.1rem;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 1.5rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border);
        }

        .header h1 {
            color: var(--primary-dark);
            font-size: 1.8rem;
        }

        .header-actions {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--text);
        }

        .btn-outline:hover {
            background: rgba(46, 125, 50, 0.05);
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-info .notification {
            position: relative;
            cursor: pointer;
        }

        .user-info .notification i {
            font-size: 1.3rem;
            color: var(--text-light);
        }

        .user-info .notification .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--danger);
            color: white;
            font-size: 0.7rem;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--primary-light);
        }

        .user-profile .name {
            font-weight: 600;
            color: var(--text);
        }

        .user-profile .role {
            font-size: 0.8rem;
            color: var(--text-light);
        }

        /* Products Management */
        .products-section {
            background: var(--white);
            border-radius: 10px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            border-bottom: 1px solid var(--border);
        }

        .section-header h2 {
            font-size: 1.25rem;
            color: var(--text);
        }

        .controls {
            display: flex;
            gap: 1rem;
        }

        .search-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-box input {
            padding: 0.6rem 1rem 0.6rem 2.5rem;
            border: 1px solid var(--border);
            border-radius: 4px;
            font-size: 0.9rem;
            width: 250px;
        }

        .search-box i {
            position: absolute;
            left: 1rem;
            color: var(--text-light);
        }

        .filter-btn {
            background: white;
            border: 1px solid var(--border);
            border-radius: 4px;
            padding: 0.6rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text);
            cursor: pointer;
            transition: all 0.2s;
        }

        .filter-btn:hover {
            background: rgba(46, 125, 50, 0.05);
        }

        /* Products Table */
        .products-table {
            width: 100%;
            border-collapse: collapse;
        }

        .products-table th {
            text-align: left;
            padding: 1rem 1.5rem;
            background: rgba(46, 125, 50, 0.05);
            color: var(--text-light);
            font-weight: 500;
            font-size: 0.9rem;
        }

        .products-table td {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid var(--border);
            font-size: 0.9rem;
        }

        .products-table tr:last-child td {
            border-bottom: none;
        }

        .products-table tr:hover {
            background: rgba(46, 125, 50, 0.03);
        }

        .product-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .product-img {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            overflow: hidden;
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-name {
            font-weight: 500;
            margin-bottom: 0.25rem;
        }

        .product-category {
            color: var(--text-light);
            font-size: 0.85rem;
        }

        .product-price {
            font-weight: 600;
            color: var(--primary-dark);
        }

        .stock-status {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .in-stock {
            background: rgba(76, 175, 80, 0.15);
            color: var(--success);
        }

        .low-stock {
            background: rgba(255, 152, 0, 0.15);
            color: var(--warning);
        }

        .out-of-stock {
            background: rgba(244, 67, 54, 0.15);
            color: var(--danger);
        }


        .activity-status {
    display: inline-block;
    padding: 4px 8px;
    font-size: 12px;
    border-radius: 12px;
    font-weight: 600;
}

.activity-status.active {
    background-color: rgba(33, 150, 243, 0.15); /* Light Blue Background */
    color: #2196F3; /* Blue Text */
}

.activity-status.inactive {
    background-color: rgba(158, 158, 158, 0.15); /* Light Gray Background */
    color: #9E9E9E; /* Gray Text */
}


        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .action-btn {
            width: 32px;
            height: 32px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(46, 125, 50, 0.05);
            color: var(--primary);
            cursor: pointer;
            transition: all 0.2s;
            border: none;
        }

        .action-btn:hover {
            background: var(--primary);
            color: white;
        }

        .action-btn.delete {
            background: rgba(244, 67, 54, 0.05);
            color: var(--danger);
        }

        .action-btn.delete:hover {
            background: var(--danger);
            color: white;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            border-top: 1px solid var(--border);
        }

        .pagination-info {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .pagination-controls {
            display: flex;
            gap: 0.5rem;
        }

        .page-btn {
            width: 32px;
            height: 32px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(46, 125, 50, 0.05);
            color: var(--primary);
            cursor: pointer;
            transition: all 0.2s;
            border: none;
            font-size: 0.9rem;
        }

        .page-btn.active {
            background: var(--primary);
            color: white;
        }

        .page-btn:hover:not(.active) {
            background: rgba(46, 125, 50, 0.15);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                width: 70px;
            }

            .sidebar .logo-text,
            .sidebar .nav-text {
                display: none;
            }

            .sidebar-header {
                padding: 1rem 0.5rem;
            }

            .sidebar-header h2 {
                justify-content: center;
            }

            .main-content {
                margin-left: 70px;
            }

            .nav-links a {
                justify-content: center;
                padding: 0.8rem;
            }

            .nav-links a i {
                width: auto;
                font-size: 1.3rem;
            }
        }

        @media (max-width: 768px) {
            .products-table {
                display: block;
                overflow-x: auto;
            }
            
            .search-box input {
                width: 180px;
            }
            
            .controls {
                flex-direction: column;
                align-items: flex-end;
            }
        }

        @media (max-width: 576px) {
            .user-profile .info {
                display: none;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .controls {
                width: 100%;
                flex-direction: row;
                justify-content: space-between;
            }
            
            .search-box input {
                width: 100%;
            }
            
            .pagination {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2><i class="fas fa-store"></i> <span class="logo-text">GreenBasket</span></h2>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('admin-dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span class="nav-text">Dashboard</span></a></li>
            <li><a href="#" class="active"><i class="fas fa-shopping-bag"></i> <span class="nav-text">Products</span></a></li>
            <li><a href="#"><i class="fas fa-list"></i> <span class="nav-text">Orders</span></a></li>
            <li><a href="#"><i class="fas fa-tractor"></i> <span class="nav-text">Farmers</span></a></li>
            <li><a href="#"><i class="fas fa-users"></i> <span class="nav-text">Customers</span></a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i> <span class="nav-text">Analytics</span></a></li>
            <li><a href="#"><i class="fas fa-tags"></i> <span class="nav-text">Discounts</span></a></li>
            <li><a href="#"><i class="fas fa-comments"></i> <span class="nav-text">Support</span></a></li>
            <li><a href="#"><i class="fas fa-cog"></i> <span class="nav-text">Settings</span></a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1>Products Management</h1>
            <div class="header-actions">
                <div class="user-info">
                    <div class="notification">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="user-profile">
                        <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Admin">
                        <div class="info">
                            <div class="name">Alex Morgan</div>
                            <div class="role">Administrator</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Section -->
        <div class="products-section">
            <div class="section-header">
                <h2>All Products</h2>
                <div class="controls">
                                    <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Product
                </button>
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search products...">
                    </div>
                    <button class="filter-btn">
                        <i class="fas fa-filter"></i> Filters
                    </button>
                </div>
            </div>
            
            <table class="products-table">
                <thead>
                    <tr>
                        <th style="width: 40%;">Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Activity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
    <tr>
        <td>
            <div class="product-info">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1592921870789-045959c3d1a8?auto=format&fit=crop&w=500&q=80" alt="Ilish (Hilsa)">
                </div>
                <div>
                    <div class="product-name">Ilish (Hilsa)</div>
                    <div class="product-category">ID: PROD-001</div>
                </div>
            </div>
        </td>
        <td>Fish & Seafood</td>
        <td class="product-price">৳1,100/kg</td>
        <td>48 kg</td>
        <td><span class="stock-status in-stock">In Stock</span></td>
        <td><span class="activity-status active">Active</span></td>

        <td>
            <div class="actions">
                <button class="action-btn"><i class="fas fa-edit"></i></button>
                <button class="action-btn"><i class="fas fa-eye"></i></button>
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="product-info">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1522184216316-3c25379f9760?auto=format&fit=crop&w=500&q=80" alt="Organic Carrots">
                </div>
                <div>
                    <div class="product-name">Organic Carrots</div>
                    <div class="product-category">ID: PROD-002</div>
                </div>
            </div>
        </td>
        <td>Vegetables</td>
        <td class="product-price">৳120/kg</td>
        <td>15 kg</td>
        <td><span class="stock-status low-stock">Low Stock</span></td>
        <td><span class="activity-status active">Active</span></td>

        <td>
            <div class="actions">
                <button class="action-btn"><i class="fas fa-edit"></i></button>
                <button class="action-btn"><i class="fas fa-eye"></i></button>
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="product-info">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1568702846920-caff70104e87?auto=format&fit=crop&w=500&q=80" alt="Rajshahi Mangoes">
                </div>
                <div>
                    <div class="product-name">Rajshahi Mangoes</div>
                    <div class="product-category">ID: PROD-003</div>
                </div>
            </div>
        </td>
        <td>Fruits</td>
        <td class="product-price">৳140/kg</td>
        <td>0 kg</td>
        <td><span class="stock-status out-of-stock">Out of Stock</span></td>
        <td><span class="activity-status active">Active</span></td>

        <td>
            <div class="actions">
                <button class="action-btn"><i class="fas fa-edit"></i></button>
                <button class="action-btn"><i class="fas fa-eye"></i></button>
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="product-info">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1607623488990-3a2f1d7d9e5d?auto=format&fit=crop&w=500&q=80" alt="Deshi Chicken">
                </div>
                <div>
                    <div class="product-name">Deshi Chicken (Free Range)</div>
                    <div class="product-category">ID: PROD-004</div>
                </div>
            </div>
        </td>
        <td>Meat & Poultry</td>
        <td class="product-price">৳380/kg</td>
        <td>32 kg</td>
        <td><span class="stock-status in-stock">In Stock</span></td>
        <td><span class="activity-status active">Active</span></td>

        <td>
            <div class="actions">
                <button class="action-btn"><i class="fas fa-edit"></i></button>
                <button class="action-btn"><i class="fas fa-eye"></i></button>
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="product-info">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1587049633312-d628ae50a8ae?auto=format&fit=crop&w=500&q=80" alt="Fresh Spinach">
                </div>
                <div>
                    <div class="product-name">Fresh Spinach</div>
                    <div class="product-category">ID: PROD-005</div>
                </div>
            </div>
        </td>
        <td>Leafy Vegetables</td>
        <td class="product-price">৳60/kg</td>
        <td>18 kg</td>
        <td><span class="stock-status in-stock">In Stock</span></td>
        <td><span class="activity-status inactive">Inactive</span></td>

        <td>
            <div class="actions">
                <button class="action-btn"><i class="fas fa-edit"></i></button>
                <button class="action-btn"><i class="fas fa-eye"></i></button>
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="product-info">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1615892372535-1dc416d35c4c?auto=format&fit=crop&w=500&q=80" alt="Local Honey">
                </div>
                <div>
                    <div class="product-name">Raw Local Honey (500ml)</div>
                    <div class="product-category">ID: PROD-006</div>
                </div>
            </div>
        </td>
        <td>Honey & Natural</td>
        <td class="product-price">৳450</td>
        <td>10 jars</td>
        <td><span class="stock-status low-stock">Low Stock</span></td>
        <td><span class="activity-status active">Active</span></td>

        <td>
            <div class="actions">
                <button class="action-btn"><i class="fas fa-edit"></i></button>
                <button class="action-btn"><i class="fas fa-eye"></i></button>
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="product-info">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1615485293966-9c6ad76dbbbb?auto=format&fit=crop&w=500&q=80" alt="Coconut Oil">
                </div>
                <div>
                    <div class="product-name">Cold-Pressed Coconut Oil (1L)</div>
                    <div class="product-category">ID: PROD-007</div>
                </div>
            </div>
        </td>
        <td>Oils & Fats</td>
        <td class="product-price">৳520</td>
        <td>30 bottles</td>
        <td><span class="stock-status in-stock">In Stock</span></td>
        <td><span class="activity-status active">Active</span></td>

        <td>
            <div class="actions">
                <button class="action-btn"><i class="fas fa-edit"></i></button>
                <button class="action-btn"><i class="fas fa-eye"></i></button>
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="product-info">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1629783922097-e0dffca2c9db?auto=format&fit=crop&w=500&q=80" alt="Sweet Potatoes">
                </div>
                <div>
                    <div class="product-name">Sweet Potatoes</div>
                    <div class="product-category">ID: PROD-008</div>
                </div>
            </div>
        </td>
        <td>Root Vegetables</td>
        <td class="product-price">৳90/kg</td>
        <td>22 kg</td>
        <td><span class="stock-status in-stock">In Stock</span></td>
        <td><span class="activity-status active">Active</span></td>

        <td>
            <div class="actions">
                <button class="action-btn"><i class="fas fa-edit"></i></button>
                <button class="action-btn"><i class="fas fa-eye"></i></button>
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="product-info">
                <div class="product-img">
                    <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655?auto=format&fit=crop&w=500&q=80" alt="Basmati Rice">
                </div>
                <div>
                    <div class="product-name">Premium Basmati Rice</div>
                    <div class="product-category">ID: PROD-009</div>
                </div>
            </div>
        </td>
        <td>Grains & Rice</td>
        <td class="product-price">৳220/kg</td>
        <td>5 kg</td>
        <td><span class="stock-status low-stock">Low Stock</span></td>
        <td><span class="activity-status inactive">Inactive</span></td>

        <td>
            <div class="actions">
                <button class="action-btn"><i class="fas fa-edit"></i></button>
                <button class="action-btn"><i class="fas fa-eye"></i></button>
                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
            </div>
        </td>
    </tr>
</tbody>

            </table>
            
            <div class="pagination">
                <div class="pagination-info">
                    Showing 1 to 10 of 42 products
                </div>
                <div class="pagination-controls">
                    <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn">4</button>
                    <button class="page-btn">5</button>
                    <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple search functionality
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.querySelector('.search-box input');
            const tableRows = document.querySelectorAll('.products-table tbody tr');
            
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                tableRows.forEach(row => {
                    const productName = row.querySelector('.product-name').textContent.toLowerCase();
                    if (productName.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
            
            // Action buttons event listeners
            document.querySelectorAll('.action-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const action = this.querySelector('i').className;
                    const productName = this.closest('tr').querySelector('.product-name').textContent;
                    
                    if (action.includes('edit')) {
                        alert(`Edit product: ${productName}`);
                    } else if (action.includes('eye')) {
                        alert(`View product: ${productName}`);
                    } else if (action.includes('trash')) {
                        if (confirm(`Are you sure you want to delete ${productName}?`)) {
                            alert(`Deleted product: ${productName}`);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>