@extends('index')
@push('style')
<title>Shop | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/shop.css') }}">
<style>
    nav svg{
        display: none;
    }
</style>
@endpush

@section('main-content')
    <main class="container">
        <!-- Category Banner -->
        <section class="category-banner">
            <h2 class="category-title">Shop by Category</h2>
            <div class="category-grid">
                <a href="{{ route("fruitShop") }}">
                    <div class="category-card">
                        <h1>🍏</h1>
                        <h3>Fresh Fruits</h3>
                    </div>
                </a>
                <a href="{{ route("vegetableShop") }}">
                    <div class="category-card">
                        <h1>🥕</h1>
                        <h3>Organic Vegetables</h3>
                    </div>
                </a>
                <a href="{{ route('meatShop') }}">
                    <div class="category-card">
                        <h1>🍗</h1>
                        <h3>Farm Meats</h3>
                    </div>
                </a>
                <a href="{{ route('fishShop') }}">
                    <div class="category-card">
                        <h1>🐟</h1>
                        <h3>Freshwater Fish</h3>
                    </div>
                </a>
                <a href="{{ route('bakeryShop') }}">
                    <div class="category-card">
                        <h1>🥯</h1>
                        <h3>Bakery Delights</h3>
                    </div>
                </a>
                <a href="{{ route('dairyShop') }}">
                    <div class="category-card">
                        <h1>🥛</h1>
                        <h3>Dairy </h3>
                    </div>
                </a>


            </div>
        </section>

        <!-- Featured Products -->
        <!-- Products Grid -->
        <div class="products-grid">
            @forelse ($products as $product)
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('{{ $product->image_url ?? asset('default-fruit.jpg') }}');">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <p class="product-farmer">{{ $product->seller->name ?? 'Local Farmer' }}</p>
                        <p class="product-price">৳{{ $product->price }}</p>
                        <div class="product-meta">
                            <span class="product-organic">Fresh & Local</span>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @empty
                <p>No fruits available at the moment.</p>
            @endforelse
        </div>
        <div class="pagination-wrapper" >
            {{ $products->links() }}
        </div>

        <!-- Featured Sellers -->
        <section class="section">
            <h2 class="section-title">Meet Our Farmers</h2>
            <div class="sellers-grid">
                <!-- Seller 1 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">Sunny Valley Orchard</h3>
                    <p class="seller-specialty">Organic Fruits</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>

                <!-- Seller 2 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">Green Thumb Farm</h3>
                    <p class="seller-specialty">Seasonal Vegetables</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>

                <!-- Seller 3 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1516467508483-a7212febe31a?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">Pasture Prime Ranch</h3>
                    <p class="seller-specialty">Grass-Fed Meats</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>

                <!-- Seller 4 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1605007493699-af65834f8a05?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">Berry Best Farms</h3>
                    <p class="seller-specialty">Berries & Melons</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>
            </div>
        </section>
    </main>
@endsection