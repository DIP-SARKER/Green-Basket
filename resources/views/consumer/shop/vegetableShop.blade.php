<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🥕 Fresh Vegetables | Green Basket | Farm to Table</title>
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
                    <a href="{{ route('farmers') }}">Farmers</a>
                    <a href="{{ route('recipes') }}">Recipes</a>
                    <a href="{{ route('about') }}">About</a>
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
            <h1>Farm-Fresh Vegetables Delivered to Your Door</h1>
            <p>Our vegetables are harvested at peak ripeness and delivered within 24 hours to ensure maximum freshness, nutrition, and flavor. No pesticides, no middlemen - just pure goodness from farm to table.</p>
            <div class="trust-badges">
                <div class="badge">
                    <i>✓</i> 100% Organic
                </div>
                <div class="badge">
                    <i>✓</i> Locally Grown
                </div>
                <div class="badge">
                    <i>✓</i> Farm to Table in 24h
                </div>
            </div>
        </section>

        <!-- Category Filter -->
        <div class="category-filter">
            <button class="filter-btn active">All Vegetables</button>
            <button class="filter-btn">Leafy Greens</button>
            <button class="filter-btn">Root Vegetables</button>
            <button class="filter-btn">Nightshades</button>
            <button class="filter-btn">Cruciferous</button>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1518977676601-b53f82aba655?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="product-info">
                    <h3 class="product-title">Organic Carrots</h3>
                    <p class="product-farmer">From Johnson Family Farm</p>
                    <p class="product-price">$2.49/lb</p>
                    <div class="product-meta">
                        <span class="product-organic">Organic</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1598170845058-32b9d6a5da37?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80');"></div>
                <div class="product-info">
                    <h3 class="product-title">Fresh Spinach</h3>
                    <p class="product-farmer">From Green Valley Acres</p>
                    <p class="product-price">$3.99/bunch</p>
                    <div class="product-meta">
                        <span class="product-organic">Organic</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1566842600175-97dca3c5ad38?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="product-info">
                    <h3 class="product-title">Heirloom Tomatoes</h3>
                    <p class="product-farmer">From Sunny Slope Farm</p>
                    <p class="product-price">$4.99/lb</p>
                    <div class="product-meta">
                        <span class="product-organic">Organic</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1601493700631-2b16ec4b4716?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="product-info">
                    <h3 class="product-title">Baby Potatoes</h3>
                    <p class="product-farmer">From Harvest Moon Farm</p>
                    <p class="product-price">$1.99/lb</p>
                    <div class="product-meta">
                        <span class="product-organic">Organic</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
                <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1601493700631-2b16ec4b4716?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="product-info">
                    <h3 class="product-title">Rainbow Chard</h3>
                    <p class="product-farmer">From Green Valley Acres</p>
                    <p class="product-price">$2.99/bunch</p>
                    <div class="product-meta">
                        <span class="product-organic">Organic</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card">
                <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1601493700631-2b16ec4b4716?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="product-info">
                    <h3 class="product-title">Zucchini</h3>
                    <p class="product-farmer">From Sunny Slope Farm</p>
                    <p class="product-price">$1.49/lb</p>
                    <div class="product-meta">
                        <span class="product-organic">Organic</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="product-card">
                <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1518977676601-b53f82aba655?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="product-info">
                    <h3 class="product-title">Beets</h3>
                    <p class="product-farmer">From Johnson Family Farm</p>
                    <p class="product-price">$3.29/bunch</p>
                    <div class="product-meta">
                        <span class="product-organic">Organic</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="product-card">
                <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1598170845058-32b9d6a5da37?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80');"></div>
                <div class="product-info">
                    <h3 class="product-title">Kale</h3>
                    <p class="product-farmer">From Harvest Moon Farm</p>
                    <p class="product-price">$2.79/bunch</p>
                    <div class="product-meta">
                        <span class="product-organic">Organic</span>
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