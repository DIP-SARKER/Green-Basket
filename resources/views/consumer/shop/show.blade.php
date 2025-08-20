@extends('index')
@push('style')
    <title>{{ $product->name }} | গ্রিন বাস্কেট</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/product-details.css') }}">
@endpush

@section('main-content')
    <main class="container">
        <section class="product-detail">
            <div class="product-image-large"
                style="background-image: url('{{ $product->image_url ?? asset('default-fruit.jpg') }}');"></div>

            <div class="product-info-detail">
                <h1>{{ $product->name }}</h1>
                <p>বিক্রেতা: {{ $product->seller->name ?? 'স্থানীয় কৃষক' }}</p>
                <p>{{ $product->description }}</p>
                <p class="price">৳<span id="total-price">{{ $product->price }}</span> প্রতি <span id="item-count">1</span>
                    টি</p>
                <input type="hidden" id="unit-price" value="{{ $product->price }}">
                <p class="stock">স্টকে আছে: {{ $product->stock_quantity }} টি।</p>

                <!-- পরিমাণ সিলেক্টর -->
                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <label for="quantity">পরিমাণ:</label>
                    <input type="number" name="quantity" id="quantity" value="1" min="1"
                        max="{{ $product->stock_quantity }}">
                    <button type="submit" class="add-to-cart-btn">কার্টে যোগ করুন</button>
                </form>
            </div>
        </section>

        <!-- Review Section -->
        <section class="reviews">
            <h2>ক্রেতাদের রিভিউ</h2>

            {{-- রিভিউ তালিকা --}}
            @forelse($product->reviews as $review)
                <div class="review-card">
                    <strong>{{ $review->customer->name }}</strong>
                    <p>⭐ {{ $review->rating }}</p>
                    <p>{{ $review->comment }}</p>
                </div>
            @empty
                <p>এখনও কোনো রিভিউ নেই।</p>
            @endforelse
            @auth('customer')
                <form action="{{ route('reviews.store', $product->id) }}" method="POST">
                    @csrf
                    <label for="rating">রেটিং দিন:</label>
                    <select name="rating" id="rating" required>
                        <option value="1">⭐</option>
                        <option value="2">⭐⭐</option>
                        <option value="3">⭐⭐⭐</option>
                        <option value="4">⭐⭐⭐⭐</option>
                        <option value="5">⭐⭐⭐⭐⭐</option>
                    </select>

                    <label for="comment">মতামত লিখুন:</label>
                    <textarea name="comment" id="comment" rows="3"></textarea>

                    <button type="submit">রিভিউ দিন</button>
                </form>
            @else
                <p>রিভিউ দিতে হলে <a href="{{ route('customer_auth') }}">লগইন করুন</a></p>
            @endauth

        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const quantityInput = document.getElementById('quantity');
            const unitPrice = parseFloat(document.getElementById('unit-price').value);
            const totalPriceSpan = document.getElementById('total-price');

            function updateTotalPrice() {
                let quantity = parseInt(quantityInput.value) || 1;
                if (quantity < 1) quantity = 1;
                if (quantity > {{ $product->stock_quantity }}) quantity = {{ $product->stock_quantity }};
                quantityInput.value = quantity;
                const total = (unitPrice * quantity).toFixed(2);
                totalPriceSpan.textContent = total;
                document.getElementById('item-count').textContent = quantity;
            }

            quantityInput.addEventListener('input', updateTotalPrice);
        });
    </script>
@endsection