@extends('index')
@push('style')
    <title>{{ $product->name }} | Green Basket</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/product-details.css') }}">
@endpush

@section('main-content')
<main class="container">
    <section class="product-detail">
        <div class="product-image-large" style="background-image: url('{{ $product->image_url ?? asset('default-fruit.jpg') }}');"></div>

        <div class="product-info-detail">
            <h1>{{ $product->name }}</h1>
            <p>By: {{ $product->seller->name ?? 'Local Farmer' }}</p>
            <p class="price">৳{{ $product->price }}</p>

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
                <strong>{{ $review->user->name }}</strong>
                <p>{{ $review->comment }}</p>
            </div>
        @empty
            <p>No reviews yet.</p>
        @endforelse
    </section>
</main>
@endsection
