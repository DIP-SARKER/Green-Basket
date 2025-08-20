@extends('index')
@push('style')
<title>রেসিপি | গ্রীন বাস্কেট | খামার থেকে টেবিল</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/recipes.css') }}">
@endpush

@section('main-content')
<main class="container">
    <section class="section">
        <div class="recipe-hero">
            <div class="recipe-image">
                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                    alt="ভাজা সবজির মিশ্রণ">
            </div>
            <div class="recipe-info">
                <h1 class="recipe-title">কৃষক বাজারের ভাজা সবজির মিশ্রণ</h1>
                <div class="recipe-meta">
                    <div class="meta-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>৪৫ মিনিট</span>
                    </div>
                    <div class="meta-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                        <span>মধ্যম</span>
                    </div>
                    <div class="meta-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>৪ জনের জন্য</span>
                    </div>
                </div>
                <div class="recipe-tags">
                    <span class="tag">শাকাহারী</span>
                    <span class="tag">মৌসুমী</span>
                    <span class="tag">স্বাস্থ্যকর</span>
                    <span class="tag">গ্লুটেন-মুক্ত</span>
                </div>
                <p class="recipe-description">
                    এই রঙিন ভাজা সবজির মিশ্রণ কৃষক বাজারের সেরা সবজি প্রদর্শন করে। মৌসুমী সবজিগুলোকে সুগন্ধি হার্বস এবং অলিভ অয়েলের সাথে মিশিয়ে ভাজা হয়। ভাজার সময় সবজির প্রাকৃতিক মিষ্টি বৃদ্ধি পায়, যা খাবারটিকে পুষ্টিকর এবং স্বাদে সমৃদ্ধ করে তোলে।
                </p>
                <a href="#" class="cta-button">উপকরণ অর্ডার করুন</a>
            </div>
        </div>

        <div class="recipe-content">
            <div class="ingredients-card">
                <h2 class="card-title">উপকরণ</h2>
                <ul class="ingredient-list">
                    <li class="ingredient-item">
                        <span class="ingredient-quantity">২ কাপ</span>
                        <span class="ingredient-name">বাটারনাট স্কোয়াশ, কিউব করা</span>
                    </li>
                    <li class="ingredient-item">
                        <span class="ingredient-quantity">১ কাপ</span>
                        <span class="ingredient-name">ব্রাসেলস স্প্রাউটস, অর্ধেক কাটা</span>
                    </li>
                    <li class="ingredient-item">
                        <span class="ingredient-quantity">১ কাপ</span>
                        <span class="ingredient-name">গাজর, স্লাইস করা</span>
                    </li>
                    <li class="ingredient-item">
                        <span class="ingredient-quantity">১</span>
                        <span class="ingredient-name">লাল বেল পেপার, diced</span>
                    </li>
                    <li class="ingredient-item">
                        <span class="ingredient-quantity">১</span>
                        <span class="ingredient-name">লাল পেঁয়াজ, স্লাইস করা</span>
                    </li>
                    <li class="ingredient-item">
                        <span class="ingredient-quantity">৩ চামচ</span>
                        <span class="ingredient-name">এক্সট্রা ভার্জিন অলিভ অয়েল</span>
                    </li>
                    <li class="ingredient-item">
                        <span class="ingredient-quantity">২ চা চামচ</span>
                        <span class="ingredient-name">তাজা রোজমেরি, কাটা</span>
                    </li>
                    <li class="ingredient-item">
                        <span class="ingredient-quantity">১ চা চামচ</span>
                        <span class="ingredient-name">সী সল্ট</span>
                    </li>
                    <li class="ingredient-item">
                        <span class="ingredient-quantity">½ চা চামচ</span>
                        <span class="ingredient-name">কালো মরিচ</span>
                    </li>
                    <li class="ingredient-item">
                        <span class="ingredient-quantity">২ চামচ</span>
                        <span class="ingredient-name">ব্যালসামিক গ্লেজ (ঐচ্ছিক)</span>
                    </li>
                </ul>
            </div>

            <div class="instructions-card">
                <h2 class="card-title">প্রস্তুত প্রণালী</h2>
                <div class="instruction-step">
                    <p>ওভেনকে ৪০০°F (২০০°C) এ প্রিহিট করুন। একটি বড় বেকিং শিটে পার্চমেন্ট পেপার বিছান বা হালকা তেল লাগান।</p>
                </div>
                <div class="instruction-step">
                    <p>সব প্রস্তুত সবজিগুলো একটি বড় বাটিতে মেশান। অলিভ অয়েল ছড়িয়ে দিন এবং রোজমেরি, লবণ, মরিচ ছিটিয়ে দিন। সবজিগুলো সমভাবে কোট করতে ভালোভাবে নাড়ুন।</p>
                </div>
                <div class="instruction-step">
                    <p>সবজিগুলো এক স্তরে বেকিং শিটে ছড়িয়ে দিন। যেন যথেষ্ট স্থান থাকে, যাতে ভালোভাবে ভাজা যায়।</p>
                </div>
                <div class="instruction-step">
                    <p>পূর্বতাপিত ওভেনে ২৫-৩০ মিনিট ভাজুন, মাঝপথে নাড়ুন, যতক্ষণ না সবজিগুলো নরম এবং প্রান্তে ক্যারামেলাইজড হয়।</p>
                </div>
                <div class="instruction-step">
                    <p>ওভেন থেকে বের করে সার্ভিং ডিশে স্থানান্তর করুন। প্রয়োজনমত ব্যালসামিক গ্লেজ ছড়িয়ে দিন। গরম অবস্থায় পার্শ্ব ডিশ হিসেবে পরিবেশন করুন বা কুইনোয়ার উপর পরিবেশন করুন।</p>
                </div>
            </div>
        </div>

        <div class="notes-section">
            <h2 class="card-title">শেফের নোট</h2>
            <p>এই রেসিপি মৌসুমী সবজির উপর ভিত্তি করে সহজেই পরিবর্তনযোগ্য। বসন্তে, asparagus এবং radish ব্যবহার করুন। গ্রীষ্মে zucchini ও eggplant ভালো কাজ করে। garlic বা thyme, oregano এর মত হার্বস যোগ করতে পারেন।</p>
            <p>অতিরিক্ত প্রোটিনের জন্য, কিছু chickpeas ভাজার আগে যোগ করুন। তারা সুস্বাদু ক্রিস্পি হবে!</p>
        </div>

        <div class="related-recipes">
            <h2 class="section-title">আরও মৌসুমী রেসিপি</h2>
            <div class="related-grid">
                <a href="#" class="related-card">
                    <div class="related-image">
                        <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="কৃষক বাজারের রঙিন সালাদ">
                    </div>
                    <div class="related-content">
                        <h3 class="related-title">কৃষক বাজারের রঙিন সালাদ</h3>
                        <div class="related-meta">২৫ মিনিট · সহজ</div>
                    </div>
                </a>
                <a href="#" class="related-card">
                    <div class="related-image">
                        <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="সবজি স্যুপ">
                    </div>
                    <div class="related-content">
                        <h3 class="related-title">মৌসুমী সবজি স্যুপ</h3>
                        <div class="related-meta">৪০ মিনিট · মধ্যম</div>
                    </div>
                </a>
                <a href="#" class="related-card">
                    <div class="related-image">
                        <img src="https://images.unsplash.com/photo-1547592180-85f173990554?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="সবজি স্টার ফ্রাই">
                    </div>
                    <div class="related-content">
                        <h3 class="related-title">তাজা সবজি স্টার ফ্রাই</h3>
                        <div class="related-meta">২০ মিনিট · সহজ</div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
