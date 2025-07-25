 @extends('admin.dashboard')
 @push('style')
     <link rel="stylesheet" href="{{ asset('css/dip/orders_management.css') }}">
 @endpush
 @push('title')
     <h1>Orders Management</h1>
 @endpush
 @section('dashboard-content')
     <!-- Order Stats -->
     <div class="stats-row">
         <div class="stat-card card-1">
             <div class="stat-info">
                 <h3>Total Orders</h3>
                 <div class="value">1,240</div>
                 <div class="trend up">
                     <i class="fas fa-arrow-up"></i> 8.3% from last month
                 </div>
             </div>
             <div class="stat-icon">
                 <i class="fas fa-box-open"></i>
             </div>
         </div>

         <div class="stat-card card-2">
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

         <div class="stat-card card-3">
             <div class="stat-info">
                 <h3>Processing Orders</h3>
                 <div class="value">87</div>
                 <div class="trend up">
                     <i class="fas fa-arrow-up"></i> 3.4% from last week
                 </div>
             </div>
             <div class="stat-icon">
                 <i class="fas fa-sync-alt"></i>
             </div>
         </div>

         <div class="stat-card card-4">
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
     </div>

     <!-- Filters Panel -->
     <div class="filters-panel">
         <div class="filters-header">
             <div class="filters-title">Filter Orders</div>
         </div>
         <div class="filters-row">
             <div class="filter-group">
                 <label class="filter-label">Order Status</label>
                 <select class="filter-select">
                     <option value="">All Statuses</option>
                     <option value="pending">Pending</option>
                     <option value="processing">Processing</option>
                     <option value="shipped">Shipped</option>
                     <option value="delivered">Delivered</option>
                     <option value="cancelled">Cancelled</option>
                 </select>
             </div>

             <div class="filter-group">
                 <label class="filter-label">Date Range</label>
                 <select class="filter-select">
                     <option value="">All Dates</option>
                     <option value="today">Today</option>
                     <option value="week">This Week</option>
                     <option value="month">This Month</option>
                     <option value="quarter">This Quarter</option>
                     <option value="year">This Year</option>
                 </select>
             </div>

             <div class="filter-group">
                 <label class="filter-label">Customer</label>
                 <input type="text" class="filter-input" placeholder="Search customer...">
             </div>

             <div class="filter-group">
                 <label class="filter-label">Order ID</label>
                 <input type="text" class="filter-input" placeholder="Search order ID...">
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

     <!-- Orders Section -->
     <div class="orders-section">
         <div class="section-header">
             <h2>All Orders</h2>
             <div class="controls">
                 <div class="search-box">
                     <i class="fas fa-search"></i>
                     <input type="text" placeholder="Search orders...">
                 </div>
                 <button class="filter-btn">
                     <i class="fas fa-download"></i> Export
                 </button>
             </div>
         </div>

         <table class="orders-table">
             <thead>
                 <tr>
                     <th>Order ID</th>
                     <th>Customer</th>
                     <th>Date</th>
                     <th>Amount</th>
                     <th>Status</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td class="order-id">#ORD-7841</td>
                     <td>
                         <div class="customer-info">
                             <div class="customer-avatar">
                                 <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson">
                             </div>
                             <div>
                                 <div class="customer-name">Sarah Johnson</div>
                                 <div class="customer-email">sarah@example.com</div>
                             </div>
                         </div>
                     </td>
                     <td class="order-date">Oct 15, 2023</td>
                     <td class="order-amount">৳1,285.50</td>
                     <td><span class="status-badge status-delivered">Delivered</span></td>
                     <td>
                         <div class="actions">
                             <button class="action-btn view"><i class="fas fa-eye"></i></button>
                             <button class="action-btn"><i class="fas fa-print"></i></button>
                         </div>
                     </td>
                 </tr>
                 <tr>
                     <td class="order-id">#ORD-7840</td>
                     <td>
                         <div class="customer-info">
                             <div class="customer-avatar">
                                 <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Michael Brown">
                             </div>
                             <div>
                                 <div class="customer-name">Michael Brown</div>
                                 <div class="customer-email">michael@example.com</div>
                             </div>
                         </div>
                     </td>
                     <td class="order-date">Oct 14, 2023</td>
                     <td class="order-amount">৳752.25</td>
                     <td><span class="status-badge status-processing">Processing</span></td>
                     <td>
                         <div class="actions">
                             <button class="action-btn view"><i class="fas fa-eye"></i></button>
                             <button class="action-btn"><i class="fas fa-check"></i></button>
                             <button class="action-btn cancel"><i class="fas fa-times"></i></button>
                         </div>
                     </td>
                 </tr>
                 <tr>
                     <td class="order-id">#ORD-7839</td>
                     <td>
                         <div class="customer-info">
                             <div class="customer-avatar">
                                 <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Emma Davis">
                             </div>
                             <div>
                                 <div class="customer-name">Emma Davis</div>
                                 <div class="customer-email">emma@example.com</div>
                             </div>
                         </div>
                     </td>
                     <td class="order-date">Oct 14, 2023</td>
                     <td class="order-amount">৳2,100.00</td>
                     <td><span class="status-badge status-pending">Pending</span></td>
                     <td>
                         <div class="actions">
                             <button class="action-btn view"><i class="fas fa-eye"></i></button>
                             <button class="action-btn"><i class="fas fa-check"></i></button>
                             <button class="action-btn cancel"><i class="fas fa-times"></i></button>
                         </div>
                     </td>
                 </tr>
                 <tr>
                     <td class="order-id">#ORD-7838</td>
                     <td>
                         <div class="customer-info">
                             <div class="customer-avatar">
                                 <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="James Wilson">
                             </div>
                             <div>
                                 <div class="customer-name">James Wilson</div>
                                 <div class="customer-email">james@example.com</div>
                             </div>
                         </div>
                     </td>
                     <td class="order-date">Oct 13, 2023</td>
                     <td class="order-amount">৳899.99</td>
                     <td><span class="status-badge status-delivered">Delivered</span></td>
                     <td>
                         <div class="actions">
                             <button class="action-btn view"><i class="fas fa-eye"></i></button>
                             <button class="action-btn"><i class="fas fa-print"></i></button>
                         </div>
                     </td>
                 </tr>
                 <tr>
                     <td class="order-id">#ORD-7837</td>
                     <td>
                         <div class="customer-info">
                             <div class="customer-avatar">
                                 <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Olivia Taylor">
                             </div>
                             <div>
                                 <div class="customer-name">Olivia Taylor</div>
                                 <div class="customer-email">olivia@example.com</div>
                             </div>
                         </div>
                     </td>
                     <td class="order-date">Oct 12, 2023</td>
                     <td class="order-amount">৳1,567.75</td>
                     <td><span class="status-badge status-cancelled">Cancelled</span></td>
                     <td>
                         <div class="actions">
                             <button class="action-btn view"><i class="fas fa-eye"></i></button>
                             <button class="action-btn"><i class="fas fa-redo"></i></button>
                         </div>
                     </td>
                 </tr>
                 <tr>
                     <td class="order-id">#ORD-7836</td>
                     <td>
                         <div class="customer-info">
                             <div class="customer-avatar">
                                 <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="William Martinez">
                             </div>
                             <div>
                                 <div class="customer-name">William Martinez</div>
                                 <div class="customer-email">william@example.com</div>
                             </div>
                         </div>
                     </td>
                     <td class="order-date">Oct 12, 2023</td>
                     <td class="order-amount">৳1,425.50</td>
                     <td><span class="status-badge status-shipped">Shipped</span></td>
                     <td>
                         <div class="actions">
                             <button class="action-btn view"><i class="fas fa-eye"></i></button>
                             <button class="action-btn"><i class="fas fa-truck"></i></button>
                         </div>
                     </td>
                 </tr>
                 <tr>
                     <td class="order-id">#ORD-7835</td>
                     <td>
                         <div class="customer-info">
                             <div class="customer-avatar">
                                 <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Sophia Anderson">
                             </div>
                             <div>
                                 <div class="customer-name">Sophia Anderson</div>
                                 <div class="customer-email">sophia@example.com</div>
                             </div>
                         </div>
                     </td>
                     <td class="order-date">Oct 11, 2023</td>
                     <td class="order-amount">৳2,850.00</td>
                     <td><span class="status-badge status-processing">Processing</span></td>
                     <td>
                         <div class="actions">
                             <button class="action-btn view"><i class="fas fa-eye"></i></button>
                             <button class="action-btn"><i class="fas fa-check"></i></button>
                             <button class="action-btn cancel"><i class="fas fa-times"></i></button>
                         </div>
                     </td>
                 </tr>
             </tbody>
         </table>

         <div class="pagination">
             <div class="pagination-info">
                 Showing 1 to 7 of 124 orders
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
 @endsection
 @push('script')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             // Order search functionality
             const searchInput = document.querySelector('.search-box input');
             const tableRows = document.querySelectorAll('.orders-table tbody tr');

             searchInput.addEventListener('input', function() {
                 const searchTerm = this.value.toLowerCase();

                 tableRows.forEach(row => {
                     const orderId = row.querySelector('.order-id').textContent.toLowerCase();
                     const customerName = row.querySelector('.customer-name').textContent
                         .toLowerCase();

                     if (orderId.includes(searchTerm) || customerName.includes(searchTerm)) {
                         row.style.display = '';
                     } else {
                         row.style.display = 'none';
                     }
                 });
             });

             // Action buttons functionality
             document.querySelectorAll('.action-btn').forEach(button => {
                 button.addEventListener('click', function() {
                     const orderId = this.closest('tr').querySelector('.order-id').textContent;
                     const action = this.querySelector('i').className;

                     if (action.includes('eye')) {
                         alert(`View order details for: ${orderId}`);
                     } else if (action.includes('check')) {
                         if (confirm(`Mark ${orderId} as processed?`)) {
                             alert(`Order ${orderId} marked as processed`);
                         }
                     } else if (action.includes('times')) {
                         if (confirm(`Cancel order ${orderId}?`)) {
                             alert(`Order ${orderId} cancelled`);
                         }
                     } else if (action.includes('print')) {
                         alert(`Print invoice for: ${orderId}`);
                     } else if (action.includes('truck')) {
                         alert(`Track shipment for: ${orderId}`);
                     } else if (action.includes('redo')) {
                         if (confirm(`Restore cancelled order ${orderId}?`)) {
                             alert(`Order ${orderId} restored`);
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
         });
     </script>
 @endpush
