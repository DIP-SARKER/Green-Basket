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
                        <img src="https://images.unsplash.com/photo-1447175008436-054170c2e979?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Fresh Organic Carrots">
                    </div>
                    <div class="thumbnail-grid">
                        <div class="thumbnail active">
                            <img src="https://images.unsplash.com/photo-1447175008436-054170c2e979?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Carrots thumbnail 1">
                        </div>
                        <div class="thumbnail">
                            <img src="https://images.unsplash.com/photo-1589927986089-35812388d1f4?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Carrots thumbnail 2">
                        </div>
                        <div class="thumbnail">
                            <img src="https://images.unsplash.com/photo-1589927986527-27b0091350a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Carrots thumbnail 3">
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="product-details">
                    <h1>Organic Carrots</h1>
                    <div class="product-meta">
                        <span class="product-rating">★★★★★ (24)</span>
                        <span class="product-sku">SKU: CR001</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">$2.49/lb</span>
                        <span class="original-price">$2.99/lb</span>
                        <span class="discount-badge">Save 17%</span>
                    </div>
                    
                    <div class="product-description">
                        <p>Our crisp, sweet organic carrots are grown locally without synthetic pesticides or fertilizers. Harvested at peak freshness, these vibrant orange roots are packed with beta-carotene, fiber, and essential nutrients.</p>
                        
                        <ul class="product-features">
                            <li>🌱 Certified Organic by USDA</li>
                            <li>🚜 Grown by Smith Family Farms</li>
                            <li>📦 Harvested within 48 hours of delivery</li>
                            <li>🥕 Perfect for snacking, juicing, or cooking</li>
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
                            <span class="icon">⏱️</span>
                            <span>Next-day delivery available</span>
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
                        <h3>About Our Organic Carrots</h3>
                        <p>These organic carrots are grown using sustainable farming practices that enrich the soil and protect local ecosystems. Our farmers use natural compost and crop rotation to produce carrots with exceptional flavor and nutritional value.</p>
                        <p>The carrots are hand-harvested at their peak to ensure maximum sweetness and crispness. They're thoroughly washed and cooled immediately after harvest to preserve freshness. The bright orange color indicates high levels of beta-carotene, which converts to vitamin A in your body.</p>
                    </div>
                    
                    <div class="tab-pane" id="farm">
                        <h3>Smith Family Farms</h3>
                        <p>Located in the fertile valleys of Oregon, Smith Family Farms has been growing organic vegetables for three generations. Their commitment to sustainable agriculture means they:</p>
                        <ul>
                            <li>Practice crop rotation to maintain soil health</li>
                            <li>Use natural pest control methods</li>
                            <li>Conserve water through drip irrigation</li>
                            <li>Support local biodiversity</li>
                        </ul>
                    </div>
                    
                    <div class="tab-pane" id="nutrition">
                        <h3>Nutritional Information</h3>
                        <p>Serving Size: 1 medium carrot (61g)</p>
                        <table class="nutrition-table">
                            <tr>
                                <td>Calories</td>
                                <td>25</td>
                            </tr>
                            <tr>
                                <td>Total Fat</td>
                                <td>0g</td>
                            </tr>
                            <tr>
                                <td>Sodium</td>
                                <td>42mg</td>
                            </tr>
                            <tr>
                                <td>Total Carbohydrate</td>
                                <td>6g</td>
                            </tr>
                            <tr>
                                <td>Dietary Fiber</td>
                                <td>2g</td>
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
                                <td>Vitamin A</td>
                                <td>204% DV</td>
                            </tr>
                            <tr>
                                <td>Vitamin K</td>
                                <td>8% DV</td>
                            </tr>
                            <tr>
                                <td>Potassium</td>
                                <td>7% DV</td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="tab-pane" id="reviews">
                        <h3>Customer Reviews</h3>
                        <div class="review">
                            <div class="review-header">
                                <span class="review-author">Sarah M.</span>
                                <span class="review-rating">★★★★★</span>
                                <span class="review-date">May 15, 2023</span>
                            </div>
                            <p class="review-text">These are the sweetest carrots I've ever tasted! My kids actually ask for them as snacks now. The freshness is incredible - they last much longer than supermarket carrots.</p>
                        </div>
                        <div class="review">
                            <div class="review-header">
                                <span class="review-author">James L.</span>
                                <span class="review-rating">★★★★☆</span>
                                <span class="review-date">April 28, 2023</span>
                            </div>
                            <p class="review-text">Great flavor and texture. I use them for juicing and they produce a wonderful bright orange juice. Only gave 4 stars because my last batch had a couple with minor blemishes.</p>
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