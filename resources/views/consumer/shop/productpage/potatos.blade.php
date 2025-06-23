<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🥕 Organic Carrots | Green Basket | Farm Fresh Vegetables</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/hridoy/basic.css") }}">
    <link rel="stylesheet" href="{{ asset('css/hridoy/productpage.css') }}">
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

<!-- Product Section -->
<main class="product-section">
    <div class="container">
        <div class="product-grid">
            <!-- Product Images -->
            <div class="product-images">
                <div class="main-image">
                    <img src="https://images.unsplash.com/photo-1601004890684-d8cbf643f5f2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Farm Fresh Potatoes">
                </div>
                <div class="thumbnail-grid">
                    <div class="thumbnail active">
                        <img src="https://images.unsplash.com/photo-1601004890684-d8cbf643f5f2?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Potatoes thumbnail 1">
                    </div>
                    <div class="thumbnail">
                        <img src="https://images.unsplash.com/photo-1603415527030-6e9a0a5e1977?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Potatoes thumbnail 2">
                    </div>
                    <div class="thumbnail">
                        <img src="https://images.unsplash.com/photo-1590080876772-e30e1d211de3?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Potatoes thumbnail 3">
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="product-details">
                <h1>Farm Fresh Potatoes</h1>
                <div class="product-meta">
                    <span class="product-rating">★★★★★ (41)</span>
                    <span class="product-sku">SKU: PT005</span>
                </div>
                <div class="product-price">
                    <span class="current-price">$1.29/lb</span>
                    <span class="original-price">$1.59/lb</span>
                    <span class="discount-badge">Save 19%</span>
                </div>

                <div class="product-description">
                    <p>Our golden-fleshed potatoes are cultivated in nutrient-rich soil and harvested at peak size and flavor. These versatile tubers are perfect for boiling, baking, or roasting and are free from synthetic pesticides.</p>
                    <ul class="product-features">
                        <li>🥔 Naturally grown without GMOs</li>
                        <li>🌾 Rich, earthy flavor and creamy texture</li>
                        <li>📦 Stored in climate-controlled facilities post-harvest</li>
                        <li>🔥 Perfect for fries, mash, or stews</li>
                    </ul>
                </div>

                <div class="product-options">
                    <div class="quantity-selector">
                        <button class="quantity-btn minus">-</button>
                        <input type="number" value="1" min="1" max="10" class="quantity-input">
                        <button class="quantity-btn plus">+</button>
                    </div>
                    <button class="add-to-cart">Add to Basket</button>
                </div>

                <div class="product-shipping">
                    <div class="shipping-info">
                        <span class="icon">🚚</span>
                        <span>Free delivery on orders over $35</span>
                    </div>
                    <div class="shipping-info">
                        <span class="icon">❄️</span>
                        <span>Cool-packed to maintain freshness</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class="product-tabs">
            <div class="tabs-header">
                <button class="tab-btn active" data-tab="description">Description</button>
                <button class="tab-btn" data-tab="farm">Farm Info</button>
                <button class="tab-btn" data-tab="nutrition">Nutrition</button>
                <button class="tab-btn" data-tab="reviews">Reviews</button>
            </div>

            <div class="tabs-content">
                <div class="tab-pane active" id="description">
                    <h3>Why Choose Our Potatoes?</h3>
                    <p>Our potatoes are grown using natural, regenerative practices, ensuring top taste and soil health. Their uniform shape and firm skin make them ideal for a wide range of dishes, from homemade chips to creamy gratins.</p>
                    <p>They are cleaned and cooled after harvesting to lock in their earthy flavor and extend freshness. From our fields to your fork, they deliver rustic goodness in every bite.</p>
                </div>

                <div class="tab-pane" id="farm">
                    <h3>Meadow Grove Farms</h3>
                    <p>Nestled in the Midwest plains, Meadow Grove Farms is known for its eco-conscious methods, including:</p>
                    <ul>
                        <li>Integrated pest management and cover crops</li>
                        <li>Use of compost teas and soil enrichers</li>
                        <li>Hand sorting and quality grading</li>
                        <li>Local delivery partnerships to reduce carbon footprint</li>
                    </ul>
                </div>

                <div class="tab-pane" id="nutrition">
                    <h3>Nutrition Facts</h3>
                    <p>Serving Size: 1 medium potato (148g)</p>
                    <table class="nutrition-table">
                        <tr><td>Calories</td><td>110</td></tr>
                        <tr><td>Total Fat</td><td>0g</td></tr>
                        <tr><td>Sodium</td><td>0mg</td></tr>
                        <tr><td>Total Carbohydrate</td><td>26g</td></tr>
                        <tr><td>Dietary Fiber</td><td>2g</td></tr>
                        <tr><td>Protein</td><td>3g</td></tr>
                        <tr><td>Vitamin C</td><td>30% DV</td></tr>
                        <tr><td>Vitamin B6</td><td>15% DV</td></tr>
                        <tr><td>Potassium</td><td>18% DV</td></tr>
                    </table>
                </div>

                <div class="tab-pane" id="reviews">
                    <h3>Customer Reviews</h3>
                    <div class="review">
                        <div class="review-header">
                            <span class="review-author">Amir H.</span>
                            <span class="review-rating">★★★★★</span>
                            <span class="review-date">June 21, 2025</span>
                        </div>
                        <p class="review-text">Perfect texture and flavor. I made mashed potatoes for iftar and everyone wanted seconds!</p>
                    </div>
                    <div class="review">
                        <div class="review-header">
                            <span class="review-author">Jenny T.</span>
                            <span class="review-rating">★★★★☆</span>
                            <span class="review-date">June 14, 2025</span>
                        </div>
                        <p class="review-text">Really fresh and earthy. A few were smaller than expected but still tasty and versatile in cooking.</p>
                    </div>
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
                    <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-top: 1rem;">Farm fresh groceries, delivered simple.</p>
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