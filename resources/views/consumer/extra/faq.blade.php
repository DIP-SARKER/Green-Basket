@extends('index')
@push('style')
<title>FAQ | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/moshiur/faq.css') }}">
@endpush

@section('main-content')
<section class="faq-section">
    <div class="container">
        <h1 class="section-title">Frequently Asked Questions</h1>
        <p class="section-subtitle">Find answers to common questions about Green Basket</p>
        
        <div class="faq-container">
            <div class="faq-category">
                <h2>General Questions</h2>
                <div class="faq-item">
                    <button class="faq-question">What is Green Basket?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Green Basket is a Bangladeshi direct-to-consumer (D2C) ecommerce platform that connects farmers directly with consumers. We deliver fresh, organic, and locally sourced agricultural products straight from farms to your doorstep.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Where does Green Basket operate?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Currently, we operate in Dhaka, Chittagong, Sylhet, and Khulna metropolitan areas. We're expanding to other cities soon!</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">How does Green Basket support farmers?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>We work directly with local farmers, eliminating middlemen to ensure they receive fair prices for their produce. We also provide training on sustainable farming practices and help them access better markets.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-category">
                <h2>Ordering & Delivery</h2>
                <div class="faq-item">
                    <button class="faq-question">What are your delivery hours?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>We deliver from 8:00 AM to 10:00 PM, seven days a week. You can choose your preferred delivery slot during checkout.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">What is your delivery charge?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Delivery is free for orders over ৳500. For orders below ৳500, we charge a nominal delivery fee of ৳50.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Can I schedule delivery for a specific time?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Yes! During checkout, you can select from available time slots for delivery. We recommend ordering at least 12 hours in advance for time-specific deliveries.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">What if I'm not available to receive my order?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>If you're not available, we'll attempt to contact you. If we can't reach you, we'll leave your order with a neighbor or security (with their permission) or bring it back to our facility for later delivery.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-category">
                <h2>Products & Quality</h2>
                <div class="faq-item">
                    <button class="faq-question">Are your products organic?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Most of our products are organically grown, though not all are certified organic. We work with farmers who use sustainable, chemical-free practices. Products that are certified organic are clearly labeled.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">How do you ensure product quality?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Our quality team personally inspects all products before dispatch. We have strict quality standards and work closely with farmers to maintain consistency. If you're ever unsatisfied, we offer a 100% satisfaction guarantee.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">Why are some products seasonal?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>We believe in offering fresh, naturally grown produce. Many fruits and vegetables have natural growing seasons in Bangladesh. This ensures you get the freshest, most flavorful produce at its peak.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-category">
                <h2>Payments & Returns</h2>
                <div class="faq-item">
                    <button class="faq-question">What payment methods do you accept?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>We accept cash on delivery, bKash, Nagad, Rocket, and credit/debit cards through SSLCommerz secure payment gateway.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">What is your return policy?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>If you receive damaged or spoiled products, please contact us within 24 hours with photos. We'll either replace the items or issue a refund. Due to the perishable nature of our products, we can't accept returns for change of mind.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">How long does refund processing take?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Refunds are processed within 3-5 business days. For digital payments, the refund will reflect in your account within 7-10 business days depending on your bank or mobile financial service provider.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="faq-contact">
            <h3>Still have questions?</h3>
            <p>Our customer care team is happy to help!</p>
            <a href="{{ route('contact') }}" class="cta-button">Contact Us</a>
        </div>
    </div>
</section>
@endsection