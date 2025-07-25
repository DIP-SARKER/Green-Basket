@extends('index')
@push('style')
    <title>{{ $product->name }} | Green Basket</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/product-details.css') }}">
@endpush

@section('main-content')
    <main class="container">
        <section class="product-detail">
            <div class="product-image-large"
                style="background-image: url('{{ $product->image_url ?? asset('default-fruit.jpg') }}');"></div>

            <div class="product-info-detail">
                <h1>{{ $product->name }}</h1>
                <p>By: {{ $product->seller->name ?? 'Local Farmer' }}</p>
                <p>{{ $product->description }}</p>
                <p class="price">৳<span id="total-price">{{ $product->price }}</span> for <span id="item-count">1</span>
                    item(s)</p>
                <input type="hidden" id="unit-price" value="{{ $product->price }}">

                <!-- Quantity Selector -->
                <form action="#" method="POST">
                    @csrf
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" value="1" min="1">

                    <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                </form>
            </div>
        </section>

        <!-- User Reviews -->
        <section class="reviews">
            <h2>Customer Reviews</h2>
            @forelse($reviews as $review)
                <div class="review-card">
                    <strong>{{ $review->customer->name }}</strong>
                    <p>{{ $review->comment }}</p>
                </div>
            @empty
                <p>No reviews yet.</p>
            @endforelse
        </section>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const quantityInput = document.getElementById('quantity');
            const unitPrice = parseFloat(document.getElementById('unit-price').value);
            const totalPriceSpan = document.getElementById('total-price');

            function updateTotalPrice() {
                const quantity = parseInt(quantityInput.value) || 1;
                const total = (unitPrice * quantity).toFixed(2);
                totalPriceSpan.textContent = total;
                document.getElementById('item-count').textContent = quantity;
                totalPriceSpan.textContent = total;
            }

            quantityInput.addEventListener('input', updateTotalPrice);
        });
    </script>
@endsection