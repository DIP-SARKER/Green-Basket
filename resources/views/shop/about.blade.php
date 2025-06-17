<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Green Basket | Farm to Table</title>
    <link rel="stylesheet" href="css/hridoy/basic.css">
    <link rel="stylesheet" href="css/hridoy/about.css">
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
                    <a href="#">How It Works</a>
                    <a href="{{ route("about") }}" class="active">About</a>
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
            <h1>Our Story: Connecting Farms to Families</h1>
            <p>Green Basket is revolutionizing the way fresh food reaches your table by bridging the gap between local farmers, fishers, and consumers.</p>
        </section>

        <section class="mission-section">
            <div class="container">
                <h2 class="section-title">Our Mission</h2>
                <p class="mission-statement">To empower local farmers and fishers while providing consumers with the freshest, most sustainable products directly from source to table.</p>
                
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">🌱</div>
                        <h3>Farmer First</h3>
                        <p>We give 85% of revenue directly back to our farmers and fishers, ensuring they earn fair compensation for their hard work.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">♻️</div>
                        <h3>Sustainability</h3>
                        <p>We promote eco-friendly farming and fishing practices that protect our planet for future generations.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">🏡</div>
                        <h3>Direct to You</h3>
                        <p>By eliminating middlemen, we deliver farm-fresh products to your door at prices that benefit both producers and consumers.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section-title">Our Impact</h2>
                <p style="text-align: center; max-width: 800px; margin: 0 auto 2rem;">Since our founding, we've created meaningful change in local food systems and communities:</p>
                
                <div class="impact-stats">
                    <div class="stat-item">
                        <div class="stat-number">250+</div>
                        <div class="stat-label">Local Farmers Supported</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">85%</div>
                        <div class="stat-label">Revenue to Producers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">10K+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50%</div>
                        <div class="stat-label">Reduced Food Miles</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section-title">A Farmer's Story</h2>
                <div class="farmer-story">
                    <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Farmer Rajesh" class="farmer-photo">
                    <div class="farmer-content">
                        <h3>Meet Rajesh - Organic Farmer</h3>
                        <p>Rajesh has been farming organically for 15 years but struggled to get fair prices for his produce through traditional markets. Middlemen would take most of the profit, leaving him barely enough to cover costs.</p>
                        
                        <p class="farmer-quote">"Since joining Green Basket, my income has doubled. I can now invest in better equipment and send my children to better schools. Most importantly, I know my produce goes directly to families who appreciate quality food."</p>
                        
                        <p>Rajesh now manages a 10-acre organic farm employing 8 local workers, growing over 30 varieties of vegetables that go directly to Green Basket customers within 24 hours of harvest.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-section">
            <div class="container">
                <h2 class="section-title">Our Team</h2>
                <p style="text-align: center; max-width: 800px; margin: 0 auto 2rem;">Founded by food and agriculture enthusiasts committed to making a difference.</p>
                
                <div class="team-grid">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Founder & CEO" class="team-photo">
                        <div class="team-info">
                            <h3>Priya Sharma</h3>
                            <p>Founder & CEO</p>
                            <p>Former agricultural economist passionate about fair trade</p>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Head of Farmer Relations" class="team-photo">
                        <div class="team-info">
                            <h3>Arjun Patel</h3>
                            <p>Head of Farmer Relations</p>
                            <p>Grew up on a farm and understands farmers' challenges firsthand</p>
                        </div>
                    </div>
                    
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1573497620053-ea5300f94f21?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Sustainability Officer" class="team-photo">
                        <div class="team-info">
                            <h3>Neha Gupta</h3>
                            <p>Sustainability Officer</p>
                            <p>Environmental scientist focused on sustainable agriculture</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" style="text-align: center; background-color: var(--primary); color: var(--white); padding: 4rem 0;">
            <div class="container">
                <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">Join Our Movement</h2>
                <p style="max-width: 700px; margin: 0 auto 2rem; font-size: 1.2rem;">Whether you're a farmer looking for fair markets or a consumer wanting fresher food, we'd love to have you with us.</p>
                <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                    <a href="#" class="cta-button" style="background-color: var(--white); color: var(--primary);">Shop Fresh</a>
                    <a href="#" class="cta-button" style="background-color: transparent; border: 2px solid var(--white);">Sell With Us</a>
                </div>
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