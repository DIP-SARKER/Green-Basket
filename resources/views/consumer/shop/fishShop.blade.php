@extends('index')
@push('style')
<title>Fish Shop | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/vegetableShop.css') }}">
@endpush

@section('main-content')
    <main class="container">
        <!-- Hero Banner -->
        <section class="hero-banner">
            <h1>Fresh Bangladeshi Fish Delivered to You</h1>
            <p>Get the freshest river and farm-raised fish from across Bangladesh. Cleaned, chilled, and ready to cook,
                delivered straight to your kitchen.</p>
            <div class="trust-badges">
                <div class="badge"><i>✓</i> Freshwater & River Catch</div>
                <div class="badge"><i>✓</i> No Preservatives</div>
                <div class="badge"><i>✓</i> Cleaned & Ready to Cook</div>
            </div>
        </section>

        <!-- Category Filter -->
        <div class="category-filter">
            <button class="filter-btn active">All Fish</button>
            <button class="filter-btn">River Fish</button>
            <button class="filter-btn">Farm Fish</button>
            <button class="filter-btn">Small Fish</button>
            <button class="filter-btn">Frozen</button>
        </div>

        <div class="products-grid">
            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://fishvally.com/cdn/shop/files/Hilsha_533x.jpg?v=1742714894');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Ilish (Hilsa)</h3>
                    <p class="product-farmer">From Padma River, Barisal</p>
                    <p class="product-price">৳1100/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">River Catch</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://storage.googleapis.com/shy-pub/224989/1690535302608_SKU-0690_0.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Koi Fish</h3>
                    <p class="product-farmer">From Bogura Fish Farms</p>
                    <p class="product-price">৳320/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Farm Fresh</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://img.thecdn.in/224989/SKU-1829_0-1746422184254.jpg?width=600&format=webp');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Tangra Fish</h3>
                    <p class="product-farmer">From Jamuna River</p>
                    <p class="product-price">৳450/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Wild Caught</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://as2.ftcdn.net/jpg/05/35/16/39/1000_F_535163917_nSm9r8xnEUdicDXvMHrUOfqYSbdHEVHl.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Rui Fish</h3>
                    <p class="product-farmer">From Meghna River</p>
                    <p class="product-price">৳380/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Popular in Bengali Cuisine</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://api.freshtoday.com.bd/media/64f07c82bb496.jpeg');"></div>
                <div class="product-info">
                    <h3 class="product-title">Pabda Fish</h3>
                    <p class="product-farmer">From Brahmaputra River</p>
                    <p class="product-price">৳500/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Delicate & Flavorful</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://dailybazar.com.bd/wp-content/uploads/2020/03/boal-fish-2.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Boyal Fish</h3>
                    <p class="product-farmer">From Ganges River</p>
                    <p class="product-price">৳750/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">High Protein</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://kolkatafish.com/wp-content/uploads/2020/08/Live-Katla_Fotor-1.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Katla Fish</h3>
                    <p class="product-farmer">From Jamuna River</p>
                    <p class="product-price">৳420/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Meaty Texture</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image"
                    style="background-image: url('https://static.wixstatic.com/media/a01d15_1147b86935374bfd98924881b07523f9~mv2.jpg/v1/fill/w_500,h_373,al_c,q_80,enc_avif,quality_auto/a01d15_1147b86935374bfd98924881b07523f9~mv2.jpg');">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Mrigel Fish</h3>
                    <p class="product-farmer">From Padma River</p>
                    <p class="product-price">৳400/kg</p>
                    <div class="product-meta">
                        <span class="product-organic">Mild & Tender</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>



    </main>
@endsection