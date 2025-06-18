<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Green Basket | Farm to Table</title>
    <link rel="stylesheet" href="css/hridoy/basic.css">
    <link rel="stylesheet" href="css/hridoy/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }}">Shop</a>
                    <a href="#">Farmers</a>
                    <a href="/recipes">Recipes</a>
                    <a href="{{ route("about") }}" class="active">About</a>
                    <div class="search-container">
                        <span class="search-icon">🔍</span>
                        <input type="text" class="search-input" placeholder="Search products...">
                    </div>
                    <a href="#" class="cta-button">Order Now</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
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
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Mamun" class="team-photo">
                <div class="team-info">
                    <h3>মো. মামুন অর রশিদ হৃদয়</h3>
                    <p>প্রধান সমন্বয়কারী</p>
                    <p>যিনি প্রযুক্তি ও কৃষকের মধ্যে সেতুবন্ধন গড়তে কাজ করছেন</p>
                </div>
            </div>
            
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Dip" class="team-photo">
                <div class="team-info">
                    <h3>দীপ সরকার</h3>
                    <p>কমিউনিটি লিয়াজোঁ</p>
                    <p>গ্রামীণ উদ্যোক্তা উন্নয়নে বিশেষ ভূমিকা রাখছেন</p>
                </div>
            </div>
            
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1573497620053-ea5300f94f21?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Shakib" class="team-photo">
                <div class="team-info">
                    <h3>সাকিব খান</h3>
                    <p>বাজার বিশ্লেষক</p>
                    <p>দাম নির্ধারণ ও সরবরাহ চেইন বিশ্লেষণে দক্ষ</p>
                </div>
            </div>
            
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1589156191108-c762ff4b96ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Moshiur" class="team-photo">
                <div class="team-info">
                    <h3>মশিউর রহমান</h3>
                    <p>প্রযুক্তি কর্মকর্তা</p>
                    <p>ডিজিটাল প্ল্যাটফর্ম ব্যবস্থাপনায় নিয়োজিত</p>
                </div>
            </div>
            
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Sumaiya" class="team-photo">
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

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>Green Basket</h3>
                    <p style="color: rgba(255,255,255,0.7); font-size: 0.9rem; margin-top: 1rem;">Farm fresh groceries,
                        delivered simple.</p>
                </div>

                <div class="footer-column">
                    <h3>Shop</h3>
                    <ul>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Dairy</a></li>
                        <li><a href="#">Meat</a></li>
                        <li><a href="#">Seasonal</a></li>
                        <li><a href="#">All Products</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Our Farmers</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Help</h3>
                    <ul>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Delivery Info</a></li>
                        <li><a href="#">Returns</a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2023 Green Basket. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>