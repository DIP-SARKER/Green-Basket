@extends('index')
@push('style')
<title>Shop | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/shop.css') }}">
@endpush

@section('main-content')
    <main class="container">
        <!-- Category Banner -->
        <section class="category-banner">
            <h2 class="category-title">Shop by Category</h2>
            <div class="category-grid">
                <a href="{{ route("fruitShop") }}">
                    <div class="category-card">
                        <h1>🍏</h1>
                        <h3>Fresh Fruits</h3>
                    </div>
                </a>
                <a href="{{ route("vegetableShop") }}">
                    <div class="category-card">
                        <h1>🥕</h1>
                        <h3>Organic Vegetables</h3>
                    </div>
                </a>
                <a href="{{ route('meatShop') }}">
                    <div class="category-card">
                        <h1>🍗</h1>
                        <h3>Farm Meats</h3>
                    </div>
                </a>
                <a href="{{ route('fishShop') }}">
                    <div class="category-card">
                        <h1>🐟</h1>
                        <h3>Freshwater Fish</h3>
                    </div>
                </a>
                <a href="{{ route('bakeryShop') }}">
                    <div class="category-card">
                        <h1>🥯</h1>
                        <h3>Bakery Delights</h3>
                    </div>
                </a>
                <a href="{{ route('dairyShop') }}">
                    <div class="category-card">
                        <h1>🥛</h1>
                        <h3>Dairy </h3>
                    </div>
                </a>


            </div>
        </section>

        <!-- Featured Products -->
        <section class="section">
            <h2 class="section-title">Fresh From Our Farms</h2>
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Organic Apples</h3>
                        <p class="product-seller">Sunny Valley Orchard</p>
                        <p class="product-price">$3.99/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1518977676601-b53f82aba655?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Heirloom Tomatoes</h3>
                        <p class="product-seller">Green Thumb Farm</p>
                        <p class="product-price">$4.50/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Grass-Fed Ribeye</h3>
                        <p class="product-seller">Pasture Prime Ranch</p>
                        <p class="product-price">$18.99/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1550258987-190a2d41a8ba?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Organic Strawberries</h3>
                        <p class="product-seller">Berry Best Farms</p>
                        <p class="product-price">$5.99/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1518977956812-cd3dbadaaf31?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Rainbow Carrots</h3>
                        <p class="product-seller">Roots & Shoots Farm</p>
                        <p class="product-price">$2.99/bunch</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1603048719539-4cf0b6b51f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Free-Range Chicken</h3>
                        <p class="product-seller">Clover Field Poultry</p>
                        <p class="product-price">$8.99/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1603363891890-5b5d8f8c78cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Sweet Corn</h3>
                        <p class="product-seller">Golden Harvest Farm</p>
                        <p class="product-price">$2.99/ea</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1599058917214-51cfa2f4cc9b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Farm Fresh Eggs</h3>
                        <p class="product-seller">Sunny Side Farm</p>
                        <p class="product-price">$3.50/dozen</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1598565302691-3a58641d7e6d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Local Honey</h3>
                        <p class="product-seller">Bee Happy Apiary</p>
                        <p class="product-price">$10.00/jar</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 10 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1595433707802-0a020735f225?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Seasonal Pumpkin</h3>
                        <p class="product-seller">Autumn Farms</p>
                        <p class="product-price">$1.99/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 11 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1601004890684-d8cbf643f5f2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Organic Avocados</h3>
                        <p class="product-seller">Green Earth Orchards</p>
                        <p class="product-price">$1.50/each</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>

                <!-- Product 12 -->
                <div class="product-card">
                    <div class="product-image"
                        style="background-image: url('https://images.unsplash.com/photo-1615031304569-18fac89039f7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Heritage Pork Chops</h3>
                        <p class="product-seller">Old Country Butchers</p>
                        <p class="product-price">$7.99/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>
        </section>

        <!-- Featured Sellers -->
        <section class="section">
            <h2 class="section-title">Meet Our Farmers</h2>
            <div class="sellers-grid">
                <!-- Seller 1 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">Sunny Valley Orchard</h3>
                    <p class="seller-specialty">Organic Fruits</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>

                <!-- Seller 2 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">Green Thumb Farm</h3>
                    <p class="seller-specialty">Seasonal Vegetables</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>

                <!-- Seller 3 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1516467508483-a7212febe31a?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">Pasture Prime Ranch</h3>
                    <p class="seller-specialty">Grass-Fed Meats</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>

                <!-- Seller 4 -->
                <div class="seller-card">
                    <div class="seller-logo"
                        style="background-image: url('https://images.unsplash.com/photo-1605007493699-af65834f8a05?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')">
                    </div>
                    <h3 class="seller-name">Berry Best Farms</h3>
                    <p class="seller-specialty">Berries & Melons</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>
            </div>
        </section>
    </main>
@endsection