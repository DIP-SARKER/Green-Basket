<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Green Basket - Farm to Table Delivery</title>
    <link rel="stylesheet" href="{{ asset('css\hridoy\styles_for_contact_us.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }}">Shop</a>
                    <a href="#">Farmers</a>
                    <a href="#">How It Works</a>
                    <a href="#">About</a>
                    <a href="#" class="cta-button">Order Now</a>
                </div>
            </nav>
        </div>
    </header>
    
    <section class="contact-hero">
        <div class="container">
            <h1>Get in Touch</h1>
            <p>We'd love to hear from you! Whether you have questions about our farm-fresh products, need help with an order, or just want to share feedback, our team is here to help.</p>
        </div>
    </section>
    
    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Contact Information</h2>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Our Farm</h3>
                        <p>123 Organic Lane<br>Farmville, CA 12345</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Call Us</h3>
                        <p>+1 (555) 123-4567<br>Mon-Fri, 9am-5pm PST</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h3>Email Us</h3>
                        <p>hello@greenbasket.com<br>We typically reply within 24 hours</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h3>Delivery Hours</h3>
                        <p>Tuesday-Saturday<br>6am-2pm for fresh harvests</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" placeholder="John Doe" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="john@example.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" placeholder="How can we help?">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" placeholder="Tell us about your inquiry..." required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <p class="footer-text">&copy; 2023 Green Basket. Fresh from our farm to your table.</p>
        </div>
    </footer>
</body>
</html>
