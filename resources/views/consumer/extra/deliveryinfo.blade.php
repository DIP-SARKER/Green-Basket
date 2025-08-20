@extends('index')
@push('style')
<title>ডেলিভারি তথ্য | গ্রিন বাস্কেট</title>
<link rel="stylesheet" href="{{ asset('css/moshiur/deliveryinfo.css') }}">
@endpush

@section('main-content')
<section class="delivery-section">
    <div class="container">
        <h1 class="section-title">ডেলিভারি তথ্য</h1>
        <p class="section-subtitle">আপনার গ্রিন বাস্কেট অর্ডার গ্রহণ সংক্রান্ত সমস্ত তথ্য</p>
        
        <div class="delivery-grid">
            <div class="delivery-card">
                <div class="delivery-icon">🚚</div>
                <h3>ডেলিভারি এলাকা</h3>
                <p>আমরা বর্তমানে ঢাকা, চট্টগ্রাম, সিলেট এবং খুলনা মহানগর এলাকায় ডেলিভারি দিচ্ছি। শীঘ্রই আরও শহরে বিস্তৃত করা হবে!</p>
                <div class="delivery-note">
                    <strong>নোট:</strong> এই শহরের কিছু দূরবর্তী এলাকায় সীমিত ডেলিভারি অপশন থাকতে পারে।
                </div>
            </div>
            
            <div class="delivery-card">
                <div class="delivery-icon">⏱️</div>
                <h3>ডেলিভারি সময়</h3>
                <p>আমাদের ডেলিভারি সময় সকাল ৮টা থেকে রাত ১০টা পর্যন্ত, সপ্তাহের সাত দিন এবং ছুটির দিনসহ।</p>
                <ul class="delivery-list">
                    <li><strong>সকাল:</strong> ৮:০০ AM - ১২:০০ PM</li>
                    <li><strong>দুপুর:</strong> ১২:০০ PM - ৪:০০ PM</li>
                    <li><strong>সন্ধ্যা:</strong> ৪:০০ PM - ১০:০০ PM</li>
                </ul>
            </div>
            
            <div class="delivery-card">
                <div class="delivery-icon">💰</div>
                <h3>ডেলিভারি চার্জ</h3>
                <p>আমরা স্বচ্ছ মূল্য নীতি অনুসরণ করি, কোন লুকানো ফি নেই:</p>
                <ul class="delivery-list">
                    <li><strong>৳500 এর বেশি অর্ডার:</strong> ফ্রি ডেলিভারি</li>
                    <li><strong>৳500 এর নিচের অর্ডার:</strong> ৳50 ডেলিভারি চার্জ</li>
                    <li><strong>এক্সপ্রেস ডেলিভারি (২ ঘণ্টার মধ্যে):</strong> অতিরিক্ত ৳100</li>
                </ul>
            </div>
            
            <div class="delivery-card">
                <div class="delivery-icon">📅</div>
                <h3>নির্ধারিত ডেলিভারি</h3>
                <p>চেকআউটের সময় আপনি নির্দিষ্ট সময় স্লটে ডেলিভারি নির্ধারণ করতে পারবেন:</p>
                <ul class="delivery-list">
                    <li>উপলব্ধ সময় স্লট থেকে নির্বাচন করুন</li>
                    <li>সর্বোচ্চ ৭ দিন আগে পর্যন্ত ডেলিভারি নির্ধারণ করতে পারেন</li>
                    <li>ডেলিভারির আগে এসএমএস স্মরণপত্র পাবেন</li>
                </ul>
            </div>
            
            <div class="delivery-card">
                <div class="delivery-icon">📦</div>
                <h3>অর্ডার গ্রহণ</h3>
                <p>সর্বাধিক তাজা পণ্য নিশ্চিত করার জন্য:</p>
                <ul class="delivery-list">
                    <li>স্পষ্ট ডেলিভারি নির্দেশনা প্রদান করুন</li>
                    <li>নাশওয়ানযোগ্য পণ্য গ্রহণের জন্য কেউ উপস্থিত থাকুক</li>
                    <li>ডেলিভারির সময় আপনার অর্ডার পরিদর্শন করুন</li>
                </ul>
            </div>
            
            <div class="delivery-card">
                <div class="delivery-icon">❓</div>
                <h3>ডেলিভারি সমস্যা</h3>
                <p>যদি কোনো সমস্যা হয়:</p>
                <ul class="delivery-list">
                    <li>দ্রুত যোগাযোগ করুন <strong>16234</strong> নম্বরে</li>
                    <li>ক্ষতিগ্রস্ত/হারা পণ্য ২ ঘণ্টার মধ্যে রিপোর্ট করুন</li>
                    <li>আমরা ২৪ ঘণ্টার মধ্যে সমস্যার সমাধান করব</li>
                </ul>
            </div>
        </div>
        
        <div class="delivery-important">
            <h3>গুরুত্বপূর্ণ ডেলিভারি নোট</h3>
            <div class="important-grid">
                <div class="important-item">
                    <h4>আবহাওয়া সংক্রান্ত বিলম্ব</h4>
                    <p>চরম আবহাওয়া (ঘূর্ণিঝড়, ভারী বৃষ্টি) চলাকালীন নিরাপত্তার কারণে ডেলিভারি বিলম্বিত হতে পারে। আপনার অর্ডারে প্রভাব পড়লে আমরা জানাব।</p>
                </div>
                <div class="important-item">
                    <h4>উৎসবের সময়</h4>
                    <p>ঈদ এবং অন্যান্য প্রধান উৎসবের সময়, উচ্চ চাহিদার কারণে ডেলিভারি সময় বাড়তে পারে। এই সময়ে আগে অর্ডার করুন।</p>
                </div>
                <div class="important-item">
                    <h4>পণ্যের প্রাপ্যতা</h4>
                    <p>যদি কোনো পণ্য অর্ডারের পরে অনুপলব্ধ হয়, আমরা বিকল্প প্রদান করব অথবা অর্ডারের সেই অংশের অর্থ ফেরত দেব।</p>
                </div>
                <div class="important-item">
                    <h4>কন্টাক্টলেস ডেলিভারি</h4>
                    <p>আমরা কন্টাক্টলেস ডেলিভারি বিকল্প প্রদান করি। অর্ডার নোটে এই পছন্দ উল্লেখ করুন।</p>
                </div>
            </div>
        </div>
        
        <div class="delivery-contact">
            <h3>ডেলিভারি নিয়ে সহায়তা প্রয়োজন?</h3>
            <p>আমাদের ডেলিভারি দল সকাল ৮টা থেকে রাত ১০টা পর্যন্ত আপনাকে সাহায্য করতে প্রস্তুত।</p>
            <div class="contact-options">
                <a href="tel:16234" class="cta-button outline">কল করুন: 16234</a>
                <a href="{{ route('contact') }}" class="cta-button">যোগাযোগ ফর্ম</a>
            </div>
        </div>
    </div>
</section>
@endsection
