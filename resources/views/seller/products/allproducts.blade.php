@extends('seller.seller-index')

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