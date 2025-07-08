<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Green Basket</title>
    <link rel="stylesheet" href="{{ asset("css/hridoy/basic.css") }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/hridoy/signup.css") }}">
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
                    <a href="{{ route("about") }}">About</a>
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('signup') }}" class="active cta-button">Sign Up</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="auth-container">
                <h1 class="auth-title">Join Green Basket</h1>
                <p class="auth-subtitle">Create your account to start shopping farm-fresh groceries</p>
                
                <form class="auth-form" id="signupForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first_name" placeholder="John" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last_name" placeholder="Doe" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="your@email.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="••••••••" required>
                    </div>
                    
                    <div class="terms-checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms" class="terms-text">
                            I agree to the <a href="/terms" target="_blank">Terms and Conditions</a> and <a href="/privacy" target="_blank">Privacy Policy</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="auth-button" id="submitButton">Create Account</button>
                </form>
                
                <div class="auth-footer">
                    Already have an account? <a href="{{ route('login') }}">Log in</a>
                </div>
            </div>
        </div>
    </main>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const termsCheckbox = document.getElementById('terms');
            const submitButton = document.getElementById('submitButton');
            const signupForm = document.getElementById('signupForm');
            
            // Disable button initially
            submitButton.disabled = true;
            
            // Enable/disable button based on checkbox state
            termsCheckbox.addEventListener('change', function() {
                submitButton.disabled = !this.checked;
            });
            
            // Form submission handler
            signupForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Here you would typically validate the form and submit via AJAX
                // For now, we'll just log to console
                console.log('Form submitted');
                
                // In a real application, you would redirect or show success message
                // window.location.href = '/welcome';
            });
        });
    </script>
</body>
</html>