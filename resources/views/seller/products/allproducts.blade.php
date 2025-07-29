@extends('seller.seller-index')
@push('style')
<title>All Products</title>
<style>
    /* Product Section */
.seller-products-section {
  margin-left: 250px; /* accommodates sidebar width */
  padding: 3rem 2rem;
  background-color: var(--background);
}

.section-title {
  font-size: 2rem;
  font-weight: 600;
  margin-bottom: 2rem;
  color: var(--dark);
}

/* Product Grid */
.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
  gap: 2rem;
}

/* Product Card */
.product-card {
  background-color: var(--card);
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
  overflow: hidden;
  transition: transform 0.3s ease;
  padding: 1rem;
  text-align: center;
}

.product-card:hover {
  transform: translateY(-5px);
}

/* Image Styling */
.product-image img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 1rem;
}

/* Product Info */
.product-name {
  font-size: 1.25rem;
  color: var(--dark);
  font-weight: 500;
  margin-bottom: 0.5rem;
}

.product-price {
  font-size: 1rem;
  color: var(--earth);
  margin-bottom: 1rem;
}

/* Action Buttons */
.edit-delete-buttons {
  display: flex;
  justify-content: center;
  gap: 0.75rem;
}

.edit-button,
.delete-button {
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 6px;
  color: #fff;
  font-size: 0.9rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.edit-button {
  background-color: var(--primary);
}

.edit-button:hover {
  background-color: var(--primary-dark);
}

.delete-button {
  background-color: var(--danger);
}

.delete-button:hover {
  background-color: #d32f2f;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .seller-products-section {
    margin-left: 70px;
    padding: 2rem 1rem;
  }

  .product-grid {
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 1.5rem;
  }
}

</style>
@endpush

@section('main-content')


<!-- Products List -->
        <div class="seller-products-section">
            <div class="section-header">
                <div class="section-title">Your Products</div>
            </div>
            <div class="product-grid">
                @forelse($products as $product)
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ $product->image_url }}" alt="Product Image">
                        </div>
                        <div class="product-name">{{ $product->name }}</div>
                        <div class="product-price">${{ number_format($product->price, 2) }}</div>
                        <div class="edit-delete-buttons">
                            <a href="{{ route('seller.products.edit', $product->id) }}">
                                <button class="edit-button">Edit</button>
                            </a>
                            <form action="{{ route('seller.products.destroy', $product->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button"
                                    onclick="return confirm('Delete this product?')">Delete</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div>No products found.</div>
                @endforelse
            </div>
        </div>
@endsection