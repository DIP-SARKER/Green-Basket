@extends('seller.seller-index')
@push('style')
<link rel="stylesheet" href="{{ asset('css/hridoy/seller/allProducts.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endpush
@section('page-title')
<h1 class="page-title">Product Management</h1>
@endsection


@section('main-content')
  <div class="main-content">
    <!-- Products Table -->
    <div class="products-section">
    <div class="section-header">
      <div class="section-title">Your Products</div>
      <button class="btn btn-outline" onclick="window.location='{{ route('seller.products.create') }}'">
      <i class="fas fa-plus"></i> Add New
      </button>
    </div>

    <table class="products-table">
      <thead>
      <tr>
        <th>Product</th>
        <th>Status</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Rating</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
      @forelse ($products as $product)
      <tr>
        <td>
        <div class="product-info">
        <div class="product-image">
        @if ($product->image_url)
        <img src="{{ $product->image_url }}" alt="Product Image" style="">
      @else
        <i class="fas fa-box" style="font-size: 24px;"></i>
      @endif
        </div>
        <div>
        <div class="product-name">{{ $product->name }}</div>
        <div class="product-category">{{ $product->category->name ?? 'Uncategorized' }}
        </div>
        </div>
        </div>
        </td>
        <td>
        @if ($product->status)
      <span class="status-badge status-published">Active</span>
      @else
      <span class="status-badge status-unpublished">Hidden</span>
      @endif
        </td>

        <td>${{ number_format($product->price, 2) }}/kg</td>
        <td>
        @if ($product->stock_quantity > 20)
      <span class="stock-indicator stock-high">In Stock ({{ $product->stock_quantity }}kg)</span>
      @elseif ($product->stock_quantity > 0)
      <span class="stock-indicator stock-medium">Low Stock
        ({{ $product->stock_quantity }}kg)</span>
      @else
      <span class="stock-indicator stock-low">Out of Stock</span>
      @endif
        </td>
        <td>
        @php
        $avgRating = round($product->reviews->avg('rating'), 1);
      @endphp
        <i class="fas fa-star" style="color: gold;"></i> {{ $avgRating ?? 'N/A' }}
        </td>
        <td class="action-cell">
        <a href="{{ route('seller.products.edit', $product->id) }}" class="action-btn" title="Edit">
        <i class="fa-solid fa-pen-to-square"></i>
        </a>
        </td>
      </tr>
    @empty
      <tr>
      <td colspan="5" class="text-center">No products available.</td>
      </tr>
    @endforelse
      </tbody>
    </table>

    </div>
  </div>

@endsection