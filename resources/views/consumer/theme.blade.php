<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Green Basket | Farm to Table</title>
    <link rel="stylesheet" href="css/hridoy/basic.css">
    <link rel="stylesheet" href="css/hridoy/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
    --primary: #2e7d32;
    --primary-light: #60ad5e;
    --primary-dark: #005005;
    --text: #333333;
    --text-light: #666666;
    --bg: #f8f8f8;
    --white: #ffffff;
    --border: #e0e0e0;
    --shadow: 0 4px 12px rgba(0,0,0,0.05);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    color: var(--text);
    background-color: var(--bg);
    line-height: 1.6;
    padding-top: 80px;
}

/* Typography */
h1, h2, h3, h4 {
    font-weight: 600;
    line-height: 1.2;
}

a {
    text-decoration: none;
    color: inherit;
}

/* Layout */
.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.section {
    padding: 3rem 0;
}

.section-title {
    font-size: 1.75rem;
    margin-bottom: 1.5rem;
    color: var(--primary);
    text-align: center;
}

/* Header */
header {
    position: fixed;
    top: 0;
    width: 100%;
    background-color: var(--white);
    box-shadow: var(--shadow);
    z-index: 100;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 80px;
}

.logo {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
}

.logo span {
    color: var(--primary-dark);
}

.nav-links {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.nav-links a {
    font-weight: 500;
    transition: color 0.2s;
}

.nav-links a:hover {
    color: var(--primary);
}

.nav-links a.active {
    color: var(--primary-dark);
    font-weight: 600;
}

.cta-button {
    background-color: var(--primary);
    color: var(--white);
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: 500;
    transition: all 0.2s;
}

.cta-button:hover {
    background-color: var(--primary-dark);
    transform: translateY(-2px);
}

/* Static Search Bar Styles */
.search-container {
    position: relative;
    width: 180px; /* Fixed width similar to Order Now button */
}

.search-input {
    width: 100%;
    padding: 0.75rem 1.5rem 0.75rem 2.5rem;
    border: 1px solid var(--border);
    border-radius: 50px;
    font-size: 0.9rem;
    background-color: var(--bg);
    transition: all 0.2s;
}

.search-input:focus {
    outline: none;
    border-color: var(--primary-light);
    box-shadow: 0 0 0 2px rgba(46, 125, 50, 0.2);
}

.search-icon {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
}

/* Footer */
footer {
    background-color: #009150;
    color: var(--white);
    padding: 4rem 0 2rem;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.footer-column h3 {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
    color: var(--white);
}

.footer-column ul {
    list-style: none;
}

.footer-column ul li {
    margin-bottom: 0.75rem;
}

.footer-column ul li a {
    color: rgba(255,255,255,0.7);
    transition: color 0.2s;
    font-size: 0.9rem;
}

.footer-column ul li a:hover {
    color: var(--white);
}

.footer-column p {
    color: rgba(255,255,255,0.7);
    font-size: 0.9rem;
    margin-top: 1rem;
}

.copyright {
    text-align: center;
    padding-top: 2rem;
    border-top: 1px solid rgba(255,255,255,0.1);
    color: rgba(255,255,255,0.5);
    font-size: 0.8rem;
}

/* Responsive */
@media (max-width: 768px) {
    .navbar {
        height: 70px;
    }
    
    .nav-links {
        display: none;
    }
    
    .search-container {
        display: none;
    }
    
    footer {
        padding: 3rem 0 1.5rem;
    }
    
    .footer-grid {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 480px) {
    .footer-grid {
        grid-template-columns: 1fr;
    }
}
    </style>

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }}">Shop</a>
                    <a href="{{ route('farmers') }}">Farmers</a>
                    <a href="/recipes">Recipes</a>
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