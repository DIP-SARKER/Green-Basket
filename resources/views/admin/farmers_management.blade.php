 @extends('admin.dashboard')
 @push('style')
     <link rel="stylesheet" href="{{ asset('css/dip/farmers_management.css') }}">
 @endpush
 @push('title')
     <h1>Farmers Management</h1>
 @endpush
 @section('dashboard-content')
     <!-- Filters Panel -->
     <form action="{{ route('sellers-management') }}" method="GET" class="filters-panel">
         <div class="filters-header">
             <div class="filters-title">Filter Farmers</div>
         </div>
         <div class="filters-row">
             <div class="filter-group">
                 <label class="filter-label">Account Status</label>
                 <select class="filter-select" name="status">
                     <option value="">All Statuses</option>
                     <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Active</option>
                     <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Inactive</option>
                 </select>
             </div>
             <div class="filter-actions">
                 <a href="{{ route('sellers-management') }}" class="btn btn-outline">
                     <i class="fas fa-times"></i> Reset Filters
                 </a>
                 <button type="submit" class="btn btn-primary">
                     <i class="fas fa-filter"></i> Apply Filters
                 </button>
             </div>
         </div>
     </form>


     <!-- Farmers Section -->
     <div class="farmers-section">
         <div class="section-header">
             <h2>Registered Farmers</h2>
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
                 Showing {{ $sellers->firstItem() ?? 0 }} to {{ $sellers->lastItem() ?? 0 }} of
                 {{ $sellers->total() ?? 0 }} farmers
             </div>
             <div class="pagination-controls">
                 {{ $sellers->links('vendor.pagination.simple-bootstrap-4') }}
             </div>
         </div>


     </div>
 @endsection
 @push('script')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             const tableBody = document.querySelector('.farmers-table tbody');
             const editFormWrapper = document.getElementById('editFormWrapper');
             const editForm = document.getElementById('editFarmerForm');
             const cancelEditBtn = document.getElementById('cancelEdit');

             // 🔹 Search functionality (optional, if you have a search box)
             const searchInput = document.querySelector('.search-box input');
             if (searchInput) {
                 searchInput.addEventListener('input', function() {
                     const term = this.value.toLowerCase();
                     tableBody.querySelectorAll('tr').forEach(row => {
                         const id = row.querySelector('.farmer-id').textContent.toLowerCase();
                         const name = row.querySelector('.farmer-name').textContent.toLowerCase();
                         row.style.display = id.includes(term) || name.includes(term) ? '' : 'none';
                     });
                 });
             }

             // 🔹 Event delegation for Edit & Delete buttons
             tableBody.addEventListener('click', function(e) {
                 const editBtn = e.target.closest('.edit-btn');
                 const deleteBtn = e.target.closest('.delete');

                 if (editBtn) {
                     const row = editBtn.closest('tr');
                     const id = row.dataset.id;
                     const farmerName = row.querySelector('.farmer-name').textContent.trim();

                     if (!confirm(`Do you want to edit farmer: ${farmerName}?`)) return;

                     // Populate edit form
                     editForm.name.value = row.querySelector('.farmer-name').textContent.trim();
                     editForm.email.value = row.querySelector('.farmer-email').textContent.trim() !== 'N/A' ?
                         row.querySelector('.farmer-email').textContent.trim() :
                         '';
                     editForm.phone.value = row.querySelector('.phone').textContent.trim();
                     editForm.address.value = row.querySelector('.location').textContent.replace(/^📍\s*/,
                         '').trim();
                     editForm.products.value = row.querySelector('.products-count').textContent.trim();
                     editForm.status.value = row.querySelector('.status-badge').classList.contains(
                         'status-active') ? '1' : '0';

                     document.getElementById('editSellerId').value = id;
                     editForm.action = `{{ route('sellers.update', ':id') }}`.replace(':id', id);

                     editFormWrapper.style.display = 'block';
                 }

                 if (deleteBtn) {
                     const row = deleteBtn.closest('tr');
                     const farmerName = row.querySelector('.farmer-name').textContent.trim();

                     if (!confirm(`Are you sure you want to delete farmer: ${farmerName}?`)) {
                         e.preventDefault(); // Stop form submission
                     }
                 }
             });

             // 🔹 Cancel Edit
             cancelEditBtn.addEventListener('click', () => {
                 editFormWrapper.style.display = 'none';
             });
         });
     </script>
 @endpush
