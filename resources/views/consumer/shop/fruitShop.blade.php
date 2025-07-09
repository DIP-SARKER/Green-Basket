@extends('index')
@push('style')
<title>Fruit Shop | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/vegetableShop.css') }}">
@endpush

@section('main-content')
    <main class="container">
        <!-- Hero Banner -->
        <section class="hero-banner">
            <h1>Fresh Bangladeshi Fruits Delivered to Your Door</h1>
            <p>Enjoy the vibrant taste of tropical fruits picked at peak ripeness. From the orchards of Rajshahi to the
                gardens of Sylhet, our fruits are delivered within 24 hours for maximum sweetness and nutrition.</p>
            <div class="trust-badges">
                <div class="badge">
                    <i>✓</i> Naturally Ripened
                </div>
                <div class="badge">
                    <i>✓</i> Sourced from Local Farmers
                </div>
                <div class="badge">
                    <i>✓</i> Handpicked Freshness
                </div>
            </div>
        </section>

        <!-- Category Filter -->
        <div class="category-filter">
            <button class="filter-btn active">All Fruits</button>
            <button class="filter-btn">Seasonal</button>
            <button class="filter-btn">Tropical</button>
            <button class="filter-btn">Citrus</button>
            <button class="filter-btn">Stone Fruits</button>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://www.greenlife.co.ke/wp-content/uploads/2022/04/Mangoes.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Rajshahi Mangoes</h3>
                    <p class="product-farmer">From Bagha Orchards</p>
                    <p class="product-price">৳120/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Naturally Ripened</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://m.media-amazon.com/images/I/81F6bQaa2NL._UF1000,1000_QL80_.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Litchi (Lychee)</h3>
                    <p class="product-farmer">From Dinajpur Gardens</p>
                    <p class="product-price">৳200/100pcs</p>
                    <div class="product-meta">
                        <span class="product-organic">Fresh Harvest</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://cdn.mos.cms.futurecdn.net/7hMnhCqDFY6FHgHXHQ3wn9.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Guava (Amrud)</h3>
                    <p class="product-farmer">From Barisal Farms</p>
                    <p class="product-price">৳60/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Organic</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://www.gardenia.net/wp-content/uploads/2025/05/shutterstock_2453997129.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Jackfruit (Kathal)</h3>
                    <p class="product-farmer">From Gazipur Orchards</p>
                    <p class="product-price">৳100/fruit</p>
                    <div class="product-meta">
                        <span class="product-organic">Bangladesh's National Fruit</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://images.contentstack.io/v3/assets/bltcedd8dbd5891265b/blt66b8f1f45d70de9e/6665ec0febbbaa7d99a9f533/4440854-Banana-hero.jpg?q=70&width=3840&auto=webp');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Banana (Shagor Kola)</h3>
                    <p class="product-farmer">From Narsingdi Banana Farms</p>
                    <p class="product-price">৳30/4 pcs</p>
                    <div class="product-meta">
                        <span class="product-organic">No Artificial Ripening</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://specialtyproduce.com/sppics/11176.png');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Wood Apple (Bael)</h3>
                    <p class="product-farmer">From Kushtia Homesteads</p>
                    <p class="product-price">৳40/fruit</p>
                    <div class="product-meta">
                        <span class="product-organic">Traditional Superfruit</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection