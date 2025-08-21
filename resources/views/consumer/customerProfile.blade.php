@extends('index')
@push('style')
    <title>My Profile | Green Basket | Farm to Table</title>
    <style>
        /* Base Styles */
        .profile-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        /* Header Section */
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .profile-title {
            font-size: 28px;
            color: #2e7d32;
            margin-bottom: 10px;
        }

        .welcome-message {
            font-size: 20px;
            color: #555;
            margin-bottom: 15px;
        }

        .welcome-message span {
            color: #2e7d32;
            font-weight: 600;
        }

        /* Profile Card */
        .profile-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 30px;
        }

        .profile-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .info-item {
            display: flex;
            align-items: center;
        }

        .info-label {
            font-weight: 600;
            color: #2e7d32;
            min-width: 120px;
        }

        .info-value {
            color: #555;
        }

        /* Navigation Tabs */
        .profile-tabs {
            display: flex;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .tab {
            padding: 12px 20px;
            cursor: pointer;
            font-weight: 500;
            color: #666;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .tab.active {
            color: #2e7d32;
            border-bottom: 3px solid #2e7d32;
        }

        .tab:hover {
            color: #2e7d32;
        }

        /* Tab Content */
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Orders Section Styling */
        .section-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: #2e7d32;
        }

        .orders-grid {
            display: grid;
            gap: 1.5rem;
        }

        .order-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            transition: transform 0.2s ease;
        }

        .order-card:hover {
            transform: translateY(-2px);
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }

        .order-meta {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .order-number {
            font-size: 1.1rem;
            color: #333;
        }

        .order-date {
            font-size: 0.9rem;
            color: #666;
        }

        .order-status {
            padding: 0.25rem 0.75rem;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .status-pending {
            background-color: #fff3e0;
            color: #e65100;
        }

        .status-completed {
            background-color: #e8f5e9;
            color: #2e7d32;
        }

        .status-processing {
            background-color: #e3f2fd;
            color: #1565c0;
        }

        .order-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }

        .order-summary {
            display: flex;
            gap: 1rem;
        }

        .order-total,
        .order-items {
            margin: 0;
            font-size: 0.95rem;
            color: #444;
        }

        .order-actions {
            flex-shrink: 0;
        }

        .order-details-btn {
            display: inline-block;
            background: #2e7d32;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: background 0.2s ease;
        }

        .order-details-btn:hover {
            background: #1b5e20;
        }

        .no-orders {
            text-align: center;
            padding: 2rem;
        }

        .empty-message {
            color: #666;
            margin-bottom: 1.5rem;
        }

        /* Cart Section Styling - Matches Order Section */
        .cart-grid {
            display: grid;
            gap: 1.5rem;
        }

        .cart-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            transition: transform 0.2s ease;
        }

        .cart-card:hover {
            transform: translateY(-2px);
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }

        .cart-product-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .cart-product-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
        }

        .cart-product-name {
            font-size: 1rem;
            color: #333;
            margin-bottom: 0.25rem;
        }

        .cart-product-price {
            font-size: 0.9rem;
            color: #2e7d32;
            font-weight: 500;
        }

        .cart-quantity {
            padding: 0.25rem 0.75rem;
            border-radius: 4px;
            background: #f5f5f5;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .cart-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }

        .cart-subtotal {
            margin: 0;
            font-size: 0.95rem;
            color: #444;
            font-weight: 500;
        }

        .cart-actions {
            display: flex;
            gap: 0.75rem;
        }

        .quantity-form {
            display: flex;
            gap: 0.5rem;
        }

        .quantity-input {
            width: 50px;
            padding: 0.25rem;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .update-btn,
        .remove-btn {
            padding: 0.5rem 0.75rem;
            border: none;
            border-radius: 4px;
            font-size: 0.85rem;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .update-btn {
            background: #e3f2fd;
            color: #1565c0;
        }

        .update-btn:hover {
            background: #bbdefb;
        }

        .remove-btn {
            background: #ffebee;
            color: #c62828;
        }

        .remove-btn:hover {
            background: #ffcdd2;
        }

        /* Remove Button */
        .btn-remove {
            background: #e74c3c;
            color: #fff;
            padding: 5px 10px;
            border-radius: 3px;
            text-decoration: none;
            font-size: 13px;
        }

        .btn-remove:hover {
            background: #c0392b;
        }

        .cart-total {
            margin-top: 2rem;
            padding: 1.5rem;
            background: #f5f5f5;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .checkout-btn {
            padding: 0.75rem 1.5rem;
            background: #2e7d32;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: 500;
            text-decoration: none;
            transition: background 0.2s ease;
        }

        .checkout-btn:hover {
            background: #1b5e20;
        }

        .empty-cart {
            text-align: center;
            padding: 2rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .cart-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .cart-body {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .cart-actions {
                width: 100%;
                justify-content: space-between;
            }

            .cart-total {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .order-header {
                flex-direction: column;
                gap: 0.75rem;
            }

            .order-body {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .order-summary {
                width: 100%;
                justify-content: space-between;
            }

            .order-actions {
                width: 100%;
            }

            .order-details-btn {
                display: block;
                text-align: center;
            }
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
            text-decoration: none;
        }

        .btn-primary {
            background: #2e7d32;
            color: white;
            border: 1px solid #2e7d32;
        }

        .btn-primary:hover {
            background: #1b5e20;
        }

        .btn-outline {
            background: white;
            color: #2e7d32;
            border: 1px solid #2e7d32;
        }

        .btn-outline:hover {
            background: #f1f8e9;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .profile-container {
                padding: 15px;
            }

            .profile-title {
                font-size: 24px;
            }

            .welcome-message {
                font-size: 18px;
            }

            .profile-tabs {
                overflow-x: auto;
                white-space: nowrap;
                padding-bottom: 5px;
            }

            .tab {
                padding: 10px 15px;
                font-size: 14px;
            }

            .order-header {
                flex-direction: column;
                gap: 10px;
            }

            .action-buttons {
                flex-direction: column;
                gap: 10px;
            }

            .btn {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .profile-info {
                gap: 10px;
            }

            .info-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .info-label {
                min-width: auto;
                margin-bottom: 5px;
            }
        }
    </style>
@endpush

@section('main-content')
    <div class="profile-container">
        <div class="profile-header">
            <h1 class="profile-title">আমার প্রোফাইল</h1>
            <p class="welcome-message">ফিরে আসার জন্য স্বাগতম, <span>{{ $customer->name }}</span>!</p>
        </div>

        @if (Auth::guard('customer')->check())
            <div class="profile-tabs">
                <div class="tab active" onclick="switchTab('overview')">ওভারভিউ</div>
                <div class="tab" onclick="switchTab('orders')">আমার অর্ডারসমূহ</div>
                <div class="tab" onclick="switchTab('carts')">আমার কার্ট</div>
                <div class="tab" onclick="switchTab('settings')">সেটিংস</div>
            </div>

            <!-- Overview Tab -->
            <div id="overview" class="tab-content active">
                <div class="profile-card">
                    <div class="profile-info">
                        <div class="info-item">
                            <span class="info-label">পূর্ণ নাম:</span>
                            <span class="info-value">{{ $customer->name }}</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">ইমেইল:</span>
                            <span class="info-value">{{ $customer->email }}</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">ফোন:</span>
                            <span class="info-value">{{ $customer->phone ?? 'প্রদত্ত নয়' }}</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">ঠিকানা:</span>
                            <span class="info-value">{{ $customer->address ?? 'প্রদত্ত নয়' }}</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">সদস্য হয়েছেন:</span>
                            <span class="info-value">{{ $customer->created_at->format('M d, Y') }}</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">লয়ালটি পয়েন্ট:</span>
                            <span class="info-value">{{ $customer->loyaltyPoints()->sum('points') }}</span>
                        </div>
                    </div>
                </div>

                <div class="action-buttons">
                    <a href="" class="btn btn-outline">প্রোফাইল সম্পাদনা করুন</a>
                    <form action="{{ route('customer_logout') }}" method="POST" style="width: 100%;">
                        @csrf
                        <button type="submit" class="btn btn-primary">লগআউট</button>
                    </form>
                </div>
            </div>

            <!-- Orders Tab -->
            <div id="orders" class="tab-content">
                <h3 class="section-title">সাম্প্রতিক অর্ডারসমূহ</h3>

                @if ($orders->isNotEmpty())
                    <div class="orders-grid">
                        @foreach ($orders as $order)
                            <div class="order-card">
                                <div class="order-header">
                                    <div class="order-meta">
                                        <strong class="order-number">অর্ডার #{{ $order->id }}</strong>
                                        <p class="order-date">{{ $order->created_at->format('M d, Y') }}</p>
                                    </div>
                                    <div class="order-status-container">
                                        <span class="order-status status-{{ $order->status }}">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </div>
                                </div>

                                <div class="order-body">
                                    <div class="order-summary">
                                        <p class="order-total">মোট: ৳{{ number_format($order->total_price, 2) }}</p>
                                        <p class="order-items">{{ $order->orderItems->count() }} টি আইটেম</p>
                                    </div>

                                    <div class="order-actions">
                                        <a href="{{ route('orders.show', $order->id) }}" class="order-details-btn">
                                            বিস্তারিত দেখুন
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="no-orders">
                        <p class="empty-message">আপনি এখনও কোনো অর্ডার করেননি।</p>
                        <a href="{{ route('shop') }}" class="btn btn-primary">শপিং শুরু করুন</a>
                    </div>
                @endif
            </div>

            <!-- Carts Tab -->
            <div id="carts" class="tab-content">
                <h3 class="section-title">আপনার কার্ট</h3>

                @if ($cartItems->isNotEmpty())
                    <div class="cart-grid">
                        @foreach ($cartItems as $item)
                            <div class="cart-card">
                                <div class="cart-header">
                                    <div class="cart-product-info">
                                        @if ($item->product)
                                            <img src="{{ $item->product->image_url }}" alt="{{ $item->product->name }}"
                                                class="cart-product-image">
                                            <div>
                                                <strong class="cart-product-name">{{ $item->product->name }}</strong>
                                                <p class="cart-product-price">
                                                    ৳{{ number_format($item->product->price, 2) }}</p>
                                            </div>
                                        @else
                                            <strong class="cart-product-name">পণ্যটি আর উপলব্ধ নেই</strong>
                                        @endif
                                    </div>
                                    <div class="cart-quantity-container">
                                        <span class="cart-quantity">{{ $item->quantity }} ×</span>
                                    </div>
                                </div>

                                <div class="cart-body">
                                    <div class="cart-summary">
                                        <p class="cart-subtotal">সাবটোটাল:
                                            ৳{{ number_format($item->product ? $item->product->price * $item->quantity : 0, 2) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="cart-total">
                            <strong>মোট: ৳{{ number_format($cartTotal, 2) }}</strong>
                            <a href="{{ route('cart.index') }}" class="checkout-btn">কার্ট পেজে যান</a>
                        </div>
                    </div>
                @else
                    <div class="empty-cart">
                        <p class="empty-message">আপনার কার্ট খালি</p>
                        <a href="{{ route('shop') }}" class="btn btn-primary">শপিং চালিয়ে যান</a>
                    </div>
                @endif
            </div>

            <!-- Settings Tab -->
            <div id="settings" class="tab-content">
                <div class="profile-card">
                    <h3>অ্যাকাউন্ট সেটিংস</h3>
                    <div class="profile-info">
                        <div class="info-item">
                            <span class="info-label">নোটিফিকেশন:</span>
                            <span class="info-value">সক্রিয়</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">নিউজলেটার:</span>
                            <span class="info-value">সাবস্ক্রাইব করা হয়েছে</span>
                        </div>
                    </div>
                </div>
                <div class="action-buttons">
                    <button class="btn btn-outline">পাসওয়ার্ড পরিবর্তন করুন</button>
                    <button class="btn btn-outline">অ্যাকাউন্ট মুছে দিন</button>
                    <a href="{{ route('support.index') }}" class="btn btn-outline">সাপোর্টে যোগাযোগ করুন</a>

                </div>
            </div>
        @else
            <div class="profile-card" style="text-align: center;">
                <p>আপনার প্রোফাইল দেখার জন্য লগইন করুন।</p>
                <a href="{{ route('customer_auth') }}" class="btn btn-primary">লগইন/সাইন আপ</a>
            </div>
        @endif
    </div>

    <script>
        function switchTab(tabId) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });

            // Remove active class from all tabs
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });

            // Show selected tab content
            document.getElementById(tabId).classList.add('active');

            // Add active class to clicked tab
            event.currentTarget.classList.add('active');
        }
    </script>
@endsection
