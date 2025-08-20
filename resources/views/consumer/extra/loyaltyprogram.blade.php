@extends('index')
@push('style')
<title>লয়্যালটি প্রোগ্রাম | গ্রিন বাস্কেট</title>
<link rel="stylesheet" href="{{ asset('css/prome/loyaltyprogram.css') }}">
@endpush

@section('main-content')
<section class="loyalty-program">
    <div class="container">
        <h1 class="program-title">গ্রিন বাস্কেট রিওয়ার্ডস</h1>
        <p class="program-subtitle">প্রতিটি কেনাকাটায় পয়েন্ট অর্জন করুন এবং বিশেষ সুবিধা উপভোগ করুন</p>
        
        <div class="hero-banner">
            <div class="hero-content">
                <h2>বেশি কেনাকাটা, বেশি সঞ্চয়</h2>
                <p>আমাদের লয়্যালটি প্রোগ্রাম আপনাকে বাংলাদেশের কৃষকদের সমর্থন করার জন্য পুরস্কৃত করে। আপনি যত বেশি কেনাকাটা করবেন, তত বেশি সঞ্চয় হবে!</p>
                <a href="{{ route('customer_auth') }}" class="cta-button">এখনই যোগ দিন</a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('https://imageio.forbes.com/specials-images/imageserve/64b562313734231d33e9bd01/0x0.jpg?format=jpg&height=900&width=1600&fit=bounds') }}" alt="লয়্যালটি রিওয়ার্ডস">
            </div>
        </div>
        
        <div class="how-it-works">
            <h2>কিভাবে কাজ করে</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>সাইন আপ</h3>
                        <p>একটি বিনামূল্যের গ্রিন বাস্কেট অ্যাকাউন্ট তৈরি করুন</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>কেনাকাটা & পয়েন্ট অর্জন</h3>
                        <p>প্রতিটি ৳100 খরচে <strong>10 পয়েন্ট</strong> পান</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>রিওয়ার্ড রিডিম করুন</h3>
                        <p>ডিসকাউন্ট বা ফ্রি পণ্যের জন্য পয়েন্ট ব্যবহার করুন</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="benefits-section">
            <h2>প্রোগ্রামের সুবিধা</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">💰</div>
                    <h3>পয়েন্ট কখনো মেয়াদ শেষ হবে না</h3>
                    <p>যতক্ষণ আপনার অ্যাকাউন্ট সক্রিয় থাকবে, আপনার পুরস্কার বৈধ থাকবে</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🎁</div>
                    <h3>জন্মদিন বোনাস</h3>
                    <p>আপনার জন্ম মাসে ৫০০ অতিরিক্ত পয়েন্ট পান</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🚚</div>
                    <h3>ফ্রি ডেলিভারি</h3>
                    <p>৫,০০০ পয়েন্টে ফ্রি ডেলিভারি আনলক করুন (গোল্ড টিয়ার)</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">👩‍🌾</div>
                    <h3>ফার্ম ভিজিট</h3>
                    <p>প্ল্যাটিনাম টিয়ারের VIP সদস্যরা পার্টনার ফার্মে যেতে পারবেন</p>
                </div>
            </div>
        </div>
        
        <div class="tiers-section">
            <h2>মেম্বারশিপ টিয়ার</h2>
            <div class="tiers">
                <div class="tier-card">
                    <h3 class="tier-name green">গ্রিন টিয়ার</h3>
                    <p class="tier-requirement">0 - 4,999 পয়েন্ট</p>
                    <ul class="tier-benefits">
                        <li>প্রতি ৳100 খরচে 10 পয়েন্ট</li>
                        <li>বেসিক রিওয়ার্ডস</li>
                        <li>মৌসুমি অফার</li>
                    </ul>
                </div>
                <div class="tier-card">
                    <h3 class="tier-name gold">গোল্ড টিয়ার</h3>
                    <p class="tier-requirement">5,000 - 14,999 পয়েন্ট</p>
                    <ul class="tier-benefits">
                        <li>প্রতি ৳100 খরচে <strong>15 পয়েন্ট</strong></li>
                        <li>৳500 এর বেশি অর্ডারে ফ্রি ডেলিভারি</li>
                        <li>সেলসের প্রাথমিক এক্সেস</li>
                    </ul>
                </div>
                <div class="tier-card">
                    <h3 class="tier-name platinum">প্ল্যাটিনাম টিয়ার</h3>
                    <p class="tier-requirement">15,000+ পয়েন্ট</p>
                    <ul class="tier-benefits">
                        <li>প্রতি ৳100 খরচে <strong>20 পয়েন্ট</strong></li>
                        <li>সব অর্ডারে ফ্রি ডেলিভারি</li>
                        <li>ফার্ম ইভেন্টের জন্য আমন্ত্রণ</li>
                        <li>ব্যক্তিগতকৃত মৌসুমি বক্স</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="rewards-section">
            <h2>জনপ্রিয় রিওয়ার্ডস</h2>
            <div class="rewards-grid">
                <div class="reward-card">
                    <div class="reward-cost">1,000 পয়েন্ট</div>
                    <h3>৳100 ডিসকাউন্ট</h3>
                    <p>যেকোনো অর্ডারে প্রয়োগযোগ্য</p>
                </div>
                <div class="reward-card">
                    <div class="reward-cost">2,500 পয়েন্ট</div>
                    <h3>ফ্রি মৌসুমি ফল বক্স</h3>
                    <p>মূল্য: ৳300</p>
                </div>
                <div class="reward-card">
                    <div class="reward-cost">5,000 পয়েন্ট</div>
                    <h3>ফার্ম ফ্রেশ ডজন ডিম</h3>
                    <p>ফ্রি ডেলিভারি অন্তর্ভুক্ত</p>
                </div>
            </div>
        </div>
        
        <div class="faq-section">
            <h2>রিওয়ার্ডস FAQ</h2>
            <div class="faq-item">
                <button class="faq-question">আমি কীভাবে আমার পয়েন্ট চেক করব?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>আপনার পয়েন্ট ব্যালান্স আপনার অ্যাকাউন্ট ড্যাশবোর্ড এবং প্রতিটি অর্ডার কনফার্মেশন ইমেইলে প্রদর্শিত হয়।</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">পয়েন্টের মেয়াদ শেষ হয় কি?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>না! আপনার পয়েন্ট যতক্ষণ আপনার অ্যাকাউন্ট সক্রিয় থাকে (বছরে অন্তত একটি কেনাকাটা) বৈধ থাকে।</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">আমি কি পরিবারের সাথে পয়েন্ট শেয়ার করতে পারি?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>পয়েন্ট স্থানান্তরযোগ্য নয়, তবে পরিবারের সদস্যরা এক অ্যাকাউন্টের অধীনে যোগ দিতে পারেন।</p>
                </div>
            </div>
        </div>
        
        <div class="cta-section">
            <h3>আজই পয়েন্ট অর্জন শুরু করুন</h3>
            <p>হাজার হাজার সদস্যের সঙ্গে যুক্ত হয়ে স্থানীয় কৃষকদের সমর্থন করুন এবং বিশেষ সুবিধা উপভোগ করুন।</p>
            <div class="cta-buttons">
                <a href="{{ route('customer_auth') }}" class="cta-button">বিনামূল্যে সাইন আপ</a>
                <a href="{{ route('customer_auth') }}" class="cta-button outline">মেম্বার লগইন</a>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/hridoy/loyalty-program.js') }}"></script>
@endsection
