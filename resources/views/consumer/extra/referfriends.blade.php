@extends('index')
@push('style')
<title>Refer A Friend | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/prome/referfriends.css') }}">
@endpush

@section('main-content')
<section class="referral-program">
    <div class="container">
        <h1 class="program-title">Refer Friends, Earn Rewards</h1>
        <p class="program-subtitle">Share Green Basket and get ৳100 credit for each friend who signs up!</p>
        
        <div class="referral-hero">
            <div class="hero-content">
                <h2>Give ৳100, Get ৳100</h2>
                <p>Your friend gets ৳100 off their first order, and you get ৳100 when they make their first purchase. It's that simple!</p>
                <div class="referral-stats">
                    <div class="stat">
                        <div class="stat-number" id="total-referrals">0</div>
                        <div class="stat-label">Friends Referred</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number" id="total-earnings">৳0</div>
                        <div class="stat-label">Total Earned</div>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/referral/friends-sharing.png') }}" alt="Friends sharing Green Basket">
            </div>
        </div>
        
        <div class="how-it-works">
            <h2>How It Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-icon">📱</div>
                    <h3>Share Your Link</h3>
                    <p>Copy your unique referral link or share directly via WhatsApp, Facebook, or email</p>
                </div>
                <div class="step">
                    <div class="step-icon">👫</div>
                    <h3>Friends Sign Up</h3>
                    <p>Your friend registers using your link and gets ৳100 off their first order (min. ৳500 purchase)</p>
                </div>
                <div class="step">
                    <div class="step-icon">💰</div>
                    <h3>You Both Earn</h3>
                    <p>When they complete their first order, you get ৳100 credit in your account</p>
                </div>
            </div>
        </div>
        
        <div class="referral-tools">
            <h2>Share Your Link</h2>
            <div class="referral-link-box">
                <input type="text" id="referral-link" value="https://greenbasket.com.bd/signup?ref=USER123" readonly>
                <button id="copy-link" class="cta-button">Copy Link</button>
            </div>
            <p class="link-note">Your personal referral code: <strong>USER123</strong></p>
            
            <div class="social-share">
                <h3>Or share directly:</h3>
                <div class="share-buttons">
                    <a href="#" class="share-button whatsapp">
                        <span class="share-icon">💬</span>
                        <span>WhatsApp</span>
                    </a>
                    <a href="#" class="share-button facebook">
                        <span class="share-icon">👍</span>
                        <span>Facebook</span>
                    </a>
                    <a href="#" class="share-button messenger">
                        <span class="share-icon">💌</span>
                        <span>Messenger</span>
                    </a>
                    <a href="#" class="share-button email">
                        <span class="share-icon">✉️</span>
                        <span>Email</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="rewards-section">
            <h2>Your Potential Earnings</h2>
            <div class="earnings-calculator">
                <div class="calculator-input">
                    <label for="friends-count">Number of friends you refer:</label>
                    <input type="range" id="friends-count" min="1" max="50" value="5">
                    <div class="range-value"><span id="friends-value">5</span> friends</div>
                </div>
                <div class="calculator-result">
                    <div class="result-card">
                        <div class="result-amount">৳<span id="earnings-value">500</span></div>
                        <div class="result-label">Potential Credit</div>
                    </div>
                    <p>That's <strong>free delivery for 10 orders</strong> or <strong>৳500 off your next purchase!</strong></p>
                </div>
            </div>
        </div>
        
        <div class="faq-section">
            <h2>Referral FAQ</h2>
            <div class="faq-item">
                <button class="faq-question">Is there a limit to how many friends I can refer?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>No! You can refer unlimited friends and earn ৳100 for each one who makes a qualifying purchase.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">When will I receive my referral credit?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>Credits are applied to your account immediately after your friend's first order is completed.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Can I use my referral credit with other promotions?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>Yes! Your credit can be combined with seasonal offers and discounts.</p>
                </div>
            </div>
        </div>
        
        <div class="terms-notice">
            <h3>Program Terms</h3>
            <ul>
                <li>Referral credit expires after 6 months</li>
                <li>Fraudulent referrals will result in account suspension</li>
                <li>Only valid for new customer signups in Bangladesh</li>
            </ul>
        </div>
    </div>
</section>

@endsection