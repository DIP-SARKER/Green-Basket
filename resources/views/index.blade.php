<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('style')
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/hridoy/styles_for_index.css') }}">
    <link rel="stylesheet" href="{{ asset("css/hridoy/basic.css") }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
</head>
<body>
<!-- Navbar -->
<header>
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }}">Shop</a>
                    <a href="{{ route("farmers") }}">Farmers</a>
                    <a href="{{ route('seasonal') }}">Seasonal</a>
                    <a href="{{ route("recipes") }}">Recipes</a>
                    <a href="{{ route("about") }}">About</a>
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('signup') }}">Sign Up</a>
                    <div class="search-container">
                        <span class="search-icon">🔍</span>
                        <input type="text" class="search-input" placeholder="Search products...">
                    </div>
                    <a href="#" class="cta-button">Order Now</a>
                    
                </div>
            </nav>
        </div>
    </header>
@yield('main-content')

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
                        <li><a href="{{ route('vegetableShop') }}">Vegetables</a></li>
                        <li><a href="{{ route('dairyShop') }}">Dairy</a></li>
                        <li><a href="{{ route('meatShop') }}">Meat</a></li>
                        <li><a href="{{ route('seasonal') }}">Seasonal</a></li>
                        <li><a href="{{ route('shop') }}">All Products</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Our Farmers</a></li>
                        <li><a href="{{ route('sustainability') }}">Sustainability</a></li>
                        <li><a href="{{ route('referfriends') }}">Refer Friends</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('termsandcondition') }}">Terms & Condition</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Help</h3>
                    <ul>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('faq') }}">FAQs</a></li>
                        <li><a href="{{ route('deliveryinfo') }}">Delivery Info</a></li>
                        <li><a href="{{ route('returnaproduct') }}">Returns</a></li>
                        <li><a href="{{ route('loyaltyprogram') }}">Loyalty Program</a></li>
                        <li><a href="{{ route('paymentsecurity') }}">Payment Security</a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2025 Green Basket. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>