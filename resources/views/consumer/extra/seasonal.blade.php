@extends('index')
@push('style')
<title>মৌসুমী পণ্য | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/seasonal.css') }}">
@endpush

@section('main-content')
<section class="seasonal-produce">
    <div class="container">
        <h1 class="seasonal-title">বাংলাদেশের মৌসুমী ফসল</h1>
        <p class="seasonal-subtitle">আমাদের চাষিদের মাঠ থেকে আপনার টেবিলে তাজা সরাসরি</p>
        
        <div class="seasonal-intro">
            <p>বাংলাদেশের ছয়টি ঋতু (<em>রীতি</em>) প্রত্যেকটি আলাদা ফসল দেয়। মৌসুমী পণ্য বেছে নিলে আপনি পাবেন:</p>
            <ul>
                <li>সর্বোচ্চ তাজা ও পুষ্টিগুণ</li>
                <li>সস্তা দাম (অফ-সিজনের তুলনায় ২০-৪০% কম)</li>
                <li>প্রচলিত কৃষি চক্রের সমর্থন</li>
            </ul>
        </div>
        
        <div class="seasonal-calendar">
            <!-- Summer (Grishmo) -->
            <div class="season-card summer">
                <div class="season-header">
                    <h2>গ্রীষ্ম (April - June)</h2>
                    <div class="season-icon">☀️</div>
                </div>
                <div class="season-produce">
                    <h3>এই মৌসুমে তাজা:</h3>
                    <div class="produce-grid">
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1689899148821-71705bd9ab56?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0') }}" alt="Mango">
                            <p>আম</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://plus.unsplash.com/premium_photo-1722961405963-68d07a1fb633?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0') }}" alt="Lychee">
                            <p>লিচু</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1620685581318-91ce6f1b76ca?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0') }}" alt="Jackfruit">
                            <p>কাঁঠাল</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1627981906592-ae3f0ee9486d?q=80&w=694&auto=format&fit=crop&ixlib=rb-4.1.0') }}" alt="Cucumber">
                            <p>শসা</p>
                        </div>
                    </div>
                </div>
                <div class="season-tip">
                    <strong>পরামর্শ:</strong> গ্রীষ্মের ফল খেতে স্বাভাবিকভাবে বাংলাদেশের গরমের সাথে লড়াই করুন।
                </div>
            </div>

            <!-- Monsoon (Borsha) -->
            <div class="season-card monsoon">
                <div class="season-header">
                    <h2>বর্ষা (July - August)</h2>
                    <div class="season-icon">🌧️</div>
                </div>
                <div class="season-produce">
                    <h3>এই মৌসুমে তাজা:</h3>
                    <div class="produce-grid">
                        <div class="produce-item">
                            <img src="{{ asset('https://live.staticflickr.com/3618/3284587387_98f5ec4f3e_b.jpg') }}" alt="Boroi">
                            <p>বরই</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://i0.wp.com/virginiawillis.com/wp-content/uploads/2014/08/DSC_0587.jpg?ssl=1') }}" alt="Okra">
                            <p>ঢেঁড়স</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://agrobengal.com/wp-content/uploads/2019/01/Bottle_gourd_of_Bangladesh-scaled.jpg') }}" alt="Bottle Gourd">
                            <p>লাউ</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://www.streetsmartkitchen.com/wp-content/uploads/Thai-Stir-Fried-Water-Spinach-Recipe-1.jpg') }}" alt="Water Spinach">
                            <p>কলমি শাক</p>
                        </div>
                    </div>
                </div>
                <div class="season-tip">
                    <strong>পরামর্শ:</strong> বর্ষায় বন্যা-প্রতিরোধী শাকসবজি যেমন কলমি শাক ভালোভাবে জন্মায়।
                </div>
            </div>

            <!-- Autumn (Sharat) -->
            <div class="season-card autumn">
                <div class="season-header">
                    <h2>শরৎ (September - October)</h2>
                    <div class="season-icon">🍂</div>
                </div>
                <div class="season-produce">
                    <h3>এই মৌসুমে তাজা:</h3>
                    <div class="produce-grid">
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1723475158232-819e29803f4d?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0') }}" alt="Aman Rice">
                            <p>আমন ধান</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1739903760931-bed27f3fe9b1?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0') }}" alt="Bitter Gourd">
                            <p>করলা</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1635318840697-1d29b5866dff?q=80&w=1075&auto=format&fit=crop&ixlib=rb-4.1.0') }}" alt="Arum">
                            <p>কচু</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1536511132770-e5058c7e8c46?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0') }}" alt="Guava">
                            <p>পেয়ারা</p>
                        </div>
                    </div>
                </div>
                <div class="season-tip">
                    <strong>পরামর্শ:</strong> আমন ধানের ফসল শুরু হয় - নতুন "নয়নমণি" বা "BRRI ধান ৪৯" জাত দেখুন।
                </div>
            </div>

            <!-- Hemonto, Winter, Spring একইভাবে অনুবাদ করা হবে -->
        </div>

        <div class="seasonal-benefits">
            <h2>বাংলাদেশে মৌসুমী খাবার কেন?</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">👩‍🌾</div>
                    <h3>স্থানীয় কৃষকদের সমর্থন</h3>
                    <p>প্রচলিত ফসল চক্রের সাথে সামঞ্জস্য রেখে, কৃষকদের জন্য ন্যায্য দাম নিশ্চিত করে</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">💵</div>
                    <h3>২০-৪০% সস্তা</h3>
                    <p>প্রচুর ফসলের কারণে অফ-সিজনের তুলনায় কম দাম</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🌱</div>
                    <h3>আরও পুষ্টিকর</h3>
                    <p>মৌসুমী পণ্যে ভিটামিন বেশি থাকে এবং স্বাদ ভালো হয়</p>
                </div>
            </div>
        </div>

        <div class="seasonal-recipes">
            <h2>মৌসুমী রেসিপি আইডিয়াস</h2>
            <div class="recipe-tabs">
                <button class="tab-btn active" data-season="summer">গ্রীষ্ম</button>
                <button class="tab-btn" data-season="monsoon">বর্ষা</button>
                <button class="tab-btn" data-season="winter">শীত</button>
            </div>

            <div class="recipe-content active" id="summer-recipes">
                <div class="recipe-card">
                    <h3>আম দই</h3>
                    <p>পাকা আম দই এবং সামান্য মধু দিয়ে একটি ঠান্ডা গ্রীষ্মকালীন ডেজার্ট তৈরি করুন।</p>
                    <a href="{{ route('recipes') }}" class="recipe-link">রেসিপি দেখুন →</a>
                </div>
                <div class="recipe-card">
                    <h3>কাঁঠালের ঝোল</h3>
                    <p>কাঁচা কাঁঠাল হলুদ, মরিচ এবং সরিষার তেলে রান্না - একটি গ্রীষ্মকালীন ভেগান স্ট্যাপল।</p>
                    <a href="{{ route('recipes') }}" class="recipe-link">রেসিপি দেখুন →</a>
                </div>
            </div>
        </div>

        <div class="seasonal-cta">
            <h3>মৌসুমী তাজা ডেলিভারি পান</h3>
            <p>প্রতিটি মৌসুমের সেরা ফসল আমাদের পার্টনার ফার্ম থেকে পৌঁছালে আমরা আপনাকে জানাব।</p>
            <div class="cta-buttons">
                <a href="{{ route('shop') }}" class="cta-button">মৌসুমী শপ করুন</a>
                <a href="#" class="cta-button outline">সিজন সতর্কতা পান</a>
            </div>
        </div>
    </div>
</section>

<script src="js/hridoy/seasonal.js"></script>
@endsection
