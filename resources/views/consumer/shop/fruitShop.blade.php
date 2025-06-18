<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐟 Fresh Vegetables | Green Basket | Farm to Table</title>
    <link rel="stylesheet" href="{{ asset("css\hridoy\basic.css") }}">
    <link rel="stylesheet" href="{{asset("css/hridoy/vegetableShop.css")}}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }}">Shop</a>
                    <a href="#">Farmers</a>
                    <a href="/recipes">Recipes</a>
                    <a href="#">About</a>
                    <div class="search-container">
                        <span class="search-icon">🔍</span>
                        <input type="text" class="search-input" placeholder="Search products...">
                    </div>
                    <a href="#" class="cta-button">Order Now</a>
                </div>
            </nav>
        </div>
    </header>

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
                    style="background-image: url('https://images.unsplash.com/photo-1620214478032-6f0c0c26338a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
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
                    style="background-image: url('https://images.unsplash.com/photo-1582727461732-4f2c98f2af91?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
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
                    style="background-image: url('https://images.unsplash.com/photo-1565895405138-e9747c10c6f2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
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
                    style="background-image: url('https://images.unsplash.com/photo-1613477838667-4c0883b978b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
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
                    style="background-image: url('https://images.unsplash.com/photo-1576186726113-b2b3a9b259c2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
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
                    style="background-image: url('https://images.unsplash.com/photo-1564166174575-46b106f5c2a1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
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


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>Green Basket</h3>
                    <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-top: 1rem;">Farm fresh groceries,
                        delivered simple.</p>
                </div>

                <div class="footer-column">
                    <h3>Shop</h3>
                    <ul>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Dairy</a></li>
                        <li><a href="#">Meat</a></li>
                        <li><a href="#">Seasonal</a></li>
                        <li><a href="#">All Products</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Our Farmers</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Help</h3>
                    <ul>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Delivery Info</a></li>
                        <li><a href="#">Returns</a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2023 Green Basket. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>