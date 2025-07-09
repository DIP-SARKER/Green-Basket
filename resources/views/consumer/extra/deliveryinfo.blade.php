@extends('index')
@push('style')
<title>Delivery Info | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/moshiur/deliveryinfo.css') }}">
@endpush

@section('main-content')
<section class="delivery-section">
    <div class="container">
        <h1 class="section-title">Delivery Information</h1>
        <p class="section-subtitle">Everything you need to know about receiving your Green Basket order</p>
        
        <div class="delivery-grid">
            <div class="delivery-card">
                <div class="delivery-icon">🚚</div>
                <h3>Delivery Areas</h3>
                <p>We currently deliver to Dhaka, Chittagong, Sylhet, and Khulna metropolitan areas. We're expanding to more cities soon!</p>
                <div class="delivery-note">
                    <strong>Note:</strong> Some remote areas within these cities may have limited delivery options.
                </div>
            </div>
            
            <div class="delivery-card">
                <div class="delivery-icon">⏱️</div>
                <h3>Delivery Hours</h3>
                <p>Our delivery hours are from 8:00 AM to 10:00 PM, seven days a week including holidays.</p>
                <ul class="delivery-list">
                    <li><strong>Morning:</strong> 8:00 AM - 12:00 PM</li>
                    <li><strong>Afternoon:</strong> 12:00 PM - 4:00 PM</li>
                    <li><strong>Evening:</strong> 4:00 PM - 10:00 PM</li>
                </ul>
            </div>
            
            <div class="delivery-card">
                <div class="delivery-icon">💰</div>
                <h3>Delivery Charges</h3>
                <p>We offer transparent pricing with no hidden fees:</p>
                <ul class="delivery-list">
                    <li><strong>Orders over ৳500:</strong> Free delivery</li>
                    <li><strong>Orders under ৳500:</strong> ৳50 delivery charge</li>
                    <li><strong>Express delivery (2-hour window):</strong> Additional ৳100</li>
                </ul>
            </div>
            
            <div class="delivery-card">
                <div class="delivery-icon">📅</div>
                <h3>Scheduled Delivery</h3>
                <p>You can schedule deliveries for specific time slots during checkout:</p>
                <ul class="delivery-list">
                    <li>Select from available time windows</li>
                    <li>Schedule up to 7 days in advance</li>
                    <li>Receive SMS reminders before delivery</li>
                </ul>
            </div>
            
            <div class="delivery-card">
                <div class="delivery-icon">📦</div>
                <h3>Receiving Your Order</h3>
                <p>To ensure you receive the freshest products:</p>
                <ul class="delivery-list">
                    <li>Please provide clear delivery instructions</li>
                    <li>Have someone available to receive perishable items</li>
                    <li>Inspect your order upon delivery</li>
                </ul>
            </div>
            
            <div class="delivery-card">
                <div class="delivery-icon">❓</div>
                <h3>Delivery Issues</h3>
                <p>If you encounter any problems:</p>
                <ul class="delivery-list">
                    <li>Contact us immediately at <strong>16234</strong></li>
                    <li>Report damaged/missing items within 2 hours</li>
                    <li>We'll resolve issues within 24 hours</li>
                </ul>
            </div>
        </div>
        
        <div class="delivery-important">
            <h3>Important Delivery Notes</h3>
            <div class="important-grid">
                <div class="important-item">
                    <h4>Weather Delays</h4>
                    <p>During extreme weather (cyclones, heavy rain), deliveries may be delayed for safety. We'll notify you if this affects your order.</p>
                </div>
                <div class="important-item">
                    <h4>Festival Periods</h4>
                    <p>During Eid and other major festivals, delivery times may be extended due to high demand. Order early during these periods.</p>
                </div>
                <div class="important-item">
                    <h4>Product Availability</h4>
                    <p>If an item becomes unavailable after you order, we'll contact you with alternatives or refund that portion of your order.</p>
                </div>
                <div class="important-item">
                    <h4>Contactless Delivery</h4>
                    <p>We offer contactless delivery options. Mention this preference in your order notes.</p>
                </div>
            </div>
        </div>
        
        <div class="delivery-contact">
            <h3>Need help with delivery?</h3>
            <p>Our delivery team is available 8AM-10PM to assist you.</p>
            <div class="contact-options">
                <a href="tel:16234" class="cta-button outline">Call: 16234</a>
                <a href="{{ route('contact') }}" class="cta-button">Contact Form</a>
            </div>
        </div>
    </div>
</section>
@endsection