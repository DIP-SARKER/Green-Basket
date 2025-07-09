@extends('index')
@push('style')
<title>Dairy Shop | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/vegetableShop.css') }}">
@endpush

@section('main-content')
    <main class="container">
        <!-- Hero Banner -->
        <section class="hero-banner">
            <h1>Pure Bangladeshi Dairy Delivered Fresh</h1>
            <p>Our dairy products come from grass-fed cows and small family farms. Unadulterated, fresh, and rich in
                nutrients. From milk to sweets, we’ve got you covered.</p>
            <div class="trust-badges">
                <div class="badge"><i>✓</i> Fresh & Pure</div>
                <div class="badge"><i>✓</i> No Adulteration</div>
                <div class="badge"><i>✓</i> Farm-Sourced</div>
            </div>
        </section>

        <!-- Category Filter -->
        <div class="category-filter">
            <button class="filter-btn active">All Dairy</button>
            <button class="filter-btn">Milk</button>
            <button class="filter-btn">Yogurt</button>
            <button class="filter-btn">Paneer</button>
            <button class="filter-btn">Sweets</button>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
    <div class="product-card">
        <div class="product-image" style="background-image: url('https://5.imimg.com/data5/GH/KP/QN/SELLER-61781216/milk-500x500.jpg');"></div>
        <div class="product-info">
            <h3 class="product-title">Fresh Cow Milk</h3>
            <p class="product-farmer">From Rajshahi Dairy Farm</p>
            <p class="product-price">৳70/liter</p>
            <div class="product-meta">
                <span class="product-organic">Grass-Fed</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image" style="background-image: url('https://www.happysimpleliving.com/wp-content/uploads/2024/02/homemade-greek-yogurt-featured.jpg');"></div>
        <div class="product-info">
            <h3 class="product-title">Mishti Doi (Sweet Yogurt)</h3>
            <p class="product-farmer">From Bogura Dairy</p>
            <p class="product-price">৳120/kg</p>
            <div class="product-meta">
                <span class="product-organic">Traditional Clay Pot</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image" style="background-image: url('https://www.seriouseats.com/thmb/jdFyRQOfbKA1COGPrkN5927FiBs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/20220628-FreshPaneer-AmandaSuarez-11c5e6f76d064cf88153a93d28384bc8.jpg');"></div>
        <div class="product-info">
            <h3 class="product-title">Paneer (Cottage Cheese)</h3>
            <p class="product-farmer">From Khulna Milk Cooperative</p>
            <p class="product-price">৳250/kg</p>
            <div class="product-meta">
                <span class="product-organic">Homemade</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image" style="background-image: url('https://www.eatingwell.com/thmb/EY63AWae1w0ru7GZQBhYf5zoug8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-ghee-b7d45427a4064055a4b3d920cf6c22a1.jpg');"></div>
        <div class="product-info">
            <h3 class="product-title">Ghee (Clarified Butter)</h3>
            <p class="product-farmer">From Kushtia Dairy</p>
            <p class="product-price">৳600/kg</p>
            <div class="product-meta">
                <span class="product-organic">Pure & Aromatic</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image" style="background-image: url('https://bobs-redmill.transforms.svdcdn.com/production/blog/uploads/2018/02/shutterstock_1120312025.jpg?w=1280&h=633&auto=compress%2Cformat&fit=max&dm=1719304956&s=1523c241a5fdd168fd84c1f7ef3ac142');"></div>
        <div class="product-info">
            <h3 class="product-title">Butter</h3>
            <p class="product-farmer">From Sylhet Dairy</p>
            <p class="product-price">৳500/kg</p>
            <div class="product-meta">
                <span class="product-organic">Farm-Fresh</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1632200729570-1043effd1b77?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
        <div class="product-info">
            <h3 class="product-title">Chhana (Soft Cheese)</h3>
            <p class="product-farmer">From Tangail Dairy</p>
            <p class="product-price">৳220/kg</p>
            <div class="product-meta">
                <span class="product-organic">Freshly Prepared</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image" style="background-image: url('https://www.thespruceeats.com/thmb/x8pfeCxZuRYP3-3VavQZqQgQaxo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/mint-lassi-2216233-hero-01-9909ebbb5705484c926c23559d96615f.jpg');"></div>
        <div class="product-info">
            <h3 class="product-title">Lassi</h3>
            <p class="product-farmer">From Dhaka Dairy</p>
            <p class="product-price">৳60/glass</p>
            <div class="product-meta">
                <span class="product-organic">Cool & Refreshing</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image" style="background-image: url('https://nutritionmeetsfoodscience.com/wp-content/uploads/2023/05/a1.png');"></div>
        <div class="product-info">
            <h3 class="product-title">Curd</h3>
            <p class="product-farmer">From Chattogram Dairy</p>
            <p class="product-price">৳150/kg</p>
            <div class="product-meta">
                <span class="product-organic">Rich & Creamy</span>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

    </main>

@endsection