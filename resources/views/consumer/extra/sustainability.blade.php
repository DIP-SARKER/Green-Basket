@extends('index')
@push('style')
<title>Sustainability | Green Basket</title>
<link rel="stylesheet" href="{{ asset('css/moshiur/sustainability.css') }}">
@endpush

@section('main-content')
<section class="sustainability-section">
    <div class="container">
        <h1 class="section-title">Our Sustainable Model</h1>
        <p class="section-subtitle">Connecting farmers directly with consumers for a greener Bangladesh</p>
        
        <div class="sustainability-hero">
            <div class="hero-content">
                <h2>Farm-to-Table Sustainability</h2>
                <p>Green Basket's direct-to-consumer model reduces food waste, supports local farmers, and delivers fresher produce while minimizing environmental impact. In Bangladesh, where agriculture employs 40% of the workforce, our approach creates meaningful change.</p>
            </div>
            <div class="hero-image">
                <img src="{{ asset('https://static.vecteezy.com/system/resources/previews/051/293/787/non_2x/cartoon-farmer-vegetable-seller-holding-organic-fresh-vegetables-in-hand-vector.jpg') }}" alt="Farmer delivering fresh produce">
            </div>
        </div>
        
        <div class="impact-grid">
            <div class="impact-card">
                <div class="impact-icon">🌱</div>
                <h3>For the Environment</h3>
                <ul>
                    <li><strong>60% less food waste</strong> through direct supply chains</li>
                    <li><strong>Reduced carbon footprint</strong> by eliminating middlemen transportation</li>
                    <li><strong>Sustainable packaging</strong> using biodegradable materials</li>
                    <li><strong>Organic farming support</strong> for 200+ Bangladeshi farmers</li>
                </ul>
            </div>
            
            <div class="impact-card">
                <div class="impact-icon">👩‍🌾</div>
                <h3>For Farmers</h3>
                <ul>
                    <li><strong>25-40% higher income</strong> by cutting out intermediaries</li>
                    <li><strong>Fair trade practices</strong> with guaranteed minimum prices</li>
                    <li><strong>Training programs</strong> on sustainable agriculture</li>
                    <li><strong>Market access</strong> for smallholder farmers across Bangladesh</li>
                </ul>
            </div>
            
            <div class="impact-card">
                <div class="impact-icon">🏙️</div>
                <h3>For Consumers</h3>
                <ul>
                    <li><strong>Fresher produce</strong> harvested within 24 hours of delivery</li>
                    <li><strong>Healthier food</strong> with reduced chemical usage</li>
                    <li><strong>Transparent sourcing</strong> knowing exactly where your food comes from</li>
                    <li><strong>Supporting local economy</strong> with every purchase</li>
                </ul>
            </div>
        </div>
        
        <div class="bangladesh-focus">
            <h2>Sustainability in the Bangladeshi Context</h2>
            <div class="focus-content">
                <div class="focus-text">
                    <p>In Bangladesh, where traditional supply chains lose up to 30% of produce before reaching consumers, our model provides crucial solutions:</p>
                    <ul>
                        <li><strong>Climate-resilient farming:</strong> We promote techniques suited for Bangladesh's flood-prone and salinity-affected regions</li>
                        <li><strong>Water conservation:</strong> Training farmers in drip irrigation and water management</li>
                        <li><strong>Reduced post-harvest loss:</strong> Our cold chain logistics preserve perishable goods</li>
                        <li><strong>Women's empowerment:</strong> 35% of our partner farmers are women-led households</li>
                    </ul>
                    <p>By shortening supply chains, we're helping build food security for Bangladesh's growing population while protecting its agricultural heritage.</p>
                </div>
                <div class="focus-image">
                    <img src="{{ asset('https://www.tbsnews.net/sites/default/files/styles/big_3/public/images/2022/10/13/paddy_field.jpg') }}" alt="Bangladeshi farmers in fields">
                </div>
            </div>
        </div>
        
        <div class="global-perspective">
            <h2>Global Sustainability Impact</h2>
            <p>While tailored for Bangladesh, our model contributes to worldwide sustainability goals:</p>
            
            <div class="sdg-grid">
                <div class="sdg-card">
                    <img src="{{ asset('https://sdg.internationalpublishers.org/wp-content/uploads/2021/04/E_SDG-goals_Goal-02.png') }}" alt="SDG 2: Zero Hunger">
                    <h4>Zero Hunger</h4>
                    <p>Improving food access and reducing waste in urban Bangladesh</p>
                </div>
                <div class="sdg-card">
                    <img src="{{ asset('https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Sustainable_Development_Goal_12ResponsibleConsumption.svg/1200px-Sustainable_Development_Goal_12ResponsibleConsumption.svg.png') }}" alt="SDG 12: Responsible Consumption">
                    <h4>Responsible Consumption</h4>
                    <p>Promoting sustainable food systems and production</p>
                </div>
                <div class="sdg-card">
                    <img src="{{ asset('https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Sustainable_Development_Goal_13Climate.svg/1200px-Sustainable_Development_Goal_13Climate.svg.png') }}" alt="SDG 13: Climate Action">
                    <h4>Climate Action</h4>
                    <p>Reducing agriculture's carbon footprint</p>
                </div>
                <div class="sdg-card">
                    <img src="{{ asset('https://www.un.org/esa/ffd/ffddialogue/images/E_SDG%20goals_icons-individual-rgb-15.png') }}" alt="SDG 15: Life on Land">
                    <h4>Life on Land</h4>
                    <p>Supporting sustainable land use practices</p>
                </div>
            </div>
        </div>
        
        <div class="our-commitments">
            <h2>Our Ongoing Commitments</h2>
            <div class="commitment-cards">
                <div class="commitment-card">
                    <h3>By 2025</h3>
                    <ul>
                        <li>Convert 100% of packaging to biodegradable materials</li>
                        <li>Expand solar-powered cold storage facilities</li>
                        <li>Train 1,000 farmers in climate-smart techniques</li>
                    </ul>
                </div>
                <div class="commitment-card">
                    <h3>By 2030</h3>
                    <ul>
                        <li>Achieve carbon-neutral delivery fleet</li>
                        <li>50% women participation in farmer programs</li>
                        <li>Reduce food waste in our supply chain to <5%</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="join-movement">
            <h3>Join Our Sustainable Food Movement</h3>
            <p>Every purchase supports a greener future for Bangladesh's agriculture.</p>
            <div class="action-buttons">
                <a href="{{ route('shop') }}" class="cta-button">Shop Sustainably</a>
                <a href="{{ route('farmers') }}" class="cta-button outline">Meet Our Farmers</a>
            </div>
        </div>
    </div>
</section>
@endsection