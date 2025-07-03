<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Management | E-commerce Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset("css/dip/products_management.css") }}">
    <link rel="stylesheet" href="{{ asset("css/dip/common.css") }}">
</head>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2><i class="fas fa-store"></i> <span class="logo-text">GreenBasket</span></h2>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('admin-dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span class="nav-text">Dashboard</span></a></li>
            <li><a href=""class="active"><i class="fas fa-shopping-bag"></i> <span class="nav-text">Products</span></a></li>
            <li><a href="{{ route('orders-management') }}"><i class="fas fa-list"></i> <span class="nav-text">Orders</span></a></li>
            <li><a href="{{ route('farmers-management') }}"><i class="fas fa-tractor"></i> <span class="nav-text">Farmers</span></a></li>
            <li><a href="{{ route('customers-management') }}"><i class="fas fa-users"></i> <span class="nav-text">Customers</span></a></li>
            <li><a href="{{ route('analytics-dashboard') }}"><i class="fas fa-chart-line"></i> <span class="nav-text">Analytics</span></a></li>
            <li><a href="{{ route('discounts-management') }}"><i class="fas fa-tags"></i> <span class="nav-text">Discounts</span></a></li>
            <li><a href="{{ route('support-management') }}"><i class="fas fa-comments"></i> <span class="nav-text">Support</span></a></li>
            <li><a href="{{ route('settings') }}"><i class="fas fa-cog"></i> <span class="nav-text">Settings</span></a></li>
        </ul>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1>Products Management</h1>
            <div class="header-actions">
                                                    <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Product
                </button>
                <div class="user-info">
                    <div class="notification">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="user-profile">
                    <img src="https://dip-sarker.github.io/DIP_SARKER/images/home.png" alt="Admin">
                    <div class="info">
                        <div class="name">DIP SARKER</div>
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