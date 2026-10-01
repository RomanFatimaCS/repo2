<section class="ab2-section">

    <link rel="stylesheet" href="{{ asset('css/aboutus2.css') }}">

    {{-- Main Heading --}}
    <h1 class="ab2-heading">
        Transforming financial challenges<br>
        <em>into growth opportunities</em>
    </h1>

    {{-- Feature 1: Financial Experts (text left, image right) --}}
    <div class="ab2-feature">
        <div class="ab2-feature-content">
            <h2 class="ab2-feature-title">Financial experts</h2>
            <p class="ab2-feature-text">
                Providing reliable advice backed by industry knowledge
            </p>
            <a href="#" class="ab2-arrow" aria-label="Learn more">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
        <div class="ab2-feature-image">
           <img src="{{ asset('assets/image9.jpg') }}' alt="financial experts'>
        </div>
    </div>

    {{-- Feature 2: Personalized Solutions (image left, text right) --}}
    <div class="ab2-feature reverse">
        <div class="ab2-feature-content">
            <h2 class="ab2-feature-title">Personalized solutions</h2>
            <p class="ab2-feature-text">
                Strategies designed around your specific financial goals
            </p>
            <a href="#" class="ab2-arrow" aria-label="Learn more">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
        <div class="ab2-feature-image">
            <img src="{{ asset('assert/image7.jpg') }}" alt="Personalized solutions">
        </div>
    </div>

</section>