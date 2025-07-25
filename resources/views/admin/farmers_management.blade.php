 @extends('admin.dashboard')
 @push('style')
     <link rel="stylesheet" href="{{ asset('css/dip/farmers_management.css') }}">
 @endpush
 @push('title')
     <h1>Farmers Management</h1>
 @endpush
 @section('dashboard-content')
     <!-- Farmer Stats -->
     <div class="stats-row">
         <div class="stat-card card-1">
             <div class="stat-info">
                 <h3>Total Farmers</h3>
                 <div class="value">{{ $totalSellers }}</div>
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
                 <div class="value">{{ $activeSellers }}</div>
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
                 <div class="value">{{ $newSellers }}</div>
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
                 <div class="value">{{ $avgProducts }}</div>
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

         <div class="farmers-container">
             <div class="table-wrapper">
                 <table class="farmers-table">
                     <thead>
                         <tr>
                             <th>Farmer ID</th>
                             <th>Farmer Info</th>
                             <th>Phone No</th>
                             <th>Location</th>
                             <th>Products</th>
                             <th>Status</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($sellers as $seller)
                             <tr data-id="{{ $seller->id }}">
                                 <td class="farmer-id">#Farmer-{{ str_pad($seller->id, 4, '0', STR_PAD_LEFT) }}</td>
                                 <td>
                                     <div class="farmer-info">
                                         <div class="farmer-avatar">
                                             <img src="https://randomuser.me/api/portraits/{{ $loop->index % 2 == 0 ? 'men' : 'women' }}/{{ 20 + $loop->index }}.jpg"
                                                 alt="{{ $seller->name }}">
                                         </div>
                                         <div>
                                             <div class="farmer-name">{{ $seller->name }}</div>
                                             <div class="farmer-email">{{ $seller->email ?? 'N/A' }}</div>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="phone">{{ $seller->phone }}</td>
                                 <td class="location"><i class="fas fa-map-marker-alt"></i>
                                     {{ $seller->address ?? 'Unknown' }}</td>
                                 <td class="products-count">{{ $seller->products }}</td>
                                 <td>
                                     @if ($seller->status)
                                         <span class="status-badge status-active">Active</span>
                                     @else
                                         <span class="status-badge status-inactive">Inactive</span>
                                     @endif
                                 </td>
                                 <td>
                                     <div class="actions">
                                         <button class="action-btn edit-btn" title="Edit Farmer">
                                             <i class="fas fa-edit"></i>
                                         </button>

                                         <form action="{{ route('sellers.delete', $seller->id) }}" method="POST"
                                             style="display:inline;">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="action-btn delete" title="Delete Farmer">
                                                 <i class="fas fa-trash"></i>
                                             </button>
                                         </form>
                                     </div>
                                 </td>
                             </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>

             <!-- ✅ Edit Form (Fixed) -->
             <div class="form-wrapper" id="editFormWrapper" style="display: none;">
                 <form action="" method="POST" id="editFarmerForm" class="edit-farmer-form">
                     @csrf
                     @method('PUT')

                     <div class="form-group">
                         <label>Name:</label>
                         <input type="text" name="name" required>
                     </div>

                     <div class="form-group">
                         <label>Email:</label>
                         <input type="email" name="email">
                     </div>

                     <div class="form-group">
                         <label>Phone:</label>
                         <input type="text" name="phone" required>
                     </div>

                     <div class="form-group">
                         <label>Address:</label>
                         <input type="text" name="address">
                     </div>

                     <div class="form-group">
                         <label>Products:</label>
                         <input type="number" name="products" min="0" required>
                     </div>

                     <div class="form-group">
                         <label>Status:</label>
                         <select name="status" required>
                             <option value="1">Active</option>
                             <option value="0">Inactive</option>
                         </select>
                     </div>

                     <input type="hidden" name="id" id="editSellerId">

                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Update Farmer</button>
                         <button type="button" class="btn btn-outline" id="cancelEdit">Cancel</button>
                     </div>
                 </form>
             </div>
         </div>

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
 @endsection
 @push('script')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             const tableRows = document.querySelectorAll('.farmers-table tbody tr');

             // Search functionality
             const searchInput = document.querySelector('.search-box input');
             searchInput.addEventListener('input', function() {
                 const term = this.value.toLowerCase();
                 tableRows.forEach(row => {
                     const id = row.querySelector('.farmer-id').textContent.toLowerCase();
                     const name = row.querySelector('.farmer-name').textContent.toLowerCase();
                     row.style.display = id.includes(term) || name.includes(term) ? '' : 'none';
                 });
             });

             // Confirm toggle & delete
             document.querySelectorAll('.action-btn').forEach(button => {
                 button.addEventListener('click', function(e) {
                     const action = this.querySelector('i').className;
                     const row = this.closest('tr');
                     const farmerName = row.querySelector('.farmer-name').textContent.trim();
                     if (action.includes('trash')) {
                         if (!confirm(`Are you sure you want to delete farmer: ${farmerName}?`)) {
                             e.preventDefault();
                         }
                     }
                 });
             });

             // ✅ Edit button functionality
             document.querySelectorAll('.edit-btn').forEach(button => {
                 button.addEventListener('click', function() {
                     const row = this.closest('tr');
                     const id = row.dataset.id;
                     const farmerName = row.querySelector('.farmer-name').textContent.trim();

                     // ✅ Confirmation before editing
                     if (!confirm(`Do you want to edit farmer: ${farmerName}?`)) {
                         return; // Stop if user cancels
                     }

                     // ✅ Populate form
                     const form = document.getElementById('editFarmerForm');
                     form.name.value = row.querySelector('.farmer-name').textContent.trim();
                     form.email.value = row.querySelector('.farmer-email').textContent.trim() !==
                         'N/A' ?
                         row.querySelector('.farmer-email').textContent.trim() :
                         '';
                     form.phone.value = row.querySelector('.phone').textContent.trim();
                     form.address.value = row.querySelector('.location').textContent.replace(
                         /^📍\s*/, '').trim();
                     form.products.value = row.querySelector('.products-count').textContent.trim();
                     form.status.value = row.querySelector('.status-badge').classList.contains(
                             'status-active') ?
                         '1' :
                         '0';

                     document.getElementById('editSellerId').value = id;


                     form.action = `{{ route('sellers.update', ':id') }}`.replace(':id', id);


                     document.getElementById('editFormWrapper').style.display = 'block';
                 });
             });


             // Cancel Edit
             document.getElementById('cancelEdit').addEventListener('click', () => {
                 document.getElementById('editFormWrapper').style.display = 'none';
             });
         });
     </script>
 @endpush
