@extends('index')
@push('style')
<title>Seasonal | Green Basktet</title>
<link rel="stylesheet" href="{{ asset('css/hridoy/seasonal.css') }}">
@endpush

@section('main-content')
<section class="seasonal-produce">
    <div class="container">
        <h1 class="seasonal-title">Bangladesh's Seasonal Harvest</h1>
        <p class="seasonal-subtitle">Fresh from our farmers' fields to your table</p>
        
        <div class="seasonal-intro">
            <p>Bangladesh's six seasons (<em>Ritu</em>) each bring unique harvests. By choosing seasonal produce, you get:</p>
            <ul>
                <li>Maximum freshness and nutrition</li>
                <li>Lower prices (20-40% less than off-season)</li>
                <li>Support for traditional farming cycles</li>
            </ul>
        </div>
        
        <div class="seasonal-calendar">
            <!-- Summer (Grishmo) -->
            <div class="season-card summer">
                <div class="season-header">
                    <h2>Summer (গ্রীষ্ম)<br>April - June</h2>
                    <div class="season-icon">☀️</div>
                </div>
                <div class="season-produce">
                    <h3>Fresh This Season:</h3>
                    <div class="produce-grid">
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1689899148821-71705bd9ab56?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Mango">
                            <p>Mango<br>(আম)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://plus.unsplash.com/premium_photo-1722961405963-68d07a1fb633?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Lychee">
                            <p>Lychee<br>(লিচু)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1620685581318-91ce6f1b76ca?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Jackfruit">
                            <p>Jackfruit<br>(কাঁঠাল)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1627981906592-ae3f0ee9486d?q=80&w=694&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Cucumber">
                            <p>Cucumber<br>(শসা)</p>
                        </div>
                    </div>
                </div>
                <div class="season-tip">
                    <strong>Pro Tip:</strong> Enjoy summer fruits as natural coolants against Bangladesh's heat waves.
                </div>
            </div>
            
            <!-- Monsoon (Borsha) -->
            <div class="season-card monsoon">
                <div class="season-header">
                    <h2>Monsoon (বর্ষা)<br>July - August</h2>
                    <div class="season-icon">🌧️</div>
                </div>
                <div class="season-produce">
                    <h3>Fresh This Season:</h3>
                    <div class="produce-grid">
                        <div class="produce-item">
                            <img src="{{ asset('https://live.staticflickr.com/3618/3284587387_98f5ec4f3e_b.jpg') }}" alt="Boroi">
                            <p>Boroi<br>(বরই)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://i0.wp.com/virginiawillis.com/wp-content/uploads/2014/08/DSC_0587.jpg?ssl=1') }}" alt="Okra">
                            <p>Okra<br>(ঢেঁড়স)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://agrobengal.com/wp-content/uploads/2019/01/Bottle_gourd_of_Bangladesh-scaled.jpg') }}" alt="Bottle Gourd">
                            <p>Bottle Gourd<br>(লাউ)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://www.streetsmartkitchen.com/wp-content/uploads/Thai-Stir-Fried-Water-Spinach-Recipe-1.jpg') }}" alt="Water Spinach">
                            <p>Water Spinach<br>(কলমি শাক)</p>
                        </div>
                    </div>
                </div>
                <div class="season-tip">
                    <strong>Pro Tip:</strong> Flood-resistant vegetables like water spinach thrive during monsoon.
                </div>
            </div>
            
            <!-- Autumn (Sharat) -->
            <div class="season-card autumn">
                <div class="season-header">
                    <h2>Autumn (শরৎ)<br>September - October</h2>
                    <div class="season-icon">🍂</div>
                </div>
                <div class="season-produce">
                    <h3>Fresh This Season:</h3>
                    <div class="produce-grid">
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1723475158232-819e29803f4d?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Aman Rice">
                            <p>Aman Rice<br>(আমন ধান)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1739903760931-bed27f3fe9b1?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Bitter Gourd">
                            <p>Bitter Gourd<br>(করলা)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1635318840697-1d29b5866dff?q=80&w=1075&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Arum">
                            <p>Arum<br>(কচু)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1536511132770-e5058c7e8c46?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Guava">
                            <p>Guava<br>(পেয়ারা)</p>
                        </div>
                    </div>
                </div>
                <div class="season-tip">
                    <strong>Pro Tip:</strong> Aman rice harvest begins - look for fresh "Nayanmoni" or "BRRI dhan49" varieties.
                </div>
            </div>
            
            <!-- Late Autumn (Hemonto) -->
            <div class="season-card hemonto">
                <div class="season-header">
                    <h2>Late Autumn (হেমন্ত)<br>November - December</h2>
                    <div class="season-icon">🌾</div>
                </div>
                <div class="season-produce">
                    <h3>Fresh This Season:</h3>
                    <div class="produce-grid">
                        <div class="produce-item">
                            <img src="{{ asset('https://www.playfulcooking.com/wp-content/uploads/2022/01/potol_bhaja_01.jpg') }}" alt="Potol">
                            <p>Pointed Gourd<br>(পটল)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://media-cdn2.greatbritishchefs.com/media/xuaop4pn/cauliflower.whqc_1426x713q80.jpg') }}" alt="Cauliflower">
                            <p>Cauliflower<br>(ফুলকপি)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://tagawagardens.com/wp-content/uploads/2023/08/TOMATOES-RED-RIPE-VINE-SS-1-scaled.jpg') }}" alt="Tomato">
                            <p>Tomato<br>(টমেটো)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1585369496178-144fd937f249?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Radish">
                            <p>Radish<br>(মূলা)</p>
                        </div>
                    </div>
                </div>
                <div class="season-tip">
                    <strong>Pro Tip:</strong> Winter vegetables start appearing - perfect for shorshe ilish and vegetable curries.
                </div>
            </div>
            
            <!-- Winter (Sheet) -->
            <div class="season-card winter">
                <div class="season-header">
                    <h2>Winter (শীত)<br>January - February</h2>
                    <div class="season-icon">❄️</div>
                </div>
                <div class="season-produce">
                    <h3>Fresh This Season:</h3>
                    <div class="produce-grid">
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1594282241894-4da286138f44?q=80&w=1167&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Strawberry">
                            <p>Strawberry<br>(স্ট্রবেরি)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://www.incredibleseeds.ca/cdn/shop/products/BeanBush-Provider_460x@2x.jpg?v=1679716832') }}" alt="Bean">
                            <p>Bean<br>(বরবটি)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.squarespace-cdn.com/content/v1/60d5fe5c9e25003cd4b3b2ed/1634316438635-27FNWQSMMPRHWXB0MLGJ/green-cabbage-envato.jpg') }}" alt="Cabbage">
                            <p>Cabbage<br>(বাঁধাকপি)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://www.harvst.co.uk/wp-content/uploads/2022/05/peas-scaled.jpeg') }}" alt="Peas">
                            <p>Peas<br>(মটরশুঁটি)</p>
                        </div>
                    </div>
                </div>
                <div class="season-tip">
                    <strong>Pro Tip:</strong> Northern Bangladesh produces premium winter vegetables - look for "Panchagarh" or "Thakurgaon" labels.
                </div>
            </div>
            
            <!-- Spring (Boshonto) -->
            <div class="season-card spring">
                <div class="season-header">
                    <h2>Spring (বসন্ত)<br>March</h2>
                    <div class="season-icon">🌸</div>
                </div>
                <div class="season-produce">
                    <h3>Fresh This Season:</h3>
                    <div class="produce-grid">
                        <div class="produce-item">
                            <img src="{{ asset('https://snaped.fns.usda.gov/sites/default/files/styles/crop_ratio_7_5/public/seasonal-produce/2018-05/watermelon.jpg.webp?itok=4TjwcpU9') }}" alt="Watermelon">
                            <p>Watermelon<br>(তরমুজ)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://www.realsimple.com/thmb/IuoL2Dr71ow3C3vCMqxmS28TQOY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/health-benefits-of-papaya-GettyImages-1289117463-0d1692679c0e4a57a4f3ee663fae0600.jpg') }}" alt="Papaya">
                            <p>Papaya<br>(পেঁপে)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1579843692771-027a4a8fda48?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Eggplant">
                            <p>Eggplant<br>(বেগুন)</p>
                        </div>
                        <div class="produce-item">
                            <img src="{{ asset('https://images.unsplash.com/photo-1593851109529-cfa995ea1a7e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" alt="Amaranth">
                            <p>Amaranth<br>(লাল শাক)</p>
                        </div>
                    </div>
                </div>
                <div class="season-tip">
                    <strong>Pro Tip:</strong> Spring harvests are perfect for Pohela Boishakh feasts - order early for celebrations.
                </div>
            </div>
        </div>
        
        <div class="seasonal-benefits">
            <h2>Why Eat Seasonally in Bangladesh?</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">👩‍🌾</div>
                    <h3>Supports Local Farmers</h3>
                    <p>Aligns with traditional crop cycles, ensuring fair prices for growers</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">💵</div>
                    <h3>20-40% Cheaper</h3>
                    <p>Abundant harvests mean lower prices than off-season imports</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🌱</div>
                    <h3>More Nutritious</h3>
                    <p>Seasonal produce has higher vitamin content and better taste</p>
                </div>
            </div>
        </div>
        
        <div class="seasonal-recipes">
            <h2>Seasonal Recipe Ideas</h2>
            <div class="recipe-tabs">
                <button class="tab-btn active" data-season="summer">Summer</button>
                <button class="tab-btn" data-season="monsoon">Monsoon</button>
                <button class="tab-btn" data-season="winter">Winter</button>
            </div>
            
            <div class="recipe-content active" id="summer-recipes">
                <div class="recipe-card">
                    <h3>Aam Doi (Mango Yogurt)</h3>
                    <p>Blend ripe mangoes with doi (yogurt) and a touch of honey for a cooling summer dessert.</p>
                    <a href="{{ route('recipes') }}" class="recipe-link">View Recipe →</a>
                </div>
                <div class="recipe-card">
                    <h3>Jackfruit Curry</h3>
                    <p>Young jackfruit cooked with turmeric, chili, and mustard oil - a vegan summer staple.</p>
                    <a href="{{ route('recipes') }}" class="recipe-link">View Recipe →</a>
                </div>
            </div>
            
            <div class="recipe-content" id="monsoon-recipes">
                <div class="recipe-card">
                    <h3>Kolmi Shak Bhaji</h3>
                    <p>Water spinach stir-fried with garlic, chili, and shrimp - perfect monsoon comfort food.</p>
                    <a href="{{ route('recipes') }}" class="recipe-link">View Recipe →</a>
                </div>
            </div>
            
            <div class="recipe-content" id="winter-recipes">
                <div class="recipe-card">
                    <h3>Shorshe Phoolkopi</h3>
                    <p>Cauliflower in mustard sauce - a winter classic from North Bengal.</p>
                    <a href="{{ route('recipes') }}" class="recipe-link">View Recipe →</a>
                </div>
            </div>
        </div>
        
        <div class="seasonal-cta">
            <h3>Get Fresh Seasonal Deliveries</h3>
            <p>We'll notify you when each season's best produce arrives from our partner farms.</p>
            <div class="cta-buttons">
                <a href="{{ route('shop') }}" class="cta-button">Shop Seasonal</a>
                <a href="#" class="cta-button outline">Get Season Alerts</a>
            </div>
        </div>
    </div>
</section>

<script src="js/hridoy/seasonal.js"></script>
@endsection