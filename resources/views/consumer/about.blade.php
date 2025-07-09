@extends('index')
@push('style')
<title>About | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/about.css') }}">
@endpush

@section('main-content')
<main>
    <section class="hero-about">
        <h1>Our Story: Connecting Farms to Families</h1>
        <p>Green Basket is revolutionizing the way fresh food reaches your table by bridging the gap between local farmers, fishers, and consumers.</p>
    </section>

    <section class="mission-section">
        <div class="container">
            <h2 class="section-title">আমাদের লক্ষ্য</h2>
            <p class="mission-statement">স্থানীয় কৃষক ও মৎস্যজীবীদের ক্ষমতায়ন এবং ভোক্তাদের টাটকা, টেকসই পণ্য সরাসরি উৎস থেকে টেবিলে পৌঁছে দেওয়া।</p>

            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">🌾</div>
                    <h3>কৃষক অগ্রাধিকার</h3>
                    <p>আমরা আয়ের ৮৫% সরাসরি কৃষক ও মৎস্যজীবীদের দেই, যাতে তারা তাদের পরিশ্রমের ন্যায্য মূল্য পায়।</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">🌍</div>
                    <h3>টেকসই পদ্ধতি</h3>
                    <p>আমরা পরিবেশবান্ধব চাষ ও মাছ ধরার প্রথা উৎসাহিত করি, যাতে ভবিষ্যৎ প্রজন্মের জন্য পরিবেশ রক্ষা করা যায়।</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">🏠</div>
                    <h3>সরাসরি আপনার কাছে</h3>
                    <p>মধ্যস্থতাকারী ছাড়াই, আমরা খামার থেকে টাটকা পণ্য সরাসরি আপনার দরজায় পৌঁছে দিই—যা উপকার করে উভয় পক্ষেরই।</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section-title">আমাদের প্রভাব</h2>
            <p style="text-align: center; max-width: 800px; margin: 0 auto 2rem;">আমাদের যাত্রা শুরু থেকে, আমরা স্থানীয় খাদ্যব্যবস্থা ও কমিউনিটিতে ইতিবাচক পরিবর্তন আনতে সক্ষম হয়েছি:</p>

            <div class="impact-stats">
                <div class="stat-item">
                    <div class="stat-number">৩০০+</div>
                    <div class="stat-label">স্থানীয় কৃষক ও জেলেদের সহায়তা</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">৮৫%</div>
                    <div class="stat-label">উৎপাদকদের আয়ে অংশ</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">১৫K+</div>
                    <div class="stat-label">সন্তুষ্ট গ্রাহক</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">৪৫%</div>
                    <div class="stat-label">খাদ্য পরিবহন দূরত্বে হ্রাস</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="section-title">একজন কৃষকের গল্প</h2>
            <div class="farmer-story">
                <img src="https://updategroupbd.com/images/gallery/photos/super-fresh-agro-farm/3.jpg" alt="Farmer Rahim" class="farmer-photo">
                <div class="farmer-content">
                    <h3>মিলুন রহিমের সঙ্গে - একজন জৈব কৃষক</h3>
                    <p>রহিম গত ১২ বছর ধরে জৈবভাবে চাষ করছেন। কিন্তু স্থানীয় বাজারে ন্যায্য মূল্য পাওয়া ছিল তার জন্য কঠিন, কারণ মধ্যস্বত্বভোগীরা অধিকাংশ লাভ নিয়ে যেত।</p>

                    <p class="farmer-quote">"গ্রিন বাস্কেটের সঙ্গে যুক্ত হওয়ার পর আমার আয় দ্বিগুণ হয়েছে। এখন আমি উন্নত যন্ত্রপাতি কিনতে পারছি এবং সন্তানদের ভালো স্কুলে পাঠাতে পারছি। সবচেয়ে ভালো লাগে, আমার সবজি সরাসরি এমন পরিবারে যাচ্ছে যারা টাটকা খাবারকে গুরুত্ব দেয়।"</p>

                    <p>রহিম এখন ৮ একর জমিতে ২৫ প্রজাতির জৈব সবজি চাষ করেন এবং স্থানীয় ৭ জনকে কর্মসংস্থান দিয়েছেন। তার পণ্য গ্রিন বাস্কেটের মাধ্যমে ২৪ ঘণ্টার মধ্যে গ্রাহকদের কাছে পৌঁছে যায়।</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <h2 class="section-title">আমাদের টিম</h2>
            <p style="text-align: center; max-width: 800px; margin: 0 auto 2rem;">একদল উদ্যমী তরুণ, যারা কৃষি ও খাদ্য ব্যবস্থার ইতিবাচক পরিবর্তনে বিশ্বাসী।</p>

            <div class="team-grid">
                <div class="team-member">
                    <img src="{{ asset('images/cropMIZ.jpg') }}" alt="Zion" class="team-photo">
                    <div class="team-info">
                        <h3>মেজবাউল ইসলাম জিওন</h3>
                        <p>প্রযুক্তি পরামর্শক</p>
                        <p>ডিজিটাল সমাধানের মাধ্যমে কৃষি খাতের উন্নয়নে কাজ করছেন</p>
                    </div>
                </div>

                <div class="team-member">
                    <img src="https://speaking.com/wp-content/uploads/2018/10/Muhammad-Yunus.jpg" alt="Younis" class="team-photo">
                    <div class="team-info">
                        <h3>ড. মোহাম্মদ ইউনুস</h3>
                        <p>বিশেষজ্ঞ পরামর্শক</p>
                        <p>সমাজ উন্নয়ন ও টেকসই কৃষি ব্যবস্থার ওপর গবেষণা পরিচালনা করছেন</p>
                    </div>
                </div>

                <div class="team-member">
                    <img src="{{ asset('images/hridoy.jpg') }}" alt="Mamun" class="team-photo">
                    <div class="team-info">
                        <h3>মো. মামুন অর রশিদ হৃদয়</h3>
                        <p>প্রধান সমন্বয়কারী</p>
                        <p>যিনি প্রযুক্তি ও কৃষকের মধ্যে সেতুবন্ধন গড়তে কাজ করছেন</p>
                    </div>
                </div>

                <div class="team-member">
                    <img src="https://avatars.githubusercontent.com/u/195622787?v=4" alt="Dip" class="team-photo">
                    <div class="team-info">
                        <h3>দীপ সরকার</h3>
                        <p>কমিউনিটি লিয়াজোঁ</p>
                        <p>গ্রামীণ উদ্যোক্তা উন্নয়নে বিশেষ ভূমিকা রাখছেন</p>
                    </div>
                </div>

                <div class="team-member">
                    <img src="https://avatars.githubusercontent.com/u/199431925?v=4" alt="Shakib" class="team-photo">
                    <div class="team-info">
                        <h3>সাকিব খান</h3>
                        <p>বাজার বিশ্লেষক</p>
                        <p>দাম নির্ধারণ ও সরবরাহ চেইন বিশ্লেষণে দক্ষ</p>
                    </div>
                </div>

                <div class="team-member">
                    <img src="https://avatars.githubusercontent.com/u/195622886?v=4" alt="Moshiur" class="team-photo">
                    <div class="team-info">
                        <h3>মশিউর রহমান</h3>
                        <p>প্রযুক্তি কর্মকর্তা</p>
                        <p>ডিজিটাল প্ল্যাটফর্ম ব্যবস্থাপনায় নিয়োজিত</p>
                    </div>
                </div>

                <div class="team-member">
                    <img src="https://avatars.githubusercontent.com/u/195622917?v=4" alt="Sumaiya" class="team-photo">
                    <div class="team-info">
                        <h3>সুমাইয়া তাবসসুম প্রমি</h3>
                        <p>সৃজনশীল পরিচালক</p>
                        <p>ব্র্যান্ডিং ও ভিজ্যুয়াল স্টোরিটেলিংয়ের দায়িত্বে</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section" style="text-align: center; background-color: var(--primary); color: var(--white); padding: 4rem 0;">
        <div class="container">
            <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">আমাদের সঙ্গে যুক্ত হোন</h2>
            <p style="max-width: 700px; margin: 0 auto 2rem; font-size: 1.2rem;">আপনি যদি একজন উৎপাদক হয়ে থাকেন অথবা একজন সচেতন ক্রেতা, আমাদের এই যাত্রায় আপনি স্বাগত।</p>
            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <a href="#" class="cta-button" style="background-color: var(--white); color: var(--primary);">টাটকা পণ্য কিনুন</a>
                <a href="#" class="cta-button" style="background-color: transparent; border: 2px solid var(--white);">আমাদের সঙ্গে বিক্রি করুন</a>
            </div>
        </div>
    </section>

</main>
@endsection