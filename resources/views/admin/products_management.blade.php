 @extends('admin.dashboard')
 @push('style')
     <link rel="stylesheet" href="{{ asset('css/dip/products_management.css') }}">
 @endpush
 @push('title')
     <h1>Products Management</h1>
 @endpush
 @section('dashboard-content')
     <!-- Products Section -->
     <div class="products-section">
         <div class="section-header">
             <h2>All Products</h2>
             <div class="controls">

                 <div class="search-box">
                     <i class="fas fa-search"></i>
                     <form method="GET" action="{{ route('products-management') }}">
                         <input type="text" name="search" value="{{ request('search') }}"
                             placeholder="Search products...">
                     </form>
                 </div>


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
                 @foreach ($products as $product)
                     <tr data-status="{{ $product->status }}" data-name="{{ $product->name }}">
                         <td>
                             <div class="product-info">
                                 <div class="product-img">
                                     <img src="{{ $product->image_url ?? 'https://via.placeholder.com/100x100.png?text=No+Image' }}"
                                         alt="{{ $product->name }}">
                                 </div>
                                 <div>
                                     <div class="product-name">{{ $product->name }}</div>
                                     <div class="product-category">ID:
                                         PROD-{{ str_pad($product->id, 3, '0', STR_PAD_LEFT) }}</div>
                                 </div>
                             </div>
                         </td>
                         <td>{{ $product->category->name ?? 'Uncategorized' }}</td>
                         <td class="product-price">৳{{ number_format($product->price, 2) }}</td>
                         <td>{{ $product->stock_quantity }} kg</td>
                         <td>
                             <span
                                 class="stock-status 
                    {{ $product->stock_quantity == 0 ? 'out-of-stock' : ($product->stock_quantity < 10 ? 'low-stock' : 'in-stock') }}">
                                 {{ $product->stock_quantity == 0 ? 'Out of Stock' : ($product->stock_quantity < 10 ? 'Low Stock' : 'In Stock') }}
                             </span>
                         </td>
                         <td>
                             <span class="activity-status {{ $product->status ? 'active' : 'inactive' }}">
                                 {{ $product->status ? 'Active' : 'Inactive' }}
                             </span>
                         </td>
                         <td>
                             <div class="actions">
                                 <form action="{{ route('products.toggleStatus', $product->id) }}" method="POST"
                                     style="display:inline;">
                                     @csrf
                                     @method('PATCH')
                                     <button type="submit" class="action-btn" title="Toggle Status">
                                         <i class="fas fa-toggle-{{ $product->status ? 'on' : 'off' }}"></i>
                                     </button>
                                 </form>
                                 <form action="{{ route('products.delete', $product->id) }}" method="POST"
                                     style="display:inline;">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="action-btn delete" title="Delete Product">
                                         <i class="fas fa-trash"></i>
                                     </button>
                                 </form>

                             </div>
                         </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>

         <div class="pagination">
             <div class="pagination-info">
                 Showing {{ $products->firstItem() ?? 0 }} to {{ $products->lastItem() ?? 0 }} of
                 {{ $products->total() ?? 0 }} products
             </div>
             <div class="pagination-controls">
                 {{ $products->links('vendor.pagination.simple-bootstrap-4') }}
             </div>
         </div>

     </div>
 @endsection
 @push('script')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             // 🔹 Event delegation for action buttons
             const tableBody = document.querySelector('.products-table tbody');

             tableBody.addEventListener('click', function(e) {
                 const toggleBtn = e.target.closest('button[action="toggle"]') || e.target.closest(
                     '.action-btn');
                 const deleteBtn = e.target.closest('.delete');

                 // Toggle Status button
                 if (toggleBtn && toggleBtn.closest('form[action*="toggleStatus"]')) {
                     const row = toggleBtn.closest('tr');
                     const productName = row.querySelector('.product-name').textContent.trim();
                     const productStatus = row.dataset.status === '1'; // true/false

                     if (productStatus) {
                         if (!confirm(`Do you want to remove listing of the product: ${productName}?`)) {
                             e.preventDefault(); // Stop form submission
                         }
                     } else {
                         if (!confirm(`Do you want to list the product: ${productName}?`)) {
                             e.preventDefault();
                         }
                     }
                 }

                 // Delete button
                 if (deleteBtn) {
                     const row = deleteBtn.closest('tr');
                     const productName = row.querySelector('.product-name').textContent.trim();

                     if (!confirm(`Are you sure you want to delete ${productName}?`)) {
                         e.preventDefault(); // Stop form submission
                     } else {
                         alert(`${productName} has been successfully deleted.`);
                     }
                 }
             });
         });
     </script>
 @endpush
