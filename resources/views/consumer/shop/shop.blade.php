@extends('index')
@push('style')
    <title>দোকান | গ্রিন বাস্কেট</title>
    <link rel="stylesheet" href="{{ asset('css/hridoy/shop.css') }}">
    <style>
        nav svg {
            display: none;
        }
    </style>
@endpush

@section('main-content')
    <main class="container">

        <!-- Category Filter -->
        <section class="category-banner">
            <div class="category-filter">
                <a href="{{ route('shop') }}" class="filter-btn {{ !isset($category) ? 'active' : '' }}">
                    <div class="category-card">
                        <h3>সব</h3>
                    </div>
                </a>

                @foreach ($categories as $cat)
                    <a href="{{ route('shop.category', $cat->id) }}"
                        class="filter-btn {{ (isset($category) && $category->id == $cat->id) ? 'active' : '' }}">
                        <div class="category-card">
                            <h3>{{ $cat->name }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>

            <form action="{{ route('shop') }}" method="GET" class="search-form">
                <input type="text" name="q" value="{{ request('q') }}" placeholder="পণ্য বা কৃষক খুঁজুন...">
                <button type="submit">খুঁজুন</button>
            </form>
        </section>

        <!-- Products Grid -->
        <div class="products-grid">
            @forelse ($products as $product)
                <a href="{{ route('product.show', $product->id) }}" class="product-card-link">
                    <div class="product-card">
                        <div class="product-image"
                            style="background-image: url('{{ $product->image_url ?? asset('default-fruit.jpg') }}');">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <p class="product-farmer">{{ $product->seller->name ?? 'স্থানীয় কৃষক' }}</p>
                            <p class="product-price">৳{{ $product->price }}</p>
                            <div class="product-meta">
                                <span class="product-organic">তাজা ও স্থানীয়</span>
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="add-to-cart-btn">কার্টে যোগ করুন</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <p>এই মুহূর্তে কোনো পণ্য পাওয়া যাচ্ছে না।</p>
            @endforelse
        </div>

        <div class="pagination-wrapper">
            {{ $products->links() }}
        </div>

        <!-- Featured Sellers -->
        <section class="section">
            <h2 class="section-title">আমাদের কৃষকদের সাথে পরিচিত হোন</h2>
            <div class="sellers-grid">
                <!-- Seller 1 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">সানি ভ্যালি অরচার্ড</h3>
                    <p class="seller-specialty">অর্গানিক ফল</p>
                    <a href="#" class="view-farm">খামার দেখুন</a>
                </div>

                <!-- Seller 2 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">গ্রিন থাম্ব ফার্ম</h3>
                    <p class="seller-specialty">মৌসুমি সবজি</p>
                    <a href="#" class="view-farm">খামার দেখুন</a>
                </div>

                <!-- Seller 3 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1516467508483-a7212febe31a?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">প্যাস্টার প্রাইম র‍্যাঞ্চ</h3>
                    <p class="seller-specialty">ঘাস খাওয়া মাংস</p>
                    <a href="#" class="view-farm">খামার দেখুন</a>
                </div>

                <!-- Seller 4 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1605007493699-af65834f8a05?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">বেরি বেস্ট ফার্মস</h3>
                    <p class="seller-specialty">বেরি ও তরমুজ</p>
                    <a href="#" class="view-farm">খামার দেখুন</a>
                </div>
            </div>
        </section>
    </main>
@endsection
