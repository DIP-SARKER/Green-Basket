@extends('index')
@push('style')
<title>টেকসইতা | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/moshiur/sustainability.css') }}">
@endpush

@section('main-content')
<section class="sustainability-section">
    <div class="container">
        <h1 class="section-title">আমাদের টেকসই মডেল</h1>
        <p class="section-subtitle">কৃষককে সরাসরি গ্রাহকের সঙ্গে যুক্ত করে একটি সবুজ বাংলাদেশ</p>
        
        <div class="sustainability-hero">
            <div class="hero-content">
                <h2>ফার্ম-টু-টেবল টেকসইতা</h2>
                <p>Green Basket-এর সরাসরি গ্রাহক মডেল খাদ্য অপচয় কমায়, স্থানীয় কৃষকদের সহায়তা করে এবং পরিবেশগত প্রভাব কমিয়ে তাজা পণ্য সরবরাহ করে। বাংলাদেশে যেখানে কৃষি শ্রমশক্তির ৪০% ব্যবহার করে, আমাদের এই পদ্ধতি অর্থবহ পরিবর্তন আনে।</p>
            </div>
            <div class="hero-image">
                <img src="{{ asset('https://static.vecteezy.com/system/resources/previews/051/293/787/non_2x/cartoon-farmer-vegetable-seller-holding-organic-fresh-vegetables-in-hand-vector.jpg') }}" alt="কৃষক তাজা পণ্য সরবরাহ করছেন">
            </div>
        </div>
        
        <div class="impact-grid">
            <div class="impact-card">
                <div class="impact-icon">🌱</div>
                <h3>পরিবেশের জন্য</h3>
                <ul>
                    <li><strong>৬০% কম খাদ্য অপচয়</strong> সরাসরি সরবরাহ চেইনের মাধ্যমে</li>
                    <li><strong>কার্বন নির্গমন হ্রাস</strong> মধ্যস্থতাকারীর পরিবহন বাদ দিয়ে</li>
                    <li><strong>টেকসই প্যাকেজিং</strong> বায়োডিগ্রেডেবল উপকরণ ব্যবহার করে</li>
                    <li><strong>অর্গানিক কৃষি সহায়তা</strong> ২০০+ বাংলাদেশি কৃষকের জন্য</li>
                </ul>
            </div>
            
            <div class="impact-card">
                <div class="impact-icon">👩‍🌾</div>
                <h3>কৃষকদের জন্য</h3>
                <ul>
                    <li><strong>২৫-৪০% বেশি আয়</strong> মধ্যস্থতাকারী বাদ দিয়ে</li>
                    <li><strong>ন্যায্য বাণিজ্য নীতি</strong> নিশ্চিত ন্যূনতম মূল্যের সঙ্গে</li>
                    <li><strong>প্রশিক্ষণ প্রোগ্রাম</strong> টেকসই কৃষি পদ্ধতি নিয়ে</li>
                    <li><strong>বাজার অ্যাক্সেস</strong> সারা বাংলাদেশে ক্ষুদ্র কৃষকদের জন্য</li>
                </ul>
            </div>
            
            <div class="impact-card">
                <div class="impact-icon">🏙️</div>
                <h3>গ্রাহকদের জন্য</h3>
                <ul>
                    <li><strong>তাজা পণ্য</strong> ডেলিভারির ২৪ ঘণ্টার মধ্যে সংগ্রহ করা হয়</li>
                    <li><strong>স্বাস্থ্যকর খাদ্য</strong> রাসায়নিক ব্যবহার হ্রাস করা হয়েছে</li>
                    <li><strong>স্বচ্ছ উৎস</strong> জানেন ঠিক কোথা থেকে এসেছে আপনার খাদ্য</li>
                    <li><strong>স্থানীয় অর্থনীতি সমর্থন</strong> প্রতিটি ক্রয়ের মাধ্যমে</li>
                </ul>
            </div>
        </div>
        
        <div class="bangladesh-focus">
            <h2>বাংলাদেশের প্রেক্ষাপটে টেকসইতা</h2>
            <div class="focus-content">
                <div class="focus-text">
                    <p>বাংলাদেশে যেখানে প্রচলিত সরবরাহ চেইনে গ্রাহকের কাছে পৌঁছানোর আগে ৩০% পর্যন্ত ফসল নষ্ট হয়ে যায়, আমাদের মডেল গুরুত্বপূর্ণ সমাধান প্রদান করে:</p>
                    <ul>
                        <li><strong>জলবায়ু-সহনশীল কৃষি:</strong> বাংলাদেশে বন্যা প্রবণ ও লবণাক্ত অঞ্চলের জন্য উপযুক্ত পদ্ধতি প্রচার করি</li>
                        <li><strong>জল সংরক্ষণ:</strong> কৃষকদের ড্রিপ ইরিগেশন ও জল ব্যবস্থাপনায় প্রশিক্ষণ</li>
                        <li><strong>ফসলের পরে ক্ষতি কমানো:</strong> আমাদের কোল্ড চেইন লজিস্টিকস নাশওয়ানীয় পণ্য সংরক্ষণ করে</li>
                        <li><strong>নারীর ক্ষমতায়ন:</strong> আমাদের ৩৫% অংশীদার কৃষক নারীর নেতৃত্বাধীন পরিবার</li>
                    </ul>
                    <p>সরবরাহ চেইন সংক্ষিপ্ত করে আমরা বাংলাদেশের ক্রমবর্ধমান জনসংখ্যার জন্য খাদ্য নিরাপত্তা তৈরি করতে সহায়তা করছি এবং কৃষি ঐতিহ্য রক্ষা করছি।</p>
                </div>
                <div class="focus-image">
                    <img src="{{ asset('https://www.tbsnews.net/sites/default/files/styles/big_3/public/images/2022/10/13/paddy_field.jpg') }}" alt="বাংলাদেশি কৃষক মাঠে">
                </div>
            </div>
        </div>
        
        <div class="global-perspective">
            <h2>বিশ্বব্যাপী টেকসই প্রভাব</h2>
            <p>বাংলাদেশের জন্য উপযুক্ত হলেও, আমাদের মডেল বিশ্বব্যাপী টেকসই লক্ষ্য অর্জনে অবদান রাখে:</p>
            
            <div class="sdg-grid">
                <div class="sdg-card">
                    <img src="{{ asset('https://sdg.internationalpublishers.org/wp-content/uploads/2021/04/E_SDG-goals_Goal-02.png') }}" alt="SDG 2: ক্ষুধা শূন্য">
                    <h4>ক্ষুধা শূন্য</h4>
                    <p>শহরাঞ্চলে খাদ্যপ্রবাহ উন্নত করা এবং অপচয় কমানো</p>
                </div>
                <div class="sdg-card">
                    <img src="{{ asset('https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Sustainable_Development_Goal_12ResponsibleConsumption.svg/1200px-Sustainable_Development_Goal_12ResponsibleConsumption.svg.png') }}" alt="SDG 12: দায়িত্বশীল ব্যবহার">
                    <h4>দায়িত্বশীল ব্যবহার</h4>
                    <p>টেকসই খাদ্য ব্যবস্থা ও উৎপাদন প্রচার</p>
                </div>
                <div class="sdg-card">
                    <img src="{{ asset('https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Sustainable_Development_Goal_13Climate.svg/1200px-Sustainable_Development_Goal_13Climate.svg.png') }}" alt="SDG 13: জলবায়ু কর্ম">
                    <h4>জলবায়ু কর্ম</h4>
                    <p>কৃষির কার্বন নির্গমন হ্রাস</p>
                </div>
                <div class="sdg-card">
                    <img src="{{ asset('https://www.un.org/esa/ffd/ffddialogue/images/E_SDG%20goals_icons-individual-rgb-15.png') }}" alt="SDG 15: স্থল জীববৈচিত্র্য">
                    <h4>স্থল জীববৈচিত্র্য</h4>
                    <p>টেকসই ভূমি ব্যবহারের সমর্থন</p>
                </div>
            </div>
        </div>
        
        <div class="our-commitments">
            <h2>আমাদের চলমান অঙ্গীকার</h2>
            <div class="commitment-cards">
                <div class="commitment-card">
                    <h3>২০২৫ সালের মধ্যে</h3>
                    <ul>
                        <li>১০০% প্যাকেজিংকে বায়োডিগ্রেডেবল উপকরণে রূপান্তর</li>
                        <li>সৌরশক্তিচালিত কোল্ড স্টোরেজ সুবিধা সম্প্রসারণ</li>
                        <li>১,০০০ কৃষককে জলবায়ু-সচেতন প্রযুক্তিতে প্রশিক্ষণ</li>
                    </ul>
                </div>
                <div class="commitment-card">
                    <h3>২০৩০ সালের মধ্যে</h3>
                    <ul>
                        <li>কার্বন-নিরপেক্ষ ডেলিভারি ফ্লিট অর্জন</li>
                        <li>কৃষক প্রোগ্রামে ৫০% নারী অংশগ্রহণ</li>
                        <li>আমাদের সরবরাহ চেইনে খাদ্য অপচয় <৫% এ হ্রাস</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="join-movement">
            <h3>আমাদের টেকসই খাদ্য আন্দোলনে যোগ দিন</h3>
            <p>প্রত্যেক ক্রয় বাংলাদেশের কৃষির সবুজ ভবিষ্যৎকে সমর্থন করে।</p>
            <div class="action-buttons">
                <a href="{{ route('shop') }}" class="cta-button">টেকসইভাবে কেনাকাটা করুন</a>
                <a href="{{ route('farmers') }}" class="cta-button outline">আমাদের কৃষকদের দেখুন</a>
            </div>
        </div>
    </div>
</section>
@endsection
