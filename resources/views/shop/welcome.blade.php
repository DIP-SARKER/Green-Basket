<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Basket | Farm to Table</title>
    <link rel="stylesheet" href="{{ asset('css\hridoy\styles_for_index.css') }}">
    <link rel="stylesheet" href="{{ asset("css\hridoy\basic.css") }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }}">Shop</a>
                    <a href="{{ route("farmers") }}">Farmers</a>
                    <a href="{{ route("recipes") }}">Recipes</a>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Farm fresh, delivered simple</h1>
                <p>Straight from local farmers to your table. No middlemen, just the freshest vegetables, dairy, and
                    meat at fair prices.</p>
                <a href="#" class="cta-button">Shop Seasonal Produce</a>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="categories">
        <div class="container">
            <div class="section-title">
                <h2>What We Offer</h2>
                <p>Seasonal, sustainable products from farms you can trust</p>
            </div>

            <div class="category-grid">
                <!-- Vegetables -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Fresh Vegetables">
                    </div>
                    <div class="category-info">
                        <h3>Seasonal Vegetables</h3>
                        <p>Harvested at peak freshness, delivered within 24 hours</p>
                        <a href="#" class="cta-button"
                            style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">Browse</a>
                    </div>
                </div>

                <!-- Fresh Fruits -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Dairy Products">
                    </div>
                    <div class="category-info">
                        <h3>Fresh Fruits</h3>
                        <p>Fresh fruit, free from formalin and carbide.</p>
                        <a href="#" class="cta-button"
                            style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">Browse</a>
                    </div>
                </div>


                <!-- Meat -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.unsplash.com/photo-1666013942642-b7b54ecafd7d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Fresh Meat">
                    </div>
                    <div class="category-info">
                        <h3>Ethical Meat</h3>
                        <p>Humanely raised, pasture-fed beef, poultry, and pork</p>
                        <a href="#" class="cta-button"
                            style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">Browse</a>
                    </div>
                </div>

                <!-- Fish -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.unsplash.com/photo-1615141982883-c7ad0e69fd62?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Fresh Meat">
                    </div>
                    <div class="category-info">
                        <h3>Freshwater Fish</h3>
                        <p>Locally sourced from clean rivers and ponds, free from chemicals</p>
                        <a href="#" class="cta-button"
                            style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">Browse</a>
                    </div>
                </div>

                <!-- Bakery -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.unsplash.com/photo-1644458366026-1ac2e1aaf0a6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Bakery Delights">
                    </div>
                    <div class="category-info">
                        <h3>Bakery Delights</h3>
                        <p>Artisan breads, wholesome loaves, and flaky pastries baked fresh daily</p>
                        <a href="#" class="cta-button"
                            style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">Browse</a>
                    </div>
                </div>


                <!-- Dairy -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Dairy Products">
                    </div>
                    <div class="category-info">
                        <h3>Farm Dairy</h3>
                        <p>Grass-fed milk, artisan cheeses, and fresh yogurt</p>
                        <a href="#" class="cta-button"
                            style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">Browse</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="benefits">
        <div class="container">
            <div class="section-title">
                <h2>Why Green Basket?</h2>
                <p>Better for you, better for farmers, better for the planet</p>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">🥬</div>
                    <h3>Farm Fresh</h3>
                    <p>Harvested at peak ripeness, delivered faster than supermarkets</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">👩‍🌾</div>
                    <h3>Direct from Farmers</h3>
                    <p>85% of your payment goes directly to the farmers who grew your food</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">🌱</div>
                    <h3>Sustainable</h3>
                    <p>Supporting regenerative farming practices that heal the land</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">🚚</div>
                    <h3>Convenient</h3>
                    <p>Delivered to your door on your schedule</p>
                </div>
            </div>
        </div>
    </section>

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
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>