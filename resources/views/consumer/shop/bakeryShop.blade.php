<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🥯 Bakery | Green Basket | Farm to Table</title>
    <link rel="stylesheet" href="{{ asset("css/hridoy/basic.css") }}">
    <link rel="stylesheet" href="{{asset("css/hridoy/vegetableShop.css")}}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }} class='active">Shop</a>
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
        <h1>Freshly Baked Bangladeshi Treats, Delivered Daily</h1>
        <p>Our bakery items are handmade daily with traditional recipes and natural ingredients. No preservatives, just pure flavor and freshness.</p>
        <div class="trust-badges">
            <div class="badge"><i>✓</i> Freshly Baked</div>
            <div class="badge"><i>✓</i> Traditional Recipes</div>
            <div class="badge"><i>✓</i> No Preservatives</div>
        </div>
    </section>

    <!-- Category Filter -->
    <div class="category-filter">
        <button class="filter-btn active">All Bakery</button>
        <button class="filter-btn">Breads</button>
        <button class="filter-btn">Snacks</button>
        <button class="filter-btn">Sweets</button>
        <button class="filter-btn">Cakes</button>
    </div>

    <!-- Products Grid -->
    <div class="products-grid">
        <div class="product-card">
            <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1633442496018-6872fbfbbcc7?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
            <div class="product-info">
                <h3 class="product-title">Ruti (Handmade Flatbread)</h3>
                <p class="product-farmer">From Mamar Dokan, Dhaka</p>
                <p class="product-price">৳10/piece</p>
                <div class="product-meta">
                    <span class="product-organic">Whole Wheat</span>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1724805053046-35ad2594d45d?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
            <div class="product-info">
                <h3 class="product-title">Cream Roll</h3>
                <p class="product-farmer">From Golden Bakery, Chittagong</p>
                <p class="product-price">৳35/piece</p>
                <div class="product-meta">
                    <span class="product-organic">Fresh Dairy Cream</span>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>


<div class="product-card">
    <div class="product-image" style="background-image: url('https://i.ytimg.com/vi/7LF-dZxqvBY/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDnZqUFcyIYO9aGrxhiHlrAsIJ3ag');"></div>
    <div class="product-info">
        <h3 class="product-title">Pitha (Chitai)</h3>
        <p class="product-farmer">From Dhaka Bakery, Dhaka</p>
        <p class="product-price">৳20/piece</p>
        <div class="product-meta">
            <span class="product-organic">Made with Rice Flour</span>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
</div>

<div class="product-card">
    <div class="product-image" style="background-image: url('https://www.chainbaker.com/wp-content/uploads/2021/05/IMG_1918.jpg');"></div>
    <div class="product-info">
        <h3 class="product-title">Bakarkhani</h3>
        <p class="product-farmer">From Old Dhaka Special, Dhaka</p>
        <p class="product-price">৳50/piece</p>
        <div class="product-meta">
            <span class="product-organic">Traditional Spiced Dough</span>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
</div>

<div class="product-card">
    <div class="product-image" style="background-image: url('https://pbs.twimg.com/media/FmAk7neaYAI6f9r.jpg');"></div>
    <div class="product-info">
        <h3 class="product-title">Lobongo Lotika</h3>
        <p class="product-farmer">From Rajshahi Bakery, Rajshahi</p>
        <p class="product-price">৳40/piece</p>
        <div class="product-meta">
            <span class="product-organic">Stuffed Sweet Pastry</span>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
</div>

<div class="product-card">
    <div class="product-image" style="background-image: url('https://atanurrannagharrecipe.com/wp-content/uploads/2024/01/Patishapta-Pitha-Recipe-Atanur-Rannaghar.jpg');"></div>
    <div class="product-info">
        <h3 class="product-title">Patisapta</h3>
        <p class="product-farmer">From Misti Mela, Sylhet</p>
        <p class="product-price">৳45/piece</p>
        <div class="product-meta">
            <span class="product-organic">Stuffed Coconut Crepe</span>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>
</div>

<div class="product-card">
    <div class="product-image" style="background-image: url('https://lh6.googleusercontent.com/proxy/63BCzd5cCKGIqr3ppFQsRk_csfbfCeZH2iZ3Aa0uJrN9-xwYGESEnXv5wrtQGWK_bDkijaW0AfN6qS_LFDjUlp1SyRlQAENv');"></div>
    <div class="product-info">
        <h3 class="product-title">Chomchom</h3>
        <p class="product-farmer">From Tangail Sweets, Tangail</p>
        <p class="product-price">৳60/piece</p>
        <div class="product-meta">
            <span class="product-organic">Authentic Tangail Sweet</span>
            <button class="add-to-cart">Add to Cart</button>
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