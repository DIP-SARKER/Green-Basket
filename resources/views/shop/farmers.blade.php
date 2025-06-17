<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Farmers | Green Basket | Farm to Table</title>
    <link rel="stylesheet" href="{{ asset("css/hridoy/basic.css") }}">
    <link rel="stylesheet" href="{{ asset("css/hridoy/farmers.css") }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }}">Shop</a>
                    <a href="{{ route("farmers") }}" class="active">Farmers</a>
                    <a href="/recipes">Recipes</a>
                    <a href="#">How It Works</a>
                    <a href="{{ route("about") }}">About</a>
                    <div class="search-container">
                        <span class="search-icon">🔍</span>
                        <input type="text" class="search-input" placeholder="Search products...">
                    </div>
                    <a href="#" class="cta-button">Order Now</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <h1>Meet Our Farmers</h1>
            <p>Get to know the hardworking individuals who grow the fresh, sustainable food you love</p>
            <a href="#farmers" class="cta-button">Explore Their Stories</a>
        </section>

        <section class="container" id="farmers">
            <div class="farmers-intro">
                <h2>Locally Grown, Farmer First</h2>
                <p>At Green Basket Bangladesh, we collaborate directly with smallholder farmers across the country who
                    are committed to sustainable agriculture and ethical farming. Every farmer in our network
                    contributes deep knowledge and heartfelt care to the produce they grow.</p>
            </div>

            <div class="farmers-grid">
                <div class="farmer-card">
                    <div class="farmer-image">
                        <img src="https://images.unsplash.com/photo-1737227009607-2678dc9796f4?q=80&w=736&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Farmer Abdul Karim">
                    </div>
                    <div class="farmer-info">
                        <h3>Abdul & Rokeya Karim</h3>
                        <div class="farmer-location">
                            <!-- Location Icon -->
                            <svg width="12" height="12" ...></svg>
                            Rangpur Organic Farm, 70 km away
                        </div>
                        <p class="farmer-bio">A husband-and-wife duo with a passion for organic farming. They have
                            dedicated the past two decades to cultivating seasonal vegetables without harmful chemicals.
                        </p>
                        <div class="farmer-products">
                            <span class="product-tag">Red Amaranth</span>
                            <span class="product-tag">Bottle Gourd</span>
                            <span class="product-tag">Deshi Spinach</span>
                        </div>
                        <a href="#" class="farmer-button">View Their Products</a>
                    </div>
                </div>

                <div class="farmer-card">
                    <div class="farmer-image">
                        <img src="https://anannya.com.bd/wp-content/uploads/2020/10/20/image-462-1603167610.jpg"
                            alt="Farmer Amina Khatun">
                    </div>
                    <div class="farmer-info">
                        <h3>Amina Khatun</h3>
                        <div class="farmer-location">
                            <svg width="12" height="12" ...></svg>
                            Kushtia Green Fields, 40 km away
                        </div>
                        <p class="farmer-bio">Amina transformed her ancestral land into a vibrant organic farm
                            specializing in native Bangladeshi herbs and vegetables using eco-friendly techniques.</p>
                        <div class="farmer-products">
                            <span class="product-tag">Pui Shak</span>
                            <span class="product-tag">Green Chili</span>
                            <span class="product-tag">Lau (Bottle Gourd)</span>
                            <span class="product-tag">Lemon Basil</span>
                        </div>
                        <a href="#" class="farmer-button">View Their Products</a>
                    </div>
                </div>

                <div class="farmer-card">
                    <div class="farmer-image">
                        <img src="https://images.unsplash.com/photo-1744742427348-dfa786ffad9c?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Farmer Rezaul & Nasima">
                    </div>
                    <div class="farmer-info">
                        <h3>Nasima Haque</h3>
                        <div class="farmer-location">
                            <svg width="12" height="12" ...></svg>
                            Jashore Agro Valley, 90 km away
                        </div>
                        <p class="farmer-bio">This dedicated couple blends traditional farming wisdom with modern
                            organic practices, producing high-demand vegetables popular in Bengali kitchens.</p>
                        <div class="farmer-products">
                            <span class="product-tag">Okra</span>
                            <span class="product-tag">Eggplant (Begun)</span>
                            <span class="product-tag">Bitter Gourd</span>
                            <span class="product-tag">Turmeric Root</span>
                        </div>
                        <a href="#" class="farmer-button">View Their Products</a>
                    </div>
                </div>

                <div class="farmer-card">
                    <div class="farmer-image">
                        <img src="https://barciknews.com/wp-content/uploads/2020/02/IMG_20200217_105105-1.jpg"
                            alt="Farmer Harun Mia">
                    </div>
                    <div class="farmer-info">
                        <h3>Abul Mia</h3>
                        <div class="farmer-location">
                            <svg width="12" height="12" ...></svg>
                            Narsingdi Dairy Farm, 35 km away
                        </div>
                        <p class="farmer-bio">A leader in ethical dairy farming, Harun raises his cows in open pastures
                            and produces premium quality milk, ghee, and yogurt for nearby communities.</p>
                        <div class="farmer-products">
                            <span class="product-tag">Fresh Milk</span>
                            <span class="product-tag">Ghee</span>
                            <span class="product-tag">Doi (Yogurt)</span>
                            <span class="product-tag">Paneer</span>
                        </div>
                        <a href="#" class="farmer-button">View Their Products</a>
                    </div>
                </div>

                <div class="farmer-card">
                    <div class="farmer-image">
                        <img src="https://cdn.ittefaqbd.com/contents/cache/images/640x358x1/uploads/a/2021/10/15/image-283553-1634254641.jpg"
                            alt="Farmer Laila Begum">
                    </div>
                    <div class="farmer-info">
                        <h3>Laila Begum</h3>
                        <div class="farmer-location">
                            <svg width="12" height="12" ...></svg>
                            Sylhet Berry Garden, 20 km away
                        </div>
                        <p class="farmer-bio">Laila runs a thriving small-scale fruit farm, producing organic berries
                            with regenerative techniques that protect the soil and water sources.</p>
                        <div class="farmer-products">
                            <span class="product-tag">Strawberries</span>
                            <span class="product-tag">Mulberries</span>
                            <span class="product-tag">Blueberries</span>
                            <span class="product-tag">Jamun (Java Plum)</span>
                        </div>
                        <a href="#" class="farmer-button">View Their Products</a>
                    </div>
                </div>

                <div class="farmer-card">
                    <div class="farmer-image">
                        <img src="https://www.swadeshpratidin.com/2025/06/14/sw_1749912070.jpg"
                            alt="Farmer Sona Mia">
                    </div>
                    <div class="farmer-info">
                        <h3>Sona Mia</h3>
                        <div class="farmer-location">
                            <svg width="12" height="12" ...></svg>
                            Natore Mango Estate, 60 km away
                        </div>
                        <p class="farmer-bio">Preserving local mango varieties like Himsagar and Langra, Kamal maintains
                            one of the oldest mango orchards in northern Bangladesh.</p>
                        <div class="farmer-products">
                            <span class="product-tag">Himsagar Mangoes</span>
                            <span class="product-tag">Langra Mangoes</span>
                            <span class="product-tag">Mango Pulp</span>
                        </div>
                        <a href="#" class="farmer-button">View Their Products</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <h2 class="section-title">What Our Farmers Say</h2>
                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <p class="testimonial-text">Green Basket Bangladesh helped us connect with customers in Dhaka
                            and beyond. We now spend more time on our fields, and our income has increased
                            significantly.</p>
                        <p class="testimonial-author">— Abdul Karim, Rangpur Organic Farm</p>
                    </div>
                    <div class="testimonial-card">
                        <p class="testimonial-text">As a small farm, I had trouble accessing a steady market. Now, my
                            berries are reaching eco-conscious buyers who value what I grow.</p>
                        <p class="testimonial-author">— Laila Begum, Sylhet Berry Garden</p>
                    </div>
                    <div class="testimonial-card">
                        <p class="testimonial-text">Fair prices and timely payments — that’s what Green Basket promised,
                            and they’ve delivered. My family is finally seeing stability through our farm.</p>
                        <p class="testimonial-author">— Rezaul Haque, Jashore Agro Valley</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="join-section">
            <div class="container">
                <h2>Become a Green Basket Farmer</h2>
                <p>We're always looking to partner with local farmers who share our values of sustainability, quality,
                    and ethical practices.</p>
                <a href="#" class="cta-button">Learn About Partnering With Us</a>
            </div>
        </section>
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