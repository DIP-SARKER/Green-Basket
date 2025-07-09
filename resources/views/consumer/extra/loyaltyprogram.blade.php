@extends('index')
@push('style')
<title>Loyalty Program | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/prome/loyaltyprogram.css') }}">
@endpush

@section('main-content')
<section class="loyalty-program">
    <div class="container">
        <h1 class="program-title">Green Basket Rewards</h1>
        <p class="program-subtitle">Earn points with every purchase and enjoy exclusive benefits</p>
        
        <div class="hero-banner">
            <div class="hero-content">
                <h2>Shop More, Save More</h2>
                <p>Our loyalty program rewards you for supporting Bangladeshi farmers. The more you shop, the more you save!</p>
                <a href="{{ route('signup') }}" class="cta-button">Join Now</a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('https://imageio.forbes.com/specials-images/imageserve/64b562313734231d33e9bd01/0x0.jpg?format=jpg&height=900&width=1600&fit=bounds') }}" alt="Loyalty rewards">
            </div>
        </div>
        
        <div class="how-it-works">
            <h2>How It Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Sign Up</h3>
                        <p>Create a free Green Basket account</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Shop & Earn</h3>
                        <p>Get <strong>10 points</strong> for every ৳100 spent</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Redeem Rewards</h3>
                        <p>Use points for discounts or free products</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="benefits-section">
            <h2>Program Benefits</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">💰</div>
                    <h3>Points Never Expire</h3>
                    <p>Your rewards stay valid as long as your account is active</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🎁</div>
                    <h3>Birthday Bonus</h3>
                    <p>Get 500 extra points during your birthday month</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🚚</div>
                    <h3>Free Delivery</h3>
                    <p>Unlock free delivery at 5,000 points (Gold Tier)</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">👩‍🌾</div>
                    <h3>Farm Visits</h3>
                    <p>VIP members can visit partner farms (Platinum Tier)</p>
                </div>
            </div>
        </div>
        
        <div class="tiers-section">
            <h2>Membership Tiers</h2>
            <div class="tiers">
                <div class="tier-card">
                    <h3 class="tier-name green">Green Tier</h3>
                    <p class="tier-requirement">0 - 4,999 points</p>
                    <ul class="tier-benefits">
                        <li>10 points per ৳100 spent</li>
                        <li>Basic rewards</li>
                        <li>Seasonal offers</li>
                    </ul>
                </div>
                <div class="tier-card">
                    <h3 class="tier-name gold">Gold Tier</h3>
                    <p class="tier-requirement">5,000 - 14,999 points</p>
                    <ul class="tier-benefits">
                        <li><strong>15 points</strong> per ৳100 spent</li>
                        <li>Free delivery on orders over ৳500</li>
                        <li>Exclusive early access to sales</li>
                    </ul>
                </div>
                <div class="tier-card">
                    <h3 class="tier-name platinum">Platinum Tier</h3>
                    <p class="tier-requirement">15,000+ points</p>
                    <ul class="tier-benefits">
                        <li><strong>20 points</strong> per ৳100 spent</li>
                        <li>Free delivery on all orders</li>
                        <li>Invitations to farm events</li>
                        <li>Personalized seasonal boxes</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="rewards-section">
            <h2>Popular Rewards</h2>
            <div class="rewards-grid">
                <div class="reward-card">
                    <div class="reward-cost">1,000 pts</div>
                    <h3>৳100 Discount</h3>
                    <p>Apply to any order</p>
                </div>
                <div class="reward-card">
                    <div class="reward-cost">2,500 pts</div>
                    <h3>Free Seasonal Fruit Box</h3>
                    <p>Value: ৳300</p>
                </div>
                <div class="reward-card">
                    <div class="reward-cost">5,000 pts</div>
                    <h3>Farm Fresh Egg Dozen</h3>
                    <p>Free delivery included</p>
                </div>
            </div>
        </div>
        
        <div class="faq-section">
            <h2>Rewards FAQ</h2>
            <div class="faq-item">
                <button class="faq-question">How do I check my points?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>Your points balance is displayed in your account dashboard and on every order confirmation email.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do points expire?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>No! Your points remain valid as long as your account is active (minimum one purchase per year).</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Can I share points with family?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>Points are non-transferable but family members can join under one account.</p>
                </div>
            </div>
        </div>
        
        <div class="cta-section">
            <h3>Start Earning Today</h3>
            <p>Join thousands of members enjoying exclusive benefits while supporting local farmers.</p>
            <div class="cta-buttons">
                <a href="{{ route('signup') }}" class="cta-button">Sign Up Free</a>
                <a href="{{ route('login') }}" class="cta-button outline">Member Login</a>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/hridoy/loyalty-program.js') }}"></script>

@endsection