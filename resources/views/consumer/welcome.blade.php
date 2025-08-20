@extends('index')
@push('style')
<title>গ্রিন বাস্কেট | খামার থেকে টেবিলে</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/styles_for_index.css') }}">
@endpush

@section('main-content')

  <!-- Hero Section -->
  <section class="hero">
      <div class="container">
          <div class="hero-content">
              <h1>খামার থেকে তাজা, সহজ ডেলিভারি</h1>
              <p>সরাসরি স্থানীয় কৃষকের কাছ থেকে আপনার টেবিলে। কোনো মধ্যস্বত্বভোগী নেই, কেবল তাজা সবজি, দুগ্ধজাত পণ্য ও মাংস ন্যায্য দামে।</p>
              <a href="{{ route('shop') }}" class="cta-button">মৌসুমি পণ্য কিনুন</a>
          </div>
      </div>
  </section>

  <!-- Categories -->
  <section class="categories">
      <div class="container">
          <div class="section-title">
              <h2>আমাদের অফার</h2>
              <p>মৌসুমি, টেকসই পণ্য বিশ্বস্ত খামার থেকে</p>
          </div>

          <div class="category-grid">
              <!-- Vegetables -->
              <div class="category-card">
                  <div class="category-img">
                      <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                          alt="তাজা সবজি">
                  </div>
                  <div class="category-info">
                      <h3>মৌসুমি সবজি</h3>
                      <p>তাজা অবস্থায় সংগ্রহ করা, ২৪ ঘন্টার মধ্যে সরবরাহ</p>
                      <a href="{{ route('shop.category', ['id' => 1]) }}" class="cta-button"
                          style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">দেখুন</a>
                  </div>
              </div>

              <!-- Fresh Fruits -->
              <div class="category-card">
                  <div class="category-img">
                      <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                          alt="তাজা ফল">
                  </div>
                  <div class="category-info">
                      <h3>তাজা ফল</h3>
                      <p>ফরমালিন ও ক্যালসিয়াম কার্বাইড মুক্ত ফল</p>
                      <a href="{{ route('shop.category', ['id' => 2]) }}" class="cta-button"
                          style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">দেখুন</a>
                  </div>
              </div>

              <!-- Meat -->
              <div class="category-card">
                  <div class="category-img">
                      <img src="https://images.unsplash.com/photo-1666013942642-b7b54ecafd7d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                          alt="তাজা মাংস">
                  </div>
                  <div class="category-info">
                      <h3>নৈতিকভাবে উৎপাদিত মাংস</h3>
                      <p>প্রাকৃতিক পরিবেশে লালিত গরু, মুরগি ও শূকরের মাংস</p>
                      <a href="{{ route('shop.category', ['id' => 3]) }}" class="cta-button"
                          style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">দেখুন</a>
                  </div>
              </div>

              <!-- Fish -->
              <div class="category-card">
                  <div class="category-img">
                      <img src="https://images.unsplash.com/photo-1615141982883-c7ad0e69fd62?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                          alt="তাজা মাছ">
                  </div>
                  <div class="category-info">
                      <h3>মিঠা পানির মাছ</h3>
                      <p>স্থানীয় নদী ও পুকুর থেকে সংগ্রহিত, রাসায়নিক মুক্ত</p>
                      <a href="{{ route('shop.category', ['id' => 4]) }}" class="cta-button"
                          style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">দেখুন</a>
                  </div>
              </div>

              <!-- Bakery -->
              <div class="category-card">
                  <div class="category-img">
                      <img src="https://images.unsplash.com/photo-1644458366026-1ac2e1aaf0a6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                          alt="বেকারি পণ্য">
                  </div>
                  <div class="category-info">
                      <h3>বেকারি পণ্য</h3>
                      <p>তাজা রুটি, স্বাস্থ্যকর পাউরুটি ও প্রতিদিন বেক করা পেস্ট্রি</p>
                      <a href="{{ route('shop.category', ['id' => 8]) }}" class="cta-button"
                          style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">দেখুন</a>
                  </div>
              </div>

              <!-- Dairy -->
              <div class="category-card">
                  <div class="category-img">
                      <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                          alt="দুগ্ধজাত পণ্য">
                  </div>
                  <div class="category-info">
                      <h3>খামারের দুগ্ধজাত পণ্য</h3>
                      <p>ঘাস খাওয়া গরুর দুধ, দেশি পনির ও তাজা দই</p>
                      <a href="{{ route('shop.category', ['id' => 5]) }}" class="cta-button"
                          style="display: inline-block; padding: 0.5rem 1.25rem; font-size: 0.9rem;">দেখুন</a>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Benefits -->
  <section class="benefits">
      <div class="container">
          <div class="section-title">
              <h2>কেন গ্রিন বাস্কেট?</h2>
              <p>আপনার জন্য ভালো, কৃষকের জন্য ভালো, পৃথিবীর জন্য ভালো</p>
          </div>

          <div class="benefits-grid">
              <div class="benefit-card">
                  <div class="benefit-icon">🥬</div>
                  <h3>তাজা খামারের পণ্য</h3>
                  <p>পূর্ণ পাকা অবস্থায় সংগ্রহ করা, সুপারশপের চেয়েও দ্রুত ডেলিভারি</p>
              </div>

              <div class="benefit-card">
                  <div class="benefit-icon">👩‍🌾</div>
                  <h3>সরাসরি কৃষকের কাছ থেকে</h3>
                  <p>আপনার প্রদেয় টাকার ৮৫% সরাসরি কৃষকের হাতে পৌঁছে যায়</p>
              </div>

              <div class="benefit-card">
                  <div class="benefit-icon">🌱</div>
                  <h3>টেকসই</h3>
                  <p>পৃথিবী রক্ষায় সহায়ক কৃষি পদ্ধতি সমর্থন করা হয়</p>
              </div>

              <div class="benefit-card">
                  <div class="benefit-icon">🚚</div>
                  <h3>সহজ ও সুবিধাজনক</h3>
                  <p>আপনার সুবিধাজনক সময়ে ঘরে পৌঁছে দেওয়া হয়</p>
              </div>
          </div>
      </div>
  </section>
@endsection
