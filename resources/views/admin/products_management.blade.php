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
 @endsection
 @push('script')
     <script>
         // Simple search functionality
         document.addEventListener('DOMContentLoaded', function() {
             const searchInput = document.querySelector('.search-box input');
             const tableRows = document.querySelectorAll('.products-table tbody tr');

             searchInput.addEventListener('input', function() {
                 const searchTerm = this.value.toLowerCase();

                 tableRows.forEach(row => {
                     const productName = row.querySelector('.product-name').textContent
                         .toLowerCase();
                     if (productName.includes(searchTerm)) {
                         row.style.display = '';
                     } else {
                         row.style.display = 'none';
                     }
                 });
             });

             // Action buttons event listeners
             document.querySelectorAll('.action-btn').forEach(button => {
                 button.addEventListener('click', function(event) {
                     const action = this.querySelector('i').className;
                     const row = this.closest('tr');
                     const productName = row.querySelector('.product-name').textContent.trim();
                     const productStatus = row.dataset.status ===
                     '1'; // Convert "1" or "0" to boolean

                     if (action.includes('toggle')) {
                         if (productStatus) {
                             if (!confirm(
                                     `Do you want to remove listing of the product: ${productName}?`
                                     )) {
                                 event.preventDefault(); // Prevent if user cancels
                             }
                         } else {
                             if (!confirm(`Do you want to list the product: ${productName}?`)) {
                                 event.preventDefault();
                             }
                         }
                     } else if (action.includes('trash')) {
                         if (!confirm(`Are you sure you want to delete ${productName}?`)) {
                             event.preventDefault();
                         } else {
                             alert(`${productName} has been successfully deleted.`);
                         }
                     }
                 });
             });


         });
     </script>
 @endpush
