@extends('index')
@push('style')
<title>প্রায়শই জিজ্ঞাসিত প্রশ্ন | গ্রিন বাস্কেট</title>
<link rel="stylesheet" href="{{ asset('css/moshiur/faq.css') }}">
@endpush

@section('main-content')
<section class="faq-section">
    <div class="container">
        <h1 class="section-title">প্রায়শই জিজ্ঞাসিত প্রশ্ন</h1>
        <p class="section-subtitle">গ্রিন বাস্কেট সম্পর্কিত সাধারণ প্রশ্নের উত্তর খুঁজুন</p>
        
        <div class="faq-container">
            <div class="faq-category">
                <h2>সাধারণ প্রশ্ন</h2>
                <div class="faq-item">
                    <button class="faq-question">গ্রিন বাস্কেট কি?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>গ্রিন বাস্কেট হলো একটি বাংলাদেশি ডাইরেক্ট-টু-কনজিউমার (D2C) ইকমার্স প্ল্যাটফর্ম যা কৃষকদের সরাসরি গ্রাহকের সঙ্গে সংযুক্ত করে। আমরা তাজা, অর্গানিক এবং স্থানীয়ভাবে উৎপাদিত কৃষি পণ্য সরাসরি ফার্ম থেকে আপনার দোরগোড়ায় পৌঁছে দেই।</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">গ্রিন বাস্কেট কোথায় সেবা প্রদান করে?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>বর্তমানে আমরা ঢাকা, চট্টগ্রাম, সিলেট এবং খুলনা মহানগর এলাকায় সেবা প্রদান করি। শীঘ্রই অন্যান্য শহরেও সম্প্রসারণ করা হবে!</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">গ্রিন বাস্কেট কৃষকদের কীভাবে সমর্থন করে?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>আমরা স্থানীয় কৃষকদের সঙ্গে সরাসরি কাজ করি এবং মধ্যস্বত্বভোগীদের বাদ দিয়ে তাদের উৎপাদনের জন্য ন্যায্য মূল্য নিশ্চিত করি। এছাড়াও আমরা টেকসই চাষাবাদের প্রশিক্ষণ প্রদান করি এবং তাদের জন্য ভালো বাজারে পৌঁছানোর সুযোগ তৈরি করি।</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-category">
                <h2>অর্ডার ও ডেলিভারি</h2>
                <div class="faq-item">
                    <button class="faq-question">আপনার ডেলিভারি সময় কত?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>আমরা সকাল ৮টা থেকে রাত ১০টা পর্যন্ত, সপ্তাহের সাত দিন ডেলিভারি করি। চেকআউটের সময় আপনি আপনার পছন্দের ডেলিভারি স্লট নির্বাচন করতে পারবেন।</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">ডেলিভারি চার্জ কত?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>৳500 এর বেশি অর্ডারে ডেলিভারি ফ্রি। ৳500 এর নিচের অর্ডারের জন্য আমরা ন্যূনতম ৳50 ডেলিভারি চার্জ করি।</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">নির্দিষ্ট সময়ের জন্য ডেলিভারি নির্ধারণ করা কি সম্ভব?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>হ্যাঁ! চেকআউটের সময় আপনি ডেলিভারির জন্য উপলব্ধ সময় স্লট থেকে নির্বাচন করতে পারবেন। নির্দিষ্ট সময়ে ডেলিভারির জন্য আমরা অন্তত ১২ ঘণ্টা আগে অর্ডার করার পরামর্শ দেই।</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">যদি আমি অর্ডার গ্রহণ করতে না পারি তবে কী হবে?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>যদি আপনি উপস্থিত না থাকেন, আমরা আপনাকে যোগাযোগ করার চেষ্টা করব। যদি যোগাযোগ সম্ভব না হয়, আমরা অর্ডারটি প্রতিবেশী বা সিকিউরিটির কাছে (তাদের অনুমতি নিয়ে) রেখে দিতে পারি অথবা পরবর্তীতে ডেলিভারির জন্য আমাদের ফ্যাসিলিটিতে ফিরিয়ে আনব।</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-category">
                <h2>পণ্য ও মান</h2>
                <div class="faq-item">
                    <button class="faq-question">আপনার পণ্য কি অর্গানিক?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>আমাদের অধিকাংশ পণ্য অর্গানিকভাবে চাষ করা হয়, যদিও সব পণ্য সার্টিফাইড অর্গানিক নয়। আমরা এমন কৃষকদের সঙ্গে কাজ করি যারা টেকসই এবং রাসায়নিক মুক্ত চাষাবাদ করে। সার্টিফাইড অর্গানিক পণ্য স্পষ্টভাবে লেবেল করা থাকে।</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">আপনি কীভাবে পণ্যের মান নিশ্চিত করেন?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>আমাদের মান যাচাই টিম প্রেরণের আগে সব পণ্য ব্যক্তিগতভাবে পরিদর্শন করে। আমরা কঠোর মানদণ্ড অনুসরণ করি এবং consistency বজায় রাখতে কৃষকদের সঙ্গে ঘনিষ্ঠভাবে কাজ করি। যদি কখনও সন্তুষ্ট না হন, আমরা ১০০% সন্তুষ্টি গ্যারান্টি দিই।</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">কেন কিছু পণ্য মৌসুমি?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>আমরা বিশ্বাস করি তাজা, প্রাকৃতিকভাবে উৎপাদিত পণ্য দেওয়া গুরুত্বপূর্ণ। বাংলাদেশে অনেক ফল এবং সবজির নির্দিষ্ট মৌসুম থাকে। এটি নিশ্চিত করে যে আপনি সর্বাধিক তাজা এবং স্বাদযুক্ত পণ্য পাবেন।</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-category">
                <h2>পেমেন্ট ও রিটার্ন</h2>
                <div class="faq-item">
                    <button class="faq-question">আপনি কোন পেমেন্ট পদ্ধতি গ্রহণ করেন?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>আমরা ক্যাশ অন ডেলিভারি, বিকাশ, নগদ, রকেট এবং SSLCommerz-secure পেমেন্ট গেটওয়ে মাধ্যমে ক্রেডিট/ডেবিট কার্ড গ্রহণ করি।</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">আপনার রিটার্ন পলিসি কী?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>যদি আপনি ক্ষতিগ্রস্ত বা নষ্ট পণ্য পান, ২৪ ঘণ্টার মধ্যে ছবি সহ আমাদের জানান। আমরা পণ্য পরিবর্তন বা অর্থ ফেরত প্রদান করব। পণ্য নাশওয়ানযোগ্য হওয়ার কারণে, মনের পরিবর্তনের জন্য রিটার্ন গ্রহণযোগ্য নয়।</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question">রিফান্ড প্রক্রিয়ায় কত সময় লাগে?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>রিফান্ড ৩-৫ ব্যবসায়িক দিনের মধ্যে প্রক্রিয়াকৃত হয়। ডিজিটাল পেমেন্টের ক্ষেত্রে, আপনার ব্যাংক বা মোবাইল ফিনান্সিয়াল সার্ভিস প্রদানকারীর উপর নির্ভর করে ৭-১০ ব্যবসায়িক দিনের মধ্যে রিফান্ড আপনার অ্যাকাউন্টে প্রতিফলিত হবে।</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="faq-contact">
            <h3>অবশ্যই আরও প্রশ্ন আছে?</h3>
            <p>আমাদের কাস্টমার কেয়ার টিম সাহায্য করতে সদা প্রস্তুত!</p>
            <a href="{{ route('contact') }}" class="cta-button">যোগাযোগ করুন</a>
        </div>
    </div>
</section>
<script src="{{ asset('js/hridoy/faq.js') }}"></script>
@endsection
