@extends('index')
@push('style')
<title>বন্ধুকে রেফার করুন | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/prome/referfriends.css') }}">
@endpush

@section('main-content')
<section class="referral-program">
    <div class="container">
        <h1 class="program-title">বন্ধুকে রেফার করুন, রিওয়ার্ড পান</h1>
        <p class="program-subtitle">Green Basket শেয়ার করুন এবং প্রতি বন্ধুর জন্য যা সাইন আপ করবে, আপনি পাবেন ৳100 ক্রেডিট!</p>
        
        <div class="referral-hero">
            <div class="hero-content">
                <h2>দিন ৳100, পান ৳100</h2>
                <p>আপনার বন্ধু প্রথম অর্ডারে পাবেন ৳100 ছাড়, আর তারা প্রথম অর্ডার করলে আপনি পাবেন আপনার অ্যাকাউন্টে ৳100 ক্রেডিট। এটা খুব সহজ!</p>
                <div class="referral-stats">
                    <div class="stat">
                        <div class="stat-number" id="total-referrals">0</div>
                        <div class="stat-label">রেফার করা বন্ধু</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number" id="total-earnings">৳0</div>
                        <div class="stat-label">মোট উপার্জন</div>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('https://img.freepik.com/free-vector/social-media-network_74855-4575.jpg?semt=ais_hybrid&w=740') }}" alt="বন্ধুরা Green Basket শেয়ার করছে">
            </div>
        </div>
        
        <div class="how-it-works">
            <h2>কিভাবে কাজ করে</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-icon">📱</div>
                    <h3>আপনার লিঙ্ক শেয়ার করুন</h3>
                    <p>আপনার অনন্য রেফারেল লিঙ্ক কপি করুন বা WhatsApp, Facebook, ইমেইলের মাধ্যমে সরাসরি শেয়ার করুন</p>
                </div>
                <div class="step">
                    <div class="step-icon">👫</div>
                    <h3>বন্ধুরা সাইন আপ করবে</h3>
                    <p>আপনার বন্ধু আপনার লিঙ্ক ব্যবহার করে রেজিস্টার করবে এবং প্রথম অর্ডারে পাবেন ৳100 ছাড় (ন্যূনতম ৳500 ক্রয়)</p>
                </div>
                <div class="step">
                    <div class="step-icon">💰</div>
                    <h3>উভয়েই উপার্জন করবেন</h3>
                    <p>যখন তারা প্রথম অর্ডার সম্পন্ন করবে, আপনার অ্যাকাউন্টে ক্রেডিট হিসাবে পাবেন ৳100</p>
                </div>
            </div>
        </div>
        
        <div class="referral-tools">
            <h2>আপনার লিঙ্ক শেয়ার করুন</h2>
            <div class="referral-link-box">
                <input type="text" id="referral-link" value="https://greenbasket.com.bd/signup?ref=USER123" readonly>
                <button id="copy-link" class="cta-button">লিঙ্ক কপি করুন</button>
            </div>
            <p class="link-note">আপনার ব্যক্তিগত রেফারেল কোড: <strong>USER123</strong></p>
            
            <div class="social-share">
                <h3>অথবা সরাসরি শেয়ার করুন:</h3>
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
                        <span>ইমেইল</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="rewards-section">
            <h2>আপনার সম্ভাব্য উপার্জন</h2>
            <div class="earnings-calculator">
                <div class="calculator-input">
                    <label for="friends-count">আপনি কতজন বন্ধু রেফার করবেন:</label>
                    <input type="range" id="friends-count" min="1" max="50" value="5">
                    <div class="range-value"><span id="friends-value">5</span> বন্ধু</div>
                </div>
                <div class="calculator-result">
                    <div class="result-card">
                        <div class="result-amount">৳<span id="earnings-value">500</span></div>
                        <div class="result-label">সম্ভাব্য ক্রেডিট</div>
                    </div>
                    <p>এটি <strong>পরবর্তী 10 অর্ডারের জন্য ফ্রি ডেলিভারি</strong> বা <strong>পরবর্তী ক্রয়ে ৳500 ছাড়!</strong></p>
                </div>
            </div>
        </div>
        
        <div class="faq-section">
            <h2>রেফারেল FAQ</h2>
            <div class="faq-item">
                <button class="faq-question">আমি কতজন বন্ধু রেফার করতে পারি?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>আপনি সীমাহীন বন্ধুকে রেফার করতে পারেন এবং প্রতিটি যোগ্য ক্রয় করা বন্ধুর জন্য পাবেন ৳100।</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">আমি কখন আমার রেফারেল ক্রেডিট পাব?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>ক্রেডিট আপনার বন্ধুর প্রথম অর্ডার সম্পন্ন হওয়ার সাথে সাথেই আপনার অ্যাকাউন্টে যুক্ত হবে।</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">আমি কি রেফারেল ক্রেডিট অন্য প্রচারের সাথে ব্যবহার করতে পারি?<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>হ্যাঁ! আপনার ক্রেডিট ঋতুকালীন অফার এবং ডিসকাউন্টের সাথে মিলিত হতে পারে।</p>
                </div>
            </div>
        </div>
        
        <div class="terms-notice">
            <h3>প্রোগ্রামের শর্তাবলী</h3>
            <ul>
                <li>রেফারেল ক্রেডিট 6 মাস পরে মেয়াদ শেষ হবে</li>
                <li>জাল রেফারেলের জন্য অ্যাকাউন্ট স্থগিত করা হবে</li>
                <li>শুধুমাত্র বাংলাদেশে নতুন গ্রাহক সাইন আপের জন্য বৈধ</li>
            </ul>
        </div>
    </div>
</section>
<script src="{{ asset('js/hridoy/refer-friends.js') }}"></script>
@endsection
