<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🥕 Organic Carrots | Green Basket | Farm Fresh Vegetables</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/hridoy/basic.css") }}">
    <link rel="stylesheet" href="{{ asset('css/moshiur/productpage.css') }}">
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
                        <img src="https://images.unsplash.com/photo-1606788075761-3ab6b2a41899?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                            alt="Fresh Heirloom Tomatoes">
                    </div>
                    <div class="thumbnail-grid">
                        <div class="thumbnail active">
                            <img src="https://images.unsplash.com/photo-1606788075761-3ab6b2a41899?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                alt="Tomatoes thumbnail 1">
                        </div>
                        <div class="thumbnail">
                            <img src="https://images.unsplash.com/photo-1560193541-3c4f040b2d55?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                alt="Tomatoes thumbnail 2">
                        </div>
                        <div class="thumbnail">
                            <img src="https://images.unsplash.com/photo-1611573896319-e870060c3673?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                alt="Tomatoes thumbnail 3">
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="product-details">
                    <h1>Heirloom Tomatoes</h1>
                    <div class="product-meta">
                        <span class="product-rating">★★★★☆ (36)</span>
                        <span class="product-sku">SKU: HT102</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">$3.79/lb</span>
                        <span class="original-price">$4.49/lb</span>
                        <span class="discount-badge">Save 16%</span>
                    </div>

                    <div class="product-description">
                        <p>Bursting with flavor and color, our Heirloom Tomatoes are a feast for both the palate and the
                            eyes. Grown without synthetic chemicals, these tomatoes are picked ripe from the vine and
                            deliver unmatched sweetness and depth.</p>
                        <ul class="product-features">
                            <li>🌿 Non-GMO & sustainably farmed</li>
                            <li>🌞 Sun-ripened for bold, rich taste</li>
                            <li>📦 Delivered within 24–48 hours of harvest</li>
                            <li>🍅 Ideal for salads, bruschetta, and sauces</li>
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
                            <span class="icon">📦</span>
                            <span>Carefully packed to prevent bruising</span>
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
                        <h3>Why Heirloom Tomatoes?</h3>
                        <p>These tomatoes are cultivated from seeds passed down for generations, retaining the distinct
                            character and vibrant flavors of their heritage. They are pollinated naturally and grown
                            with care by small-scale farmers who prioritize soil health and ecosystem balance.</p>
                        <p>Expect irregular shapes, bold colors, and exceptional taste—each tomato is unique, much like
                            the stories behind them.</p>
                    </div>

                    <div class="tab-pane" id="farm">
                        <h3>Valley Roots Cooperative</h3>
                        <p>Located in California’s Central Valley, Valley Roots Cooperative brings together passionate
                            growers using:</p>
                        <ul>
                            <li>Open-pollinated seed varieties</li>
                            <li>No synthetic fertilizers or pesticides</li>
                            <li>Crop rotation and compost-based fertilization</li>
                            <li>Partnerships with local food banks</li>
                        </ul>
                    </div>

                    <div class="tab-pane" id="nutrition">
                        <h3>Nutritional Snapshot</h3>
                        <p>Serving Size: 1 medium tomato (123g)</p>
                        <table class="nutrition-table">
                            <tr>
                                <td>Calories</td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td>Total Fat</td>
                                <td>0g</td>
                            </tr>
                            <tr>
                                <td>Sodium</td>
                                <td>6mg</td>
                            </tr>
                            <tr>
                                <td>Total Carbohydrate</td>
                                <td>5g</td>
                            </tr>
                            <tr>
                                <td>Dietary Fiber</td>
                                <td>1g</td>
                            </tr>
                            <tr>
                                <td>Sugars</td>
                                <td>3g</td>
                            </tr>
                            <tr>
                                <td>Protein</td>
                                <td>1g</td>
                            </tr>
                            <tr>
                                <td>Vitamin C</td>
                                <td>28% DV</td>
                            </tr>
                            <tr>
                                <td>Vitamin A</td>
                                <td>20% DV</td>
                            </tr>
                            <tr>
                                <td>Potassium</td>
                                <td>8% DV</td>
                            </tr>
                        </table>
                    </div>

                    <div class="tab-pane" id="reviews">
                        <h3>Customer Reviews</h3>
                        <div class="review">
                            <div class="review-header">
                                <span class="review-author">Lena K.</span>
                                <span class="review-rating">★★★★★</span>
                                <span class="review-date">June 12, 2025</span>
                            </div>
                            <p class="review-text">Absolutely stunning tomatoes—each one looked like art and tasted
                                better than any I've had before. They made my summer caprese unforgettable!</p>
                        </div>
                        <div class="review">
                            <div class="review-header">
                                <span class="review-author">Derek R.</span>
                                <span class="review-rating">★★★★☆</span>
                                <span class="review-date">May 30, 2025</span>
                            </div>
                            <p class="review-text">Loved the variety in color and size. A couple were a little soft on
                                arrival but still delicious. Will definitely order again.</p>
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