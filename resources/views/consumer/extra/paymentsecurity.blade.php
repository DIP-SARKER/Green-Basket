@extends('index')
@push('style')
<title>Payment Security | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/sakib/paymentsecurity.css') }}">
@endpush

@section('main-content')
<section class="payment-security">
    <div class="container">
        <h1 class="security-title">Payment Security</h1>
        <p class="security-subtitle">Your transactions are 100% secure with Green Basket</p>
        
        <div class="security-badge">
            <div class="badge-icon">🔒</div>
            <div class="badge-content">
                <h3>SSL Secured Checkout</h3>
                <p>All transactions are encrypted with 256-bit SSL technology</p>
            </div>
        </div>
        
        <div class="security-features">
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>Secure Payment Processing</h3>
                <p>We partner with <strong>SSLCommerz</strong>, Bangladesh's leading payment gateway, to ensure your card/bank details are never stored on our servers.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">💳</div>
                <h3>PCI DSS Compliant</h3>
                <p>Our payment systems meet the highest security standards set by the Payment Card Industry.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Mobile Financial Security</h3>
                <p>When paying via bKash/Nagad/Rocket, you're redirected to their secure apps - we never see your PINs.</p>
            </div>
        </div>
        
        <div class="how-it-works">
            <h2>How We Protect Your Payments</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Encryption</h3>
                        <p>Your data is scrambled during transmission using TLS 1.2+ protocols</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Tokenization</h3>
                        <p>Card numbers are replaced with secure tokens for processing</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Fraud Screening</h3>
                        <p>Advanced algorithms detect suspicious activity</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="payment-methods">
            <h2>Approved Payment Methods</h2>
            <div class="methods-grid">
                <div class="method">
                    <img src="{{ asset('https://incevio.com/storage/images/mgV8s7QkbnodO8HTqraMo6L26URURerUw6XFysKK.png') }}" alt="SSLCommerz">
                    <p>Card Payments</p>
                </div>
                <div class="method">
                    <img src="{{ asset('https://downloadr2.apkmirror.com/wp-content/uploads/2022/08/84/62f92578037f0.png') }}" alt="bKash">
                    <p>bKash</p>
                </div>
                <div class="method">
                    <img src="{{ asset('https://play-lh.googleusercontent.com/9ps_d6nGKQzfbsJfMaFR0RkdwzEdbZV53ReYCS09Eo5MV-GtVylFD-7IHcVktlnz9Mo') }}" alt="Nagad">
                    <p>Nagad</p>
                </div>
                <div class="method">
                    <img src="{{ asset('https://play-lh.googleusercontent.com/sDY6YSDobbm_rX-aozinIX5tVYBSea1nAyXYI4TJlije2_AF5_5aG3iAS7nlrgo0lk8') }}" alt="Rocket">
                    <p>Rocket</p>
                </div>
                <div class="method">
                    <img src="{{ asset('https://okcredit-blog-images-prod.storage.googleapis.com/2021/05/cashondelivery1.jpg') }}" alt="Cash on Delivery">
                    <p>Cash on Delivery</p>
                </div>
            </div>
        </div>
        
        <div class="security-tips">
            <h2>Security Tips for Customers</h2>
            <div class="tips-grid">
                <div class="tip">
                    <h3>✅ Always check for HTTPS</h3>
                    <p>Look for <strong>https://</strong> and 🔒 in your browser's address bar when paying</p>
                </div>
                <div class="tip">
                    <h3>❌ Never share OTPs</h3>
                    <p>Green Basket will never ask for your bKash/Nagad PIN or card OTP via phone</p>
                </div>
                <div class="tip">
                    <h3>📱 Use official apps</h3>
                    <p>Only make payments through the official bKash/Nagad apps when redirected</p>
                </div>
            </div>
        </div>
        
        <div class="contact-security">
            <h3>Security Concerns?</h3>
            <p>Report any suspicious activity immediately:</p>
            <div class="contact-options">
                <a href="tel:16234" class="cta-button">Call: 16234</a>
                <a href="mailto:security@greenbasket.com.bd" class="cta-button outline">Email Security Team</a>
            </div>
        </div>
    </div>
</section>
@endsection
