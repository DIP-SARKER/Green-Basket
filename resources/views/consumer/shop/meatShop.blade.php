<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🥩 Meat | Green Basket | Farm to Table</title>
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
                    <a href="{{ route('shop') }}" class="active">Shop</a>
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