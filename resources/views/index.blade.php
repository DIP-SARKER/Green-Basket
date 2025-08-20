<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('style')

    <!-- Link CSS -->

    <link rel="stylesheet" href="{{ asset("css/hridoy/basic.css") }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />

</head>

<body>
    <!-- Navbar -->
    <header>
        <div class="container">
            <nav class="navbar">
                <div class="menu-toggle" id="mobile-menu">
                    ☰
                </div>
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }}">Shop</a>
                    <a href="{{ route("farmers") }}">Farmers</a>
                    <a href="{{ route('seasonal') }}">Seasonal</a>
                    <a href="{{ route("recipes") }}">Recipes</a>
                    <a href="{{ route("about") }}">About</a>
                    @if(Auth::guard('customer')->check())
                        <a href="{{ route('cprofile') }}">{{ Auth::guard('customer')->user()->name }}</a>
                        <a href="{{ route('cart.index') }}">Cart</a>
                        <a href="{{ route('orders.index') }}">Orders</a>
                    @else
                        <a href="{{ route('customer_auth') }}">Login/SignUp</a>
                    @endif
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
                    <p>Farm fresh groceries,
                        delivered simple.</p>
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