<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Management | E-commerce Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset("css/dip/farmers_management.css") }}">
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
            <li><a href="{{ route('products-management') }}"><i class="fas fa-shopping-bag"></i> <span class="nav-text">Products</span></a></li>
            <li><a href="{{ route('orders-management') }}"><i class="fas fa-list"></i> <span class="nav-text">Orders</span></a></li>
            <li><a href="" class="active"><i class="fas fa-tractor"></i> <span class="nav-text">Farmers</span></a></li>
            <li><a href="{{ route('customers-management') }}"><i class="fas fa-users"></i> <span class="nav-text">Customers</span></a></li>
            <li><a href="{{ route('analytics-dashboard') }}"><i class="fas fa-chart-line"></i> <span class="nav-text">Analytics</span></a></li>
            <li><a href="{{ route('discounts-management') }}"><i class="fas fa-tags"></i> <span class="nav-text">Discounts</span></a></li>
            <li><a href="{{ route('support-management') }}"><i class="fas fa-comments"></i> <span class="nav-text">Support</span></a></li>
            <li><a href="{{ route('settings') }}"><i class="fas fa-cog"></i> <span class="nav-text">Settings</span></a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1>Farmers Management</h1>
            <div class="header-actions">
                <button class="btn btn-earth">
                    <i class="fas fa-user-plus"></i> Add New Farmer
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

        <!-- Farmer Stats -->
        <div class="stats-row">
            <div class="stat-card card-1">
                <div class="stat-info">
                    <h3>Total Farmers</h3>
                    <div class="value">286</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 12.5% from last month
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>

            <div class="stat-card card-2">
                <div class="stat-info">
                    <h3>Active Farmers</h3>
                    <div class="value">238</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 7.2% from last month
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-user-check"></i>
                </div>
            </div>

            <div class="stat-card card-3">
                <div class="stat-info">
                    <h3>New Farmers</h3>
                    <div class="value">32</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 18.9% from last month
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-seedling"></i>
                </div>
            </div>

            <div class="stat-card card-4">
                <div class="stat-info">
                    <h3>Avg. Products</h3>
                    <div class="value">14</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 2.4% from last quarter
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-apple-alt"></i>
                </div>
            </div>
        </div>

        <!-- Filters Panel -->
        <div class="filters-panel">
            <div class="filters-header">
                <div class="filters-title">Filter Farmers</div>
            </div>
            <div class="filters-row">
                <div class="filter-group">
                    <label class="filter-label">Account Status</label>
                    <select class="filter-select">
                        <option value="">All Statuses</option>
                        <option value="active">Active</option>
                        <option value="pending">Pending Approval</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Registration Date</label>
                    <select class="filter-select">
                        <option value="">All Dates</option>
                        <option value="week">This Week</option>
                        <option value="month">This Month</option>
                        <option value="quarter">This Quarter</option>
                        <option value="year">This Year</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Location</label>
                    <input type="text" class="filter-input" placeholder="City or region...">
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Products Range</label>
                    <select class="filter-select">
                        <option value="">All Ranges</option>
                        <option value="0-10">0-10 products</option>
                        <option value="11-30">11-30 products</option>
                        <option value="31-50">31-50 products</option>
                        <option value="50+">50+ products</option>
                    </select>
                </div>
            </div>
            
            <div class="filter-actions">
                <button class="btn btn-outline">
                    <i class="fas fa-times"></i> Reset Filters
                </button>
                <button class="btn btn-primary">
                    <i class="fas fa-filter"></i> Apply Filters
                </button>
            </div>
        </div>

        <!-- Farmers Section -->
        <div class="farmers-section">
            <div class="section-header">
                <h2>Registered Farmers</h2>
                <div class="controls">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search farmers...">
                    </div>
                    <button class="filter-btn">
                        <i class="fas fa-download"></i> Export
                    </button>
                </div>
            </div>
            
            <table class="farmers-table">
                <thead>
                    <tr>
                        <th>Farmer ID</th>
                        <th>Farmer Info</th>
                        <th>Location</th>
                        <th>Products</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="farmer-id">#FARM-4215</td>
                        <td>
                            <div class="farmer-info">
                                <div class="farmer-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Rajesh Kumar">
                                </div>
                                <div>
                                    <div class="farmer-name">Rajesh Kumar</div>
                                    <div class="farmer-email">rajesh@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Punjab</td>
                        <td class="products-count">24</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn deactivate"><i class="fas fa-ban"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="farmer-id">#FARM-4214</td>
                        <td>
                            <div class="farmer-info">
                                <div class="farmer-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Priya Sharma">
                                </div>
                                <div>
                                    <div class="farmer-name">Priya Sharma</div>
                                    <div class="farmer-email">priya@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Maharashtra</td>
                        <td class="products-count">42</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn deactivate"><i class="fas fa-ban"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="farmer-id">#FARM-4213</td>
                        <td>
                            <div class="farmer-info">
                                <div class="farmer-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Amit Patel">
                                </div>
                                <div>
                                    <div class="farmer-name">Amit Patel</div>
                                    <div class="farmer-email">amit@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Gujarat</td>
                        <td class="products-count">18</td>
                        <td><span class="status-badge status-pending">Pending</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-check"></i></button>
                                <button class="action-btn deactivate"><i class="fas fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="farmer-id">#FARM-4212</td>
                        <td>
                            <div class="farmer-info">
                                <div class="farmer-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sunita Devi">
                                </div>
                                <div>
                                    <div class="farmer-name">Sunita Devi</div>
                                    <div class="farmer-email">sunita@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Bihar</td>
                        <td class="products-count">7</td>
                        <td><span class="status-badge status-inactive">Inactive</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn"><i class="fas fa-power-off"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="farmer-id">#FARM-4211</td>
                        <td>
                            <div class="farmer-info">
                                <div class="farmer-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/68.jpg" alt="Vijay Singh">
                                </div>
                                <div>
                                    <div class="farmer-name">Vijay Singh</div>
                                    <div class="farmer-email">vijay@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Uttar Pradesh</td>
                        <td class="products-count">35</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn deactivate"><i class="fas fa-ban"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="farmer-id">#FARM-4210</td>
                        <td>
                            <div class="farmer-info">
                                <div class="farmer-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/54.jpg" alt="Meena Reddy">
                                </div>
                                <div>
                                    <div class="farmer-name">Meena Reddy</div>
                                    <div class="farmer-email">meena@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Telangana</td>
                        <td class="products-count">56</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn deactivate"><i class="fas fa-ban"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="farmer-id">#FARM-4209</td>
                        <td>
                            <div class="farmer-info">
                                <div class="farmer-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/37.jpg" alt="Sanjay Verma">
                                </div>
                                <div>
                                    <div class="farmer-name">Sanjay Verma</div>
                                    <div class="farmer-email">sanjay@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Haryana</td>
                        <td class="products-count">12</td>
                        <td><span class="status-badge status-pending">Pending</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-check"></i></button>
                                <button class="action-btn deactivate"><i class="fas fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div class="pagination">
                <div class="pagination-info">
                    Showing 1 to 7 of 286 farmers
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
        document.addEventListener('DOMContentLoaded', function() {
            // Farmer search functionality
            const searchInput = document.querySelector('.search-box input');
            const tableRows = document.querySelectorAll('.farmers-table tbody tr');
            
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                tableRows.forEach(row => {
                    const farmerId = row.querySelector('.farmer-id').textContent.toLowerCase();
                    const farmerName = row.querySelector('.farmer-name').textContent.toLowerCase();
                    
                    if (farmerId.includes(searchTerm) || farmerName.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
            
            // Action buttons functionality
            document.querySelectorAll('.action-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const farmerId = this.closest('tr').querySelector('.farmer-id').textContent;
                    const actionIcon = this.querySelector('i').className;
                    
                    if (actionIcon.includes('eye')) {
                        alert(`View farmer details for: ${farmerId}`);
                    } else if (actionIcon.includes('edit')) {
                        alert(`Edit farmer profile for: ${farmerId}`);
                    } else if (actionIcon.includes('ban')) {
                        if (confirm(`Deactivate farmer account: ${farmerId}?`)) {
                            alert(`Farmer ${farmerId} deactivated`);
                        }
                    } else if (actionIcon.includes('check')) {
                        if (confirm(`Approve farmer account: ${farmerId}?`)) {
                            alert(`Farmer ${farmerId} approved`);
                        }
                    } else if (actionIcon.includes('times')) {
                        if (confirm(`Reject farmer application: ${farmerId}?`)) {
                            alert(`Farmer application ${farmerId} rejected`);
                        }
                    } else if (actionIcon.includes('power-off')) {
                        if (confirm(`Activate farmer account: ${farmerId}?`)) {
                            alert(`Farmer ${farmerId} activated`);
                        }
                    }
                });
            });
            
            // Status filter functionality
            const statusFilter = document.querySelector('select.filter-select');
            statusFilter.addEventListener('change', function() {
                const status = this.value;
                tableRows.forEach(row => {
                    const rowStatus = row.querySelector('.status-badge').className.includes(status);
                    if (!status || rowStatus) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
            
            // Add New Farmer button
            document.querySelector('.btn-earth').addEventListener('click', function() {
                alert('Opening new farmer registration form...');
            });
        });
    </script>
</body>
</html>