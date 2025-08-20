@extends('index')
@push('style')
<title>শর্তাবলী | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/sakib/termsandcondition.css') }}">
@endpush

@section('main-content')
<section class="terms-section">
    <div class="container">
        <h1 class="terms-title">সেবার শর্তাবলী</h1>
        <p class="terms-update">শেষ আপডেট: <span id="current-date"></span></p>

        <div class="terms-intro">
            <p><strong>Green Basket</strong>-এ আপনাকে স্বাগতম! এই সেবার শর্তাবলী আমাদের ওয়েবসাইট (<a href="https://www.greenbasket.com.bd">www.greenbasket.com.bd</a>) এবং মোবাইল অ্যাপ্লিকেশন (যদি প্রযোজ্য হয়) ব্যবহারের নিয়মাবলী নির্ধারণ করে। আমাদের সেবা ব্যবহার করে আপনি এই শর্তাবলী মেনে চলতে সম্মত হন।</p>
        </div>

        <!-- Section 1: Acceptance of Terms -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">1</span> শর্তাবলী মেনে নেওয়া</h2>
            <p>Green Basket ব্যবহার করে আপনি নিশ্চিত করছেন যে:</p>
            <ul>
                <li>আপনার বয়স কমপক্ষে <strong>১৮ বছর</strong> বা পিতামাতার সম্মতি নিয়ে প্ল্যাটফর্ম ব্যবহার করছেন।</li>
                <li>আপনি <strong>বাংলাদেশ</strong>-এর সকল প্রযোজ্য আইন মেনে চলবেন।</li>
                <li>আপনি প্ল্যাটফর্মকে অবৈধ কাজে ব্যবহার করবেন না।</li>
            </ul>
        </div>

        <!-- Section 2: Account Registration -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">2</span> অ্যাকাউন্ট নিবন্ধন</h2>
            <ul>
                <li>অ্যাকাউন্ট তৈরি করার সময় <strong>সঠিক তথ্য</strong> প্রদান করতে হবে।</li>
                <li>আপনার লগইন তথ্যের গোপনীয়তা বজায় রাখা আপনার দায়িত্ব।</li>
                <li>শর্তাবলী লঙ্ঘনকারী অ্যাকাউন্ট <strong>স্থগিত বা বাতিল</strong> করার অধিকার Green Basket রাখে।</li>
            </ul>
        </div>

        <!-- Section 3: Ordering & Payments -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">3</span> অর্ডার ও পেমেন্ট</h2>
            <ul>
                <li>সমস্ত অর্ডার <strong>পণ্যের উপলব্ধতা</strong> অনুযায়ী প্রযোজ্য।</li>
                <li>আমরা <strong>bKash, Nagad, Rocket, এবং কার্ড</strong> এর মাধ্যমে পেমেন্ট গ্রহণ করি (SSLCommerz-এর মাধ্যমে নিরাপদভাবে প্রক্রিয়াজাত)।</li>
                <li>মূল্য <strong>বাংলাদেশী টাকা (৳)</strong>-এ দেওয়া হয়েছে এবং কোন নোটিশ ছাড়াই পরিবর্তন হতে পারে।</li>
            </ul>
        </div>

        <!-- Section 4: Delivery & Returns -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">4</span> ডেলিভারি ও রিটার্ন</h2>
            <ul>
                <li>ডেলিভারি সময় <strong>অবস্থান ও আবহাওয়া পরিস্থিতি</strong> অনুযায়ী পরিবর্তিত হতে পারে।</li>
                <li>রিটার্ন আমাদের <a href="{{ route('returnaproduct') }}">রিটার্ন নীতিমালা</a>-এর সাথে মিলিয়ে হতে হবে।</li>
                <li>নাশওয়ানীয় পণ্য (শাকসবজি, দুধ, মাংস) <strong>রিটার্ন করা যাবে না</strong> যদি না তা নষ্ট বা ক্ষতিগ্রস্ত হয়।</li>
            </ul>
        </div>

        <!-- Section 5: User Conduct -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">5</span> ব্যবহারকারীর আচরণ</h2>
            <p>আপনি সম্মত হচ্ছেন <strong>না</strong> করতে:</p>
            <ul>
                <li>ডেটা বের করার জন্য স্বয়ংক্রিয় বট/স্ক্র্যাপার ব্যবহার।</li>
                <li>কৃষক, ডেলিভারি কর্মী বা অন্যান্য ব্যবহারকারীদের হয়রানি।</li>
                <li>মিথ্যা রিভিউ বা বিভ্রান্তিকর তথ্য আপলোড।</li>
            </ul>
        </div>

        <!-- Section 6: Intellectual Property -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">6</span> বুদ্ধিবৃত্তিক সম্পত্তি</h2>
            <ul>
                <li>সমস্ত কন্টেন্ট (লোগো, টেক্সট, ছবি) <strong>Green Basket</strong>-এর।</li>
                <li>অননুমোদিত ব্যবহার নিষিদ্ধ।</li>
            </ul>
        </div>

        <!-- Section 7: Limitation of Liability -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">7</span> দায়ের সীমাবদ্ধতা</h2>
            <p>Green Basket <strong>দায়ী নয়</strong>:</p>
            <ul>
                <li>প্রাকৃতিক দুর্যোগ, ধর্মঘট বা রাজনৈতিক অস্থিরতার কারণে বিলম্ব।</li>
                <li>পণ্যের ওজন বা চেহারায় ছোটখাটো পার্থক্য।</li>
            </ul>
        </div>

        <!-- Section 8: Changes to Terms -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">8</span> শর্তাবলীতে পরিবর্তন</h2>
            <p>আমরা সময়ে সময়ে এই শর্তাবলী আপডেট করতে পারি। পরিবর্তনের পরে ব্যবহার অব্যাহত রাখলে গ্রহণযোগ্যতা বোঝায়।</p>
        </div>

        <!-- Section 9: Governing Law -->
        <div class="terms-section">
            <h2 class="section-heading"><span class="section-icon">9</span> প্রযোজ্য আইন</h2>
            <p>এই শর্তাবলী <strong>বাংলাদেশ</strong>-এর আইন দ্বারা পরিচালিত। কোন বিরোধ হলে ঢাকার আদালতে সমাধান হবে।</p>
        </div>

        <!-- Contact Information -->
        <div class="terms-contact">
            <h3>প্রশ্ন আছে?</h3>
            <p>আমাদের সাথে যোগাযোগ করুন:</p>
            <div class="contact-methods">
                <a href="mailto:legal@greenbasket.com.bd" class="contact-link">📧 constantcorner@gmail.com</a>
                <a href="tel:16234" class="contact-link">📞 01321066060</a>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js\hridoy\termscondition-privacy.js') }}"></script>
@endsection
