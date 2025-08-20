@extends('index')
@push('style')
<title>কৃষকবৃন্দ | গ্রীন বাস্কেট</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/farmers.css') }}">
@endpush

@section('main-content')
<main>
    <section class="hero-farmer">
        <h1>আমাদের কৃষকদের সাথে পরিচিত হন</h1>
        <p>পরিচিত হন সেই শ্রমনিষ্ঠ ব্যক্তিদের সাথে যারা আপনাকে সতেজ এবং টেকসই খাদ্য সরবরাহ করেন</p>
        <a href="#farmers" class="cta-button">তাদের গল্প জানুন</a>
    </section>

    <section class="container" id="farmers">
        <div class="farmers-intro">
            <h2>স্থানীয়ভাবে চাষ করা, কৃষক প্রথম</h2>
            <p>গ্রীন বাস্কেট বাংলাদেশে, আমরা দেশের ছোট কৃষকদের সাথে সরাসরি সহযোগিতা করি যারা টেকসই কৃষি ও নৈতিক চাষাবাদে নিবেদিত। আমাদের নেটওয়ার্কের প্রতিটি কৃষক তাদের গভীর জ্ঞান ও আন্তরিক যত্ন দিয়ে চাষজাত পণ্য উৎপাদন করে।</p>
        </div>

        <div class="farmers-grid">
            <div class="farmer-card">
                <div class="farmer-image">
                    <img src="https://images.unsplash.com/photo-1737227009607-2678dc9796f4?q=80&w=736&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Farmer Abdul Karim">
                </div>
                <div class="farmer-info">
                    <h3>আব্দুল ও রোকেয়া করিম</h3>
                    <div class="farmer-location">
                        <svg width="12" height="12" ...></svg>
                        রংপুর অর্গানিক ফার্ম, ৭০ কিমি দূরে
                    </div>
                    <p class="farmer-bio">দম্পতি যারা অর্গানিক চাষের প্রতি গভীর আগ্রহী। গত দুই দশক ধরে তারা মৌসুমী সবজি ক্ষতিকর রসায়ন ছাড়া চাষ করছেন।</p>
                    <div class="farmer-products">
                        <span class="product-tag">লাল শাক</span>
                        <span class="product-tag">লাউ</span>
                        <span class="product-tag">দেশি পালং শাক</span>
                    </div>
                    <a href="#" class="farmer-button">তাদের পণ্য দেখুন</a>
                </div>
            </div>

            <div class="farmer-card">
                <div class="farmer-image">
                    <img src="https://anannya.com.bd/wp-content/uploads/2020/10/20/image-462-1603167610.jpg"
                        alt="Farmer Amina Khatun">
                </div>
                <div class="farmer-info">
                    <h3>আমিনা খাতুন</h3>
                    <div class="farmer-location">
                        <svg width="12" height="12" ...></svg>
                        কুষ্টিয়া গ্রিন ফিল্ডস, ৪০ কিমি দূরে
                    </div>
                    <p class="farmer-bio">আমিনা তার পৈতৃক জমিকে রূপান্তরিত করেছেন একটি জীবন্ত অর্গানিক ফার্মে, যেখানে প্রাকৃতিক এবং পরিবেশ বান্ধব পদ্ধতিতে দেশীয় শাকসবজি ও হার্বস চাষ করা হয়।</p>
                    <div class="farmer-products">
                        <span class="product-tag">পুঁই শাক</span>
                        <span class="product-tag">কাঁচা মরিচ</span>
                        <span class="product-tag">লাউ</span>
                        <span class="product-tag">লেবুর তুলসি</span>
                    </div>
                    <a href="#" class="farmer-button">তাদের পণ্য দেখুন</a>
                </div>
            </div>

            <div class="farmer-card">
                <div class="farmer-image">
                    <img src="https://images.unsplash.com/photo-1744742427348-dfa786ffad9c?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Farmer Rezaul & Nasima">
                </div>
                <div class="farmer-info">
                    <h3>নাসিমা হক</h3>
                    <div class="farmer-location">
                        <svg width="12" height="12" ...></svg>
                        যশোর অ্যাগ্রো ভ্যালি, ৯০ কিমি দূরে
                    </div>
                    <p class="farmer-bio">প্রথাগত চাষের জ্ঞানকে আধুনিক অর্গানিক পদ্ধতির সাথে মিলিয়ে এই দম্পতি উচ্চ চাহিদার সবজি উৎপাদন করছেন।</p>
                    <div class="farmer-products">
                        <span class="product-tag">ঢেঁড়স</span>
                        <span class="product-tag">বেগুন</span>
                        <span class="product-tag">করলা</span>
                        <span class="product-tag">হলুদ মূল</span>
                    </div>
                    <a href="#" class="farmer-button">তাদের পণ্য দেখুন</a>
                </div>
            </div>

            <div class="farmer-card">
                <div class="farmer-image">
                    <img src="https://barciknews.com/wp-content/uploads/2020/02/IMG_20200217_105105-1.jpg"
                        alt="Farmer Harun Mia">
                </div>
                <div class="farmer-info">
                    <h3>আবুল মিয়া</h3>
                    <div class="farmer-location">
                        <svg width="12" height="12" ...></svg>
                        নারসিংদী ডেইরি ফার্ম, ৩৫ কিমি দূরে
                    </div>
                    <p class="farmer-bio">নৈতিক দুধ চাষে নেতা, আবুল মিয়া খোলা চারণভূমিতে গরু পালন করেন এবং প্রিমিয়াম দুধ, ঘি ও দই উৎপাদন করেন।</p>
                    <div class="farmer-products">
                        <span class="product-tag">তাজা দুধ</span>
                        <span class="product-tag">ঘি</span>
                        <span class="product-tag">দই</span>
                        <span class="product-tag">পনির</span>
                    </div>
                    <a href="#" class="farmer-button">তাদের পণ্য দেখুন</a>
                </div>
            </div>

            <div class="farmer-card">
                <div class="farmer-image">
                    <img src="https://cdn.ittefaqbd.com/contents/cache/images/640x358x1/uploads/a/2021/10/15/image-283553-1634254641.jpg"
                        alt="Farmer Laila Begum">
                </div>
                <div class="farmer-info">
                    <h3>লাইলা বেগম</h3>
                    <div class="farmer-location">
                        <svg width="12" height="12" ...></svg>
                        সিলেট বেরি গার্ডেন, ২০ কিমি দূরে
                    </div>
                    <p class="farmer-bio">লাইলা একটি ছোট স্কেলের ফলের ফার্ম পরিচালনা করেন, অর্গানিক বেরি উৎপাদন করে যা মাটির ও পানির সংরক্ষণে সহায়ক।</p>
                    <div class="farmer-products">
                        <span class="product-tag">স্ট্রবেরি</span>
                        <span class="product-tag">মালবেরি</span>
                        <span class="product-tag">ব্লুবেরি</span>
                        <span class="product-tag">জামুন</span>
                    </div>
                    <a href="#" class="farmer-button">তাদের পণ্য দেখুন</a>
                </div>
            </div>

            <div class="farmer-card">
                <div class="farmer-image">
                    <img src="https://www.swadeshpratidin.com/2025/06/14/sw_1749912070.jpg"
                        alt="Farmer Sona Mia">
                </div>
                <div class="farmer-info">
                    <h3>সোনা মিয়া</h3>
                    <div class="farmer-location">
                        <svg width="12" height="12" ...></svg>
                        নাটোর ম্যাঙ্গো এস্টেট, ৬০ কিমি দূরে
                    </div>
                    <p class="farmer-bio">স্থানীয় আমের জাত যেমন হিমসাগর ও লংরা সংরক্ষণ করে, সোনা বাংলাদেশের উত্তরাঞ্চলের প্রাচীনতম বাগানগুলোর একটি রক্ষণাবেক্ষণ করেন।</p>
                    <div class="farmer-products">
                        <span class="product-tag">হিমসাগর আম</span>
                        <span class="product-tag">লংরা আম</span>
                        <span class="product-tag">আমের পলপ</span>
                    </div>
                    <a href="#" class="farmer-button">তাদের পণ্য দেখুন</a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">আমাদের কৃষকরা যা বলেন</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">গ্রীন বাস্কেট বাংলাদেশের মাধ্যমে আমরা ঢাকা এবং এর বাইরে গ্রাহকদের সাথে সংযোগ স্থাপন করতে পারি। এখন আমরা বেশি সময় আমাদের মাঠে দিতে পারি, এবং আমাদের আয় উল্লেখযোগ্যভাবে বৃদ্ধি পেয়েছে।</p>
                    <p class="testimonial-author">— আব্দুল করিম, রংপুর অর্গানিক ফার্ম</p>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">ছোট ফার্ম হিসেবে স্থিতিশীল বাজারে প্রবেশ করা কঠিন ছিল। এখন আমাদের বেরি পরিবেশ সচেতন ক্রেতাদের কাছে পৌঁছাচ্ছে যারা আমাদের চাষকৃত পণ্যকে মূল্যায়ন করে।</p>
                    <p class="testimonial-author">— লাইলা বেগম, সিলেট বেরি গার্ডেন</p>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">ন্যায্য দাম এবং সময়মতো পেমেন্ট — গ্রীন বাস্কেট যা প্রতিশ্রুতি দিয়েছে, তা পূরণ করেছে। আমাদের পরিবার অবশেষে আমাদের ফার্মের মাধ্যমে স্থিতিশীলতা দেখছে।</p>
                    <p class="testimonial-author">— রেজাউল হক, যশোর অ্যাগ্রো ভ্যালি</p>
                </div>
            </div>
        </div>
    </section>

    <section class="join-section">
        <div class="container">
            <h2>গ্রীন বাস্কেটের কৃষক হন</h2>
            <p>আমরা সবসময় স্থানীয় কৃষকদের সাথে অংশীদারিত্ব করতে আগ্রহী যারা আমাদের টেকসই, মানসম্পন্ন ও নৈতিক চাষের মূল্যবোধ ভাগ করে।</p>
            <a href="#" class="cta-button">আমাদের সাথে অংশীদারিত্ব সম্পর্কে জানুন</a>
        </div>
    </section>
</main>
@endsection
