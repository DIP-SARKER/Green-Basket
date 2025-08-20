 @extends('admin.dashboard')
 @push('style')
     <link rel="stylesheet" href="{{ asset('css/dip/orders_management.css') }}">
 @endpush
 @push('title')
     <h1>Orders Management</h1>
 @endpush
 @section('dashboard-content')
     <!-- Order Stats -->

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
                 @forelse ($orders as $order)
                     <tr>
                         <td class="order-id">#ORD-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</td>
                         <td>
                             <div class="customer-info">
                                 <div class="customer-avatar">
                                     <img src="https://ui-avatars.com/api/?name={{ urlencode($order->customer->name ?? 'N/A') }}"
                                         alt="{{ $order->customer->name ?? 'N/A' }}">
                                 </div>
                                 <div>
                                     <div class="customer-name">{{ $order->customer->name ?? 'Unknown' }}</div>
                                     <div class="customer-email">{{ $order->customer->email ?? 'No Email' }}</div>
                                 </div>
                             </div>
                         </td>
                         <td class="order-date">{{ \Carbon\Carbon::parse($order->created_at)->format('M d, Y') }}</td>
                         <td class="order-amount">৳{{ number_format($order->total_price, 2) }}</td>
                         <td>
                             <span
                                 class="status-badge status-{{ strtolower($order->status) }}">{{ ucfirst($order->status) }}</span>
                         </td>
                         <td>
                             <div class="actions">
                                 <button class="action-btn view" title="View"><i class="fas fa-eye"></i></button>
                                 @if ($order->status === 'pending' || $order->status === 'processing')
                                     <button class="action-btn" title="Mark as Processed"><i
                                             class="fas fa-check"></i></button>
                                     <button class="action-btn cancel" title="Cancel Order"><i
                                             class="fas fa-times"></i></button>
                                 @elseif($order->status === 'delivered')
                                     <button class="action-btn" title="Print"><i class="fas fa-print"></i></button>
                                 @elseif($order->status === 'shipped')
                                     <button class="action-btn" title="Track"><i class="fas fa-truck"></i></button>
                                 @elseif($order->status === 'cancelled')
                                     <button class="action-btn" title="Restore"><i class="fas fa-redo"></i></button>
                                 @endif
                             </div>
                         </td>
                     </tr>
                 @empty
                     <tr>
                         <td colspan="6">No orders found.</td>
                     </tr>
                 @endforelse
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
