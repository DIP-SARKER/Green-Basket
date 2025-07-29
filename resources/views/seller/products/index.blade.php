@extends('seller.seller-index')

@push('style')

.products-container {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    min-height: 100vh;
    padding: 2rem 0;
}

.products-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 16px;
    box-shadow: 
        0 20px 25px -5px rgba(0, 0, 0, 0.1),
        0 10px 10px -5px rgba(0, 0, 0, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.2);
    overflow: hidden;
    transition: all 0.3s ease;
}

.products-card:hover {
    transform: translateY(-2px);
    box-shadow: 
        0 25px 50px -12px rgba(0, 0, 0, 0.15),
        0 0 0 1px rgba(59, 130, 246, 0.1);
}

/* Header Styling */
.products-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 2rem;
    position: relative;
    overflow: hidden;
}

.products-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
    pointer-events: none;
}

.products-header h2 {
    font-size: 2rem;
    font-weight: 700;
    margin: 0;
    position: relative;
    z-index: 1;
}

.add-product-btn {
    background: rgba(255, 255, 255, 0.15);
    border: 2px solid rgba(255, 255, 255, 0.3);
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 12px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    position: relative;
    z-index: 1;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.add-product-btn:hover {
    background: rgba(255, 255, 255, 0.25);
    border-color: rgba(255, 255, 255, 0.5);
    transform: translateY(-1px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
}

.add-product-btn::before {
    content: '+';
    font-size: 1.2rem;
    font-weight: bold;
}

/* Success/Error Messages */
.flash-message {
    margin: 1.5rem;
    padding: 1rem 1.25rem;
    border-radius: 12px;
    font-weight: 500;
    position: relative;
    animation: slideIn 0.3s ease-out;
}

.flash-message.success {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
    border: none;
}

.flash-message.error {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    color: white;
    border: none;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Table Styling */
.products-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    background: white;
}

/* Table Header */
.products-table thead {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
}

.products-table th {
    padding: 1.25rem 1.5rem;
    text-align: left;
    font-weight: 700;
    color: #374151;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    border-bottom: 2px solid #e5e7eb;
    position: relative;
}

.products-table th::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    transition: width 0.3s ease;
}

.products-table th:hover::after {
    width: 100%;
}

/* Table Body */
.products-table tbody tr {
    transition: all 0.2s ease;
    border-bottom: 1px solid #f3f4f6;
}

.products-table tbody tr:hover {
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    transform: scale(1.001);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.products-table tbody tr.bg-blue-50 {
    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%) !important;
    box-shadow: inset 0 0 0 1px #3b82f6;
}

.products-table td {
    padding: 1.25rem 1.5rem;
    vertical-align: middle;
    border-bottom: 1px solid #f3f4f6;
}

/* Product Image */
.product-image {
    width: 64px;
    height: 64px;
    border-radius: 12px;
    object-fit: cover;
    border: 2px solid #e5e7eb;
    transition: all 0.3s ease;
}

.product-image:hover {
    transform: scale(1.1);
    border-color: #3b82f6;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.image-placeholder {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px dashed #d1d5db;
    transition: all 0.3s ease;
}

.image-placeholder:hover {
    border-color: #3b82f6;
    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
}

/* Product Details */
.product-name {
    font-weight: 600;
    color: #111827;
    font-size: 0.875rem;
    margin-bottom: 0.25rem;
}

.product-description {
    color: #6b7280;
    font-size: 0.8rem;
    line-height: 1.4;
}

/* Form Elements in Edit Mode */
.edit-input, .edit-textarea, .edit-select {
    width: 100%;
    padding: 0.5rem 0.75rem;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    font-size: 0.875rem;
    transition: all 0.2s ease;
    background: white;
}

.edit-input:focus, .edit-textarea:focus, .edit-select:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    background: #fefefe;
}

.edit-textarea {
    resize: vertical;
    font-family: inherit;
}

/* Badges and Status */
.status-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.375rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.025em;
}

.status-badge.active {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.status-badge.inactive {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    color: white;
}

.category-badge {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
    padding: 0.375rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
}

.stock-badge {
    padding: 0.375rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
}

.stock-high {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.stock-medium {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: white;
}

.stock-low {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    color: white;
}

/* Action Buttons */
.action-btn {
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    font-size: 0.875rem;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
    display: inline-block;
    text-align: center;
}

.edit-btn {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: white;
}

.edit-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.4);
}

.save-btn {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.save-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
}

.cancel-btn {
    background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%);
    color: white;
}

.cancel-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(107, 114, 128, 0.4);
}

.delete-btn {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    color: white;
}

.delete-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);
}

/* Empty State */
.empty-state {
    text-align: center;
    padding: 4rem 2rem;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
}

.empty-state svg {
    color: #9ca3af;
    margin: 0 auto 1rem;
}

.empty-state h3 {
    color: #111827;
    font-size: 1.125rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.empty-state p {
    color: #6b7280;
    margin-bottom: 2rem;
}

.empty-state .add-btn {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.empty-state .add-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
}

/* Loading Overlay */
.loading-overlay {
    position: fixed;
    inset: 0;
    background: rgba(17, 24, 39, 0.7);
    backdrop-filter: blur(4px);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 50;
}

.loading-content {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.loading-spinner {
    width: 32px;
    height: 32px;
    border: 3px solid #e5e7eb;
    border-top: 3px solid #3b82f6;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.loading-text {
    color: #374151;
    font-weight: 500;
}

/* Pagination */
.pagination-wrapper {
    padding: 1.5rem;
    border-top: 1px solid #e5e7eb;
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .products-table {
        font-size: 0.875rem;
    }
    
    .products-table th,
    .products-table td {
        padding: 1rem;
    }
}

@media (max-width: 768px) {
    .products-header {
        padding: 1.5rem;
    }
    
    .products-header h2 {
        font-size: 1.5rem;
    }
    
    .products-table th,
    .products-table td {
        padding: 0.75rem 0.5rem;
    }
    
    .product-image,
    .image-placeholder {
        width: 48px;
        height: 48px;
    }
    
    .action-btn {
        padding: 0.375rem 0.75rem;
        font-size: 0.8rem;
    }
}

/* Animation Classes */
.fade-in {
    animation: fadeIn 0.3s ease-out;
}

.slide-up {
    animation: slideUp 0.3s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Focus States for Accessibility */
.action-btn:focus,
.edit-input:focus,
.edit-textarea:focus,
.edit-select:focus {
    outline: 2px solid #3b82f6;
    outline-offset: 2px;
}

/* Print Styles */
@media print {
    .products-container {
        background: white;
    }
    
    .products-card {
        box-shadow: none;
        border: 1px solid #e5e7eb;
    }
    
    .products-header {
        background: #f3f4f6 !important;
        color: #111827 !important;
    }
    
    .action-btn,
    .add-product-btn,
    .loading-overlay {
        display: none !important;
    }
}

@endpush

@section('main-content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold text-gray-800">My Products</h2>
                <a href="{{ route('seller.products.create') }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                    Add New Product
                </a>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mx-6 mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('success') }}
            </div>
        @endif

        <!-- Products Table -->
        <div class="overflow-x-auto">
            @if($products->count() > 0)
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Image
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Product Details
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Category
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Stock
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($products as $product)
                            <tr class="hover:bg-gray-50" id="product-row-{{ $product->id }}">
                                <!-- Normal View -->
                                <td class="px-6 py-4 whitespace-nowrap view-mode-{{ $product->id }}">
                                    <div class="relative">
                                        @if($product->image_url)
                                            <img src="{{ asset( $product->image_url) }}" 
                                                 alt="{{ $product->name }}" 
                                                 class="h-16 w-16 object-cover rounded-lg">
                                        @else
                                            <div class="h-16 w-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                                <svg class="h-8 w-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                
                                <!-- Edit Mode Image -->
                                <td class="px-6 py-4 whitespace-nowrap edit-mode-{{ $product->id }}" style="display: none;">
                                    <div class="relative">
                                        @if($product->image_url)
                                            <img src="{{ asset(  $product->image_url) }}" 
                                                 alt="{{ $product->name }}" 
                                                 class="h-16 w-16 object-cover rounded-lg mb-2">
                                        @endif
                                        <input type="url" 
                                               name="image" 
                                               class="text-xs w-full">
                                    </div>
                                </td>

                                <!-- Product Details - View Mode -->
                                <td class="px-6 py-4 view-mode-{{ $product->id }}">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                                        <div class="text-sm text-gray-500">{{ Str::limit($product->description, 50) }}</div>
                                    </div>
                                </td>
                                
                                <!-- Product Details - Edit Mode -->
                                <td class="px-6 py-4 edit-mode-{{ $product->id }}" style="display: none;">
                                    <div class="space-y-2">
                                        <input type="text" 
                                               name="name" 
                                               value="{{ $product->name }}"
                                               class="w-full px-2 py-1 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-500"
                                               placeholder="Product name">
                                        <textarea name="description" 
                                                  rows="2"
                                                  class="w-full px-2 py-1 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-500"
                                                  placeholder="Description">{{ $product->description }}</textarea>
                                    </div>
                                </td>

                                <!-- Category - View Mode -->
                                <td class="px-6 py-4 whitespace-nowrap view-mode-{{ $product->id }}">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        {{ $product->category->name ?? 'N/A' }}
                                    </span>
                                </td>
                                
                                <!-- Category - Edit Mode -->
                                <td class="px-6 py-4 whitespace-nowrap edit-mode-{{ $product->id }}" style="display: none;">
                                    <select name="category_id" 
                                            class="w-full px-2 py-1 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-500">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" 
                                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>

                                <!-- Price - View Mode -->
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 view-mode-{{ $product->id }}">
                                    ${{ number_format($product->price, 2) }}
                                </td>
                                
                                <!-- Price - Edit Mode -->
                                <td class="px-6 py-4 whitespace-nowrap edit-mode-{{ $product->id }}" style="display: none;">
                                    <input type="number" 
                                           name="price" 
                                           step="0.01" 
                                           min="0"
                                           value="{{ $product->price }}"
                                           class="w-full px-2 py-1 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-500"
                                           placeholder="0.00">
                                </td>

                                <!-- Stock - View Mode -->
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 view-mode-{{ $product->id }}">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                        {{ $product->stock_quantity > 10 ? 'bg-green-100 text-green-800' : 
                                           ($product->stock_quantity > 0 ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                        {{ $product->stock_quantity }} units
                                    </span>
                                </td>
                                
                                <!-- Stock - Edit Mode -->
                                <td class="px-6 py-4 whitespace-nowrap edit-mode-{{ $product->id }}" style="display: none;">
                                    <input type="number" 
                                           name="stock_quantity" 
                                           min="0"
                                           value="{{ $product->stock_quantity }}"
                                           class="w-full px-2 py-1 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-500"
                                           placeholder="0">
                                </td>

                                <!-- Status - View Mode -->
                                <td class="px-6 py-4 whitespace-nowrap view-mode-{{ $product->id }}">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                        {{ $product->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ ucfirst($product->status) }}
                                    </span>
                                </td>
                                
                                <!-- Status - Edit Mode -->
                                <td class="px-6 py-4 whitespace-nowrap edit-mode-{{ $product->id }}" style="display: none;">
                                    <select name="status" 
                                            class="w-full px-2 py-1 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-500">
                                        <option value="active" {{ $product->status === 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $product->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </td>

                                <!-- Actions - View Mode -->
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium view-mode-{{ $product->id }}">
                                    <div class="flex space-x-2">
                                        <button onclick="editProduct({{ $product->id }})" 
                                                class="text-indigo-600 hover:text-indigo-900 font-medium">
                                            Edit
                                        </button>
                                        <form action="{{ route('seller.products.destroy', $product->id) }}" 
                                              method="POST" 
                                              class="inline"
                                              onsubmit="return confirm('Are you sure you want to delete this product?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="text-red-600 hover:text-red-900 font-medium">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                
                                <!-- Actions - Edit Mode -->
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium edit-mode-{{ $product->id }}" style="display: none;">
                                    <div class="flex space-x-2">
                                        <button onclick="saveProduct({{ $product->id }})" 
                                                class="text-green-600 hover:text-green-900 font-medium">
                                            Save
                                        </button>
                                        <button onclick="cancelEdit({{ $product->id }})" 
                                                class="text-gray-600 hover:text-gray-900 font-medium">
                                            Cancel
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-gray-200">
                    {{ $products->links() }}
                </div>
            @else
                <div class="text-center py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m14 0v5a2 2 0 01-2 2H6a2 2 0 01-2 2v-5m14 0H6m14 0l-5-5m-4 0l-5 5"/>
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No products</h3>
                    <p class="mt-1 text-sm text-gray-500">Get started by creating your first product.</p>
                    <div class="mt-6">
                        <a href="{{ route('seller.products.create') }}" 
                           class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                            Add Product
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Loading Overlay -->
<div id="loading-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-6 flex items-center space-x-4">
        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
        <span class="text-gray-700">Updating product...</span>
    </div>
</div>

<script>
function editProduct(productId) {
    // Hide view mode elements
    document.querySelectorAll('.view-mode-' + productId).forEach(function(element) {
        element.style.display = 'none';
    });
    
    // Show edit mode elements
    document.querySelectorAll('.edit-mode-' + productId).forEach(function(element) {
        element.style.display = 'table-cell';
    });
    
    // Change row background color to indicate edit mode
    document.getElementById('product-row-' + productId).classList.add('bg-blue-50');
}

function cancelEdit(productId) {
    // Show view mode elements
    document.querySelectorAll('.view-mode-' + productId).forEach(function(element) {
        element.style.display = 'table-cell';
    });
    
    // Hide edit mode elements
    document.querySelectorAll('.edit-mode-' + productId).forEach(function(element) {
        element.style.display = 'none';
    });
    
    // Remove edit mode background
    document.getElementById('product-row-' + productId).classList.remove('bg-blue-50');
}

function saveProduct(productId) {
    // Show loading overlay
    document.getElementById('loading-overlay').classList.remove('hidden');
    
    const row = document.getElementById('product-row-' + productId);
    
    // Collect form data
    const formData = new FormData();
    formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
    formData.append('_method', 'PUT');
    
    // Get values from edit mode inputs
    const editElements = row.querySelectorAll('.edit-mode-' + productId + ' input, .edit-mode-' + productId + ' textarea, .edit-mode-' + productId + ' select');
    
    editElements.forEach(function(element) {
        if (element.type === 'file') {
            if (element.files[0]) {
                formData.append(element.name, element.files[0]);
            }
        } else {
            formData.append(element.name, element.value);
        }
    });
    
    // Send AJAX request
    fetch(`/seller/products/${productId}`, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
        }
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        }
        throw new Error('Network response was not ok');
    })
    .then(data => {
        // Hide loading overlay
        document.getElementById('loading-overlay').classList.add('hidden');
        
        if (data.success) {
            // Show success message
            showMessage('Product updated successfully!', 'success');
            
            // Refresh the page to show updated data
            setTimeout(function() {
                location.reload();
            }, 1000);
        } else {
            showMessage('Error updating product: ' + (data.message || 'Unknown error'), 'error');
        }
    })
    .catch(error => {
        // Hide loading overlay
        document.getElementById('loading-overlay').classList.add('hidden');
        console.error('Error:', error);
        showMessage('Error updating product. Please try again.', 'error');
    });
}

function showMessage(message, type) {
    // Remove existing messages
    const existingMessages = document.querySelectorAll('.flash-message');
    existingMessages.forEach(msg => msg.remove());
    
    // Create new message
    const messageDiv = document.createElement('div');
    messageDiv.className = `flash-message mx-6 mt-4 px-4 py-3 rounded relative ${
        type === 'success' ? 'bg-green-100 border border-green-400 text-green-700' : 
        'bg-red-100 border border-red-400 text-red-700'
    }`;
    messageDiv.textContent = message;
    
    // Insert after header
    const header = document.querySelector('.px-6.py-4.border-b');
    header.parentNode.insertBefore(messageDiv, header.nextSibling);
    
    // Auto remove after 5 seconds
    setTimeout(function() {
        messageDiv.remove();
    }, 5000);
}

// Add CSRF token to head if not already present
if (!document.querySelector('meta[name="csrf-token"]')) {
    const meta = document.createElement('meta');
    meta.name = 'csrf-token';
    meta.content = '{{ csrf_token() }}';
    document.head.appendChild(meta);
}
</script>
@endsection

