<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Management | E-commerce Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dip/customers_management.css') }}">
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
            <li><a href="{{ route('farmers-management') }}"><i class="fas fa-tractor"></i> <span class="nav-text">Farmers</span></a></li>
            <li><a href=""  class="active"><i class="fas fa-users"></i> <span class="nav-text">Customers</span></a></li>
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
            <h1>Customers Management</h1>
            <div class="header-actions">
                <button class="btn btn-customer">
                    <i class="fas fa-user-plus"></i> Add New Customer
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

        <!-- Customer Stats -->
        <div class="stats-row">
            <div class="stat-card card-1">
                <div class="stat-info">
                    <h3>Total Customers</h3>
                    <div class="value">1,824</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 8.7% from last month
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>

            <div class="stat-card card-2">
                <div class="stat-info">
                    <h3>Active Customers</h3>
                    <div class="value">1,512</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 5.3% from last month
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-user-check"></i>
                </div>
            </div>

            <div class="stat-card card-3">
                <div class="stat-info">
                    <h3>New Customers</h3>
                    <div class="value">243</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 12.1% from last month
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
            </div>

            <div class="stat-card card-4">
                <div class="stat-info">
                    <h3>Avg. Orders</h3>
                    <div class="value">9</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 3.2% from last quarter
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>

        <!-- Filters Panel -->
        <div class="filters-panel">
            <div class="filters-header">
                <div class="filters-title">Filter Customers</div>
            </div>
            <div class="filters-row">
                <div class="filter-group">
                    <label class="filter-label">Account Status</label>
                    <select class="filter-select">
                        <option value="">All Statuses</option>
                        <option value="active">Active</option>
                        <option value="pending">Pending Verification</option>
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
                    <label class="filter-label">Orders Range</label>
                    <select class="filter-select">
                        <option value="">All Ranges</option>
                        <option value="0-5">0-5 orders</option>
                        <option value="6-20">6-20 orders</option>
                        <option value="21-50">21-50 orders</option>
                        <option value="50+">50+ orders</option>
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

        <!-- Customers Section -->
        <div class="customers-section">
            <div class="section-header">
                <h2>Registered Customers</h2>
                <div class="controls">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search customers...">
                    </div>
                    <button class="filter-btn">
                        <i class="fas fa-download"></i> Export
                    </button>
                </div>
            </div>
            
            <table class="customers-table">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Info</th>
                        <th>Location</th>
                        <th>Orders</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="customer-id">#CUST-7821</td>
                        <td>
                            <div class="customer-info">
                                <div class="customer-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya Sharma">
                                </div>
                                <div>
                                    <div class="customer-name">Priya Sharma</div>
                                    <div class="customer-email">priya@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Mumbai</td>
                        <td class="orders-count">24</td>
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
                        <td class="customer-id">#CUST-7820</td>
                        <td>
                            <div class="customer-info">
                                <div class="customer-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Raj Patel">
                                </div>
                                <div>
                                    <div class="customer-name">Raj Patel</div>
                                    <div class="customer-email">raj@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Ahmedabad</td>
                        <td class="orders-count">18</td>
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
                        <td class="customer-id">#CUST-7819</td>
                        <td>
                            <div class="customer-info">
                                <div class="customer-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ananya Reddy">
                                </div>
                                <div>
                                    <div class="customer-name">Ananya Reddy</div>
                                    <div class="customer-email">ananya@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Hyderabad</td>
                        <td class="orders-count">42</td>
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
                        <td class="customer-id">#CUST-7818</td>
                        <td>
                            <div class="customer-info">
                                <div class="customer-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Vikram Singh">
                                </div>
                                <div>
                                    <div class="customer-name">Vikram Singh</div>
                                    <div class="customer-email">vikram@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Delhi</td>
                        <td class="orders-count">7</td>
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
                        <td class="customer-id">#CUST-7817</td>
                        <td>
                            <div class="customer-info">
                                <div class="customer-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/29.jpg" alt="Meera Gupta">
                                </div>
                                <div>
                                    <div class="customer-name">Meera Gupta</div>
                                    <div class="customer-email">meera@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Bangalore</td>
                        <td class="orders-count">35</td>
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
                        <td class="customer-id">#CUST-7816</td>
                        <td>
                            <div class="customer-info">
                                <div class="customer-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Arun Kumar">
                                </div>
                                <div>
                                    <div class="customer-name">Arun Kumar</div>
                                    <div class="customer-email">arun@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Chennai</td>
                        <td class="orders-count">56</td>
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
                        <td class="customer-id">#CUST-7815</td>
                        <td>
                            <div class="customer-info">
                                <div class="customer-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/53.jpg" alt="Sneha Desai">
                                </div>
                                <div>
                                    <div class="customer-name">Sneha Desai</div>
                                    <div class="customer-email">sneha@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="location"><i class="fas fa-map-marker-alt"></i> Pune</td>
                        <td class="orders-count">12</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>
                            <div class="actions">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn deactivate"><i class="fas fa-ban"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div class="pagination">
                <div class="pagination-info">
                    Showing 1 to 7 of 1,824 customers
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
            // Customer search functionality
            const searchInput = document.querySelector('.search-box input');
            const tableRows = document.querySelectorAll('.customers-table tbody tr');
            
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                tableRows.forEach(row => {
                    const customerId = row.querySelector('.customer-id').textContent.toLowerCase();
                    const customerName = row.querySelector('.customer-name').textContent.toLowerCase();
                    
                    if (customerId.includes(searchTerm) || customerName.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
            
            // Action buttons functionality
            document.querySelectorAll('.action-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const customerId = this.closest('tr').querySelector('.customer-id').textContent;
                    const actionIcon = this.querySelector('i').className;
                    
                    if (actionIcon.includes('eye')) {
                        alert(`View customer details for: ${customerId}`);
                    } else if (actionIcon.includes('edit')) {
                        alert(`Edit customer profile for: ${customerId}`);
                    } else if (actionIcon.includes('ban')) {
                        if (confirm(`Deactivate customer account: ${customerId}?`)) {
                            alert(`Customer ${customerId} deactivated`);
                        }
                    } else if (actionIcon.includes('check')) {
                        if (confirm(`Verify customer account: ${customerId}?`)) {
                            alert(`Customer ${customerId} verified`);
                        }
                    } else if (actionIcon.includes('times')) {
                        if (confirm(`Reject customer verification: ${customerId}?`)) {
                            alert(`Customer verification ${customerId} rejected`);
                        }
                    } else if (actionIcon.includes('power-off')) {
                        if (confirm(`Activate customer account: ${customerId}?`)) {
                            alert(`Customer ${customerId} activated`);
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
            
            // Add New Customer button
            document.querySelector('.btn-customer').addEventListener('click', function() {
                alert('Opening new customer registration form...');
            });
        });
    </script>
</body>
</html>