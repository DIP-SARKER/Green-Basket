@extends('index')
@push('style')
<title>Meat Shop | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/vegetableShop.css') }}">
@endpush

@section('main-content')
    <main class="container">
        <!-- Hero Banner -->
        <section class="hero-banner">
            <h1>Fresh Halal Meat Delivered to Your Home</h1>
            <p>We bring you fresh, halal-certified meat sourced from trusted local farms across Bangladesh. Hygienically
                processed, naturally fed, and delivered chilled within hours of preparation.</p>
            <div class="trust-badges">
                <div class="badge">
                    <i>✓</i> 100% Halal Certified
                </div>
                <div class="badge">
                    <i>✓</i> Antibiotic-Free
                </div>
                <div class="badge">
                    <i>✓</i> Hygienically Processed
                </div>
            </div>
        </section>

        <!-- Category Filter -->
        <div class="category-filter">
            <button class="filter-btn active">All Meats</button>
            <button class="filter-btn">Chicken</button>
            <button class="filter-btn">Beef</button>
            <button class="filter-btn">Mutton</button>
            <button class="filter-btn">Fish</button>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://ottawavalleymeats.com/cdn/shop/collections/Chicken.png?v=1700680888');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Deshi Chicken (Free Range)</h3>
                    <p class="product-farmer">From Tangail Poultry Farm</p>
                    <p class="product-price">৳380/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">No Antibiotics</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://cdn.britannica.com/68/143268-050-917048EA/Beef-loin.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Beef (Grass-Fed)</h3>
                    <p class="product-farmer">From Rangpur Cattle Farm</p>
                    <p class="product-price">৳650/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Halal Certified</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://admin.qualityfoods.com.bd/storage/product/2023-08-31-64f05d1ccb75f.png');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Deshi Mutton (Goat)</h3>
                    <p class="product-farmer">From Jashore Goat Farms</p>
                    <p class="product-price">৳950/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Free Grazing</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://omak.co.nz/wp-content/uploads/whole-duck.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Duck (Has)</h3>
                    <p class="product-farmer">From Sylhet Organic Farms</p>
                    <p class="product-price">৳450/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Naturally Raised</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection