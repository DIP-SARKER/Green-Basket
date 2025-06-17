<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Green Basket - Farm to Table Delivery</title>
    <link rel="stylesheet" href="css\hridoy\shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="/" class="logo">GREEN<span>BASKET</span></a>
                <div class="nav-links">
                    <a href="/shop" class="active">Shop</a>
                    <a href="/about">Our Farm</a>
                    <a href="/recipes">Recipes</a>
                    <a href="/contact">Contact</a>
                    <a href="/cart" class="cta-button">My Basket</a>
                </div>
            </nav>
        </div>
    </header>
    
    <main class="container">
        <!-- Category Banner -->
        <section class="category-banner">
            <h2 class="category-title">Shop by Category</h2>
            <div class="category-grid">
                <div class="category-card">
                    <i class="fas fa-apple-alt"></i>
                    <h3>Fresh Fruits</h3>
                </div>
                <div class="category-card">
                    <i class="fas fa-carrot"></i>
                    <h3>Organic Vegetables</h3>
                </div>
                <div class="category-card">
                    <i class="fas fa-drumstick-bite"></i>
                    <h3>Farm Meats</h3>
                </div>
            </div>
        </section>
        
        <!-- Featured Products -->
        <section class="section">
            <h2 class="section-title">Fresh From Our Farms</h2>
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')"></div>
                    <div class="product-info">
                        <h3 class="product-title">Organic Apples</h3>
                        <p class="product-seller">Sunny Valley Orchard</p>
                        <p class="product-price">$3.99/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1518977676601-b53f82aba655?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')"></div>
                    <div class="product-info">
                        <h3 class="product-title">Heirloom Tomatoes</h3>
                        <p class="product-seller">Green Thumb Farm</p>
                        <p class="product-price">$4.50/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')"></div>
                    <div class="product-info">
                        <h3 class="product-title">Grass-Fed Ribeye</h3>
                        <p class="product-seller">Pasture Prime Ranch</p>
                        <p class="product-price">$18.99/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1550258987-190a2d41a8ba?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')"></div>
                    <div class="product-info">
                        <h3 class="product-title">Organic Strawberries</h3>
                        <p class="product-seller">Berry Best Farms</p>
                        <p class="product-price">$5.99/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>
                
                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1518977956812-cd3dbadaaf31?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')"></div>
                    <div class="product-info">
                        <h3 class="product-title">Rainbow Carrots</h3>
                        <p class="product-seller">Roots & Shoots Farm</p>
                        <p class="product-price">$2.99/bunch</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>
                
                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-image" style="background-image: url('https://images.unsplash.com/photo-1603048719539-4cf0b6b51f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')"></div>
                    <div class="product-info">
                        <h3 class="product-title">Free-Range Chicken</h3>
                        <p class="product-seller">Clover Field Poultry</p>
                        <p class="product-price">$8.99/lb</p>
                        <button class="add-to-cart">Add to Basket</button>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Featured Sellers -->
        <section class="section">
            <h2 class="section-title">Meet Our Farmers</h2>
            <div class="sellers-grid">
                <!-- Seller 1 -->
                <div class="seller-card">
                    <div class="seller-logo" style="background-image: url('https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')"></div>
                    <h3 class="seller-name">Sunny Valley Orchard</h3>
                    <p class="seller-specialty">Organic Fruits</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>
                
                <!-- Seller 2 -->
                <div class="seller-card">
                    <div class="seller-logo" style="background-image: url('https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')"></div>
                    <h3 class="seller-name">Green Thumb Farm</h3>
                    <p class="seller-specialty">Seasonal Vegetables</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>
                
                <!-- Seller 3 -->
                <div class="seller-card">
                    <div class="seller-logo" style="background-image: url('https://images.unsplash.com/photo-1516467508483-a7212febe31a?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')"></div>
                    <h3 class="seller-name">Pasture Prime Ranch</h3>
                    <p class="seller-specialty">Grass-Fed Meats</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>
                
                <!-- Seller 4 -->
                <div class="seller-card">
                    <div class="seller-logo" style="background-image: url('https://images.unsplash.com/photo-1605007493699-af65834f8a05?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80')"></div>
                    <h3 class="seller-name">Berry Best Farms</h3>
                    <p class="seller-specialty">Berries & Melons</p>
                    <a href="#" class="view-farm">View Farm</a>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="container">
            <p class="footer-text">&copy; 2023 Green Basket. Fresh from our farm to your table.</p>
        </div>
    </footer>
</body>
</html>