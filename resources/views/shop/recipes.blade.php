<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe | Green Basket | Farm to Table</title>
    <link rel="stylesheet" href="{{ asset("css/hridoy/basic.css") }}">
    <link rel="stylesheet" href="{{ asset("css/hridoy/recipes.css") }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}" class="logo">green<span>basket</span></a>
                <div class="nav-links">
                    <a href="{{ route('shop') }}">Shop</a>
                    <a href="{{ route("farmers") }}">Farmers</a>
                    <a href="{{ route("recipes") }}" class="active">Recipes</a>
                    <a href="#">About</a>
                    <div class="search-container">
                        <span class="search-icon">🔍</span>
                        <input type="text" class="search-input" placeholder="Search products...">
                    </div>
                    <a href="#" class="cta-button">Order Now</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="section">
            <div class="recipe-hero">
                <div class="recipe-image">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Roasted Vegetable Medley">
                </div>
                <div class="recipe-info">
                    <h1 class="recipe-title">Farmers Market Roasted Vegetable Medley</h1>
                    <div class="recipe-meta">
                        <div class="meta-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span>45 mins</span>
                        </div>
                        <div class="meta-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                            <span>Medium</span>
                        </div>
                        <div class="meta-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span>4 servings</span>
                        </div>
                    </div>
                    <div class="recipe-tags">
                        <span class="tag">Vegetarian</span>
                        <span class="tag">Seasonal</span>
                        <span class="tag">Healthy</span>
                        <span class="tag">Gluten-Free</span>
                    </div>
                    <p class="recipe-description">
                        This colorful roasted vegetable medley showcases the best of the farmers market. Seasonal
                        vegetables are tossed with aromatic herbs and olive oil, then roasted to perfection. The natural
                        sweetness of the vegetables intensifies during roasting, creating a dish that's both nutritious
                        and bursting with flavor.
                    </p>
                    <a href="#" class="cta-button">Order Ingredients</a>
                </div>
            </div>

            <div class="recipe-content">
                <div class="ingredients-card">
                    <h2 class="card-title">Ingredients</h2>
                    <ul class="ingredient-list">
                        <li class="ingredient-item">
                            <span class="ingredient-quantity">2 cups</span>
                            <span class="ingredient-name">Butternut squash, cubed</span>
                        </li>
                        <li class="ingredient-item">
                            <span class="ingredient-quantity">1 cup</span>
                            <span class="ingredient-name">Brussels sprouts, halved</span>
                        </li>
                        <li class="ingredient-item">
                            <span class="ingredient-quantity">1 cup</span>
                            <span class="ingredient-name">Carrots, sliced</span>
                        </li>
                        <li class="ingredient-item">
                            <span class="ingredient-quantity">1</span>
                            <span class="ingredient-name">Red bell pepper, diced</span>
                        </li>
                        <li class="ingredient-item">
                            <span class="ingredient-quantity">1</span>
                            <span class="ingredient-name">Red onion, sliced</span>
                        </li>
                        <li class="ingredient-item">
                            <span class="ingredient-quantity">3 tbsp</span>
                            <span class="ingredient-name">Extra virgin olive oil</span>
                        </li>
                        <li class="ingredient-item">
                            <span class="ingredient-quantity">2 tsp</span>
                            <span class="ingredient-name">Fresh rosemary, chopped</span>
                        </li>
                        <li class="ingredient-item">
                            <span class="ingredient-quantity">1 tsp</span>
                            <span class="ingredient-name">Sea salt</span>
                        </li>
                        <li class="ingredient-item">
                            <span class="ingredient-quantity">½ tsp</span>
                            <span class="ingredient-name">Black pepper</span>
                        </li>
                        <li class="ingredient-item">
                            <span class="ingredient-quantity">2 tbsp</span>
                            <span class="ingredient-name">Balsamic glaze (optional)</span>
                        </li>
                    </ul>
                </div>

                <div class="instructions-card">
                    <h2 class="card-title">Instructions</h2>
                    <div class="instruction-step">
                        <p>Preheat your oven to 400°F (200°C). Line a large baking sheet with parchment paper or lightly
                            grease it.</p>
                    </div>
                    <div class="instruction-step">
                        <p>In a large bowl, combine all the prepared vegetables. Drizzle with olive oil and sprinkle
                            with rosemary, salt, and pepper. Toss well to coat all the vegetables evenly.</p>
                    </div>
                    <div class="instruction-step">
                        <p>Spread the vegetables in a single layer on the prepared baking sheet. Make sure they aren't
                            crowded to allow for proper roasting.</p>
                    </div>
                    <div class="instruction-step">
                        <p>Roast in the preheated oven for 25-30 minutes, stirring halfway through, until the vegetables
                            are tender and caramelized at the edges.</p>
                    </div>
                    <div class="instruction-step">
                        <p>Remove from oven and transfer to a serving dish. Drizzle with balsamic glaze if desired.
                            Serve warm as a side dish or over quinoa for a complete meal.</p>
                    </div>
                </div>
            </div>

            <div class="notes-section">
                <h2 class="card-title">Chef's Notes</h2>
                <p>This recipe is highly adaptable to whatever vegetables are in season. In spring, try asparagus and
                    radishes. Summer works well with zucchini and eggplant. Feel free to add minced garlic or other
                    herbs like thyme or oregano for variation.</p>
                <p>For extra protein, toss in some chickpeas before roasting. They'll get deliciously crispy!</p>
            </div>

            <div class="related-recipes">
                <h2 class="section-title">More Seasonal Recipes</h2>
                <div class="related-grid">
                    <a href="#" class="related-card">
                        <div class="related-image">
                            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Farmers Market Salad">
                        </div>
                        <div class="related-content">
                            <h3 class="related-title">Farmers Market Rainbow Salad</h3>
                            <div class="related-meta">25 mins · Easy</div>
                        </div>
                    </a>
                    <a href="#" class="related-card">
                        <div class="related-image">
                            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Vegetable Soup">
                        </div>
                        <div class="related-content">
                            <h3 class="related-title">Hearty Seasonal Vegetable Soup</h3>
                            <div class="related-meta">40 mins · Medium</div>
                        </div>
                    </a>
                    <a href="#" class="related-card">
                        <div class="related-image">
                            <img src="https://images.unsplash.com/photo-1547592180-85f173990554?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Vegetable Stir Fry">
                        </div>
                        <div class="related-content">
                            <h3 class="related-title">Farm Fresh Vegetable Stir Fry</h3>
                            <div class="related-meta">20 mins · Easy</div>
                        </div>
                    </a>
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