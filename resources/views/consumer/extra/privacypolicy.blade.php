@extends('index')
@push('style')
<title>গোপনীয়তা নীতি | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/sakib/privacypolicy.css') }}">
@endpush

@section('main-content')
<div class="privacy-policy">
    <div class="container">
        <h1 class="policy-title">গোপনীয়তা নীতি</h1>
        <p class="policy-update">শেষ আপডেট: <span id="current-date"></span></p>

        <div class="policy-intro">
            <p><strong>Green Basket</strong>-এ আমরা আপনার ব্যক্তিগত তথ্যের নিরাপত্তা এবং গোপনীয়তা রক্ষায় প্রতিশ্রুতিবদ্ধ। এই গোপনীয়তা নীতি ব্যাখ্যা করে যে আমরা কীভাবে আপনার তথ্য সংগ্রহ, ব্যবহার, প্রকাশ এবং সুরক্ষিত করি যখন আপনি আমাদের পরিষেবা ব্যবহার করেন।</p>
        </div>

        <div class="policy-section">
            <h2 class="section-heading"><span class="section-icon">1</span>আমরা যে তথ্য সংগ্রহ করি</h2>
            <div class="subsection">
                <h3>ক. আপনি যে ব্যক্তিগত তথ্য প্রদান করেন</h3>
                <ul>
                    <li>নাম</li>
                    <li>যোগাযোগের তথ্য (ইমেইল, ফোন নম্বর, ঠিকানা)</li>
                    <li>পেমেন্ট তথ্য (bKash/Nagad/Rocket/কার্ড বিবরণ)</li>
                    <li>অ্যাকাউন্টের প্রমাণপত্র</li>
                    <li>অর্ডার ইতিহাস এবং পছন্দসমূহ</li>
                </ul>
            </div>
            <div class="subsection">
                <h3>খ. স্বয়ংক্রিয়ভাবে সংগ্রহিত তথ্য</h3>
                <ul>
                    <li><strong>ডিভাইস তথ্য:</strong> IP ঠিকানা, ব্রাউজার ধরন, অপারেটিং সিস্টেম</li>
                    <li><strong>ব্যবহার সংক্রান্ত তথ্য:</strong> ভিজিট করা পেজ, সময় ব্যয়, ক্লিকসমূহ</li>
                    <li><strong>কুকি ও ট্র্যাকিং:</strong> আপনার অভিজ্ঞতা উন্নত করতে আমরা কুকি ব্যবহার করি</li>
                </ul>
            </div>
        </div>

        <div class="policy-section">
            <h2 class="section-heading"><span class="section-icon">2</span>আমরা আপনার তথ্য কীভাবে ব্যবহার করি</h2>
            <ul class="usage-list">
                <li>আপনার অর্ডার প্রক্রিয়াকরণ এবং ডেলিভারি</li>
                <li>আমাদের পরিষেবা ও ব্যবহারকারীর অভিজ্ঞতা উন্নত করা</li>
                <li>আপনার সাথে যোগাযোগ (অর্ডার আপডেট, প্রচার)</li>
                <li>প্রতারণা প্রতিরোধ এবং নিরাপত্তা নিশ্চিত করা</li>
                <li>বাংলাদেশি আইন মেনে চলা</li>
            </ul>
        </div>

        <div class="policy-section">
            <h2 class="section-heading"><span class="section-icon">3</span>ডেটা শেয়ারিং ও প্রকাশ</h2>
            <p>আমরা <strong>আপনার ব্যক্তিগত তথ্য বিক্রি করি না</strong>। শুধুমাত্র নিম্নলিখিত ক্ষেত্রে শেয়ার করা হতে পারে:</p>
            <div class="disclosure-grid">
                <div class="disclosure-item">
                    <div class="disclosure-icon">👨‍🌾</div>
                    <p><strong>কৃষক/সরবরাহকারী</strong>-দের সাথে (শুধুমাত্র অর্ডার সম্পাদনের জন্য)</p>
                </div>
                <div class="disclosure-item">
                    <div class="disclosure-icon">🚚</div>
                    <p><strong>ডেলিভারি পার্টনার</strong>-দের সাথে</p>
                </div>
                <div class="disclosure-item">
                    <div class="disclosure-icon">💳</div>
                    <p><strong>পেমেন্ট প্রসেসর</strong>-দের সাথে</p>
                </div>
                <div class="disclosure-item">
                    <div class="disclosure-icon">⚖️</div>
                    <p><strong>আইনি প্রয়োজনীয়তা</strong>-এর জন্য</p>
                </div>
            </div>
        </div>

        <div class="policy-section security-section">
            <h2 class="section-heading"><span class="section-icon">4</span>ডেটা নিরাপত্তা</h2>
            <div class="security-measures">
                <div class="measure">
                    <div class="measure-icon">🔒</div>
                    <p><strong>SSL এনক্রিপশন</strong> সমস্ত লেনদেনের জন্য</p>
                </div>
                <div class="measure">
                    <div class="measure-icon">🛡️</div>
                    <p><strong>সুরক্ষিত সার্ভার</strong> সীমিত অ্যাক্সেস সহ</p>
                </div>
                <div class="measure">
                    <div class="measure-icon">🔍</div>
                    <p><strong>নিয়মিত নিরাপত্তা নিরীক্ষা</strong></p>
                </div>
            </div>
            <p class="security-note">দ্রষ্টব্য: কোনো অনলাইন প্ল্যাটফর্ম 100% নিরাপদ নয় — সর্বদা আপনার লগইন তথ্য সুরক্ষিত রাখুন।</p>
        </div>

        <div class="policy-section">
            <h2 class="section-heading"><span class="section-icon">5</span>আপনার অধিকারসমূহ</h2>
            <div class="rights-grid">
                <div class="right-item">
                    <h3>অ্যাক্সেস ও আপডেট</h3>
                    <p>আপনার অ্যাকাউন্টের তথ্য যেকোনো সময় দেখতে বা পরিবর্তন করতে পারেন</p>
                </div>
                <div class="right-item">
                    <h3>অপ্ট আউট</h3>
                    <p>মার্কেটিং ইমেইল থেকে বাতিল করতে পারেন</p>
                </div>
                <div class="right-item">
                    <h3>ডেটা মুছে ফেলা</h3>
                    <p>আপনার তথ্য মুছে ফেলার অনুরোধ করতে পারেন</p>
                </div>
            </div>
        </div>

        <div class="policy-contact">
            <h2>আমাদের সাথে যোগাযোগ করুন</h2>
            <p>গোপনীয়তা সম্পর্কিত প্রশ্নের জন্য:</p>
            <div class="contact-methods">
                <a href="mailto:privacy@greenbasket.com.bd" class="contact-link">📧 privacy@greenbasket.com.bd</a>
                <a href="tel:16234" class="contact-link">📞 16234</a>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/hridoy/termscondition-privacy.js') }}"></script>
@endsection
