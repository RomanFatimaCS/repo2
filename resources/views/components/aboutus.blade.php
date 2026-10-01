<section class="about-us-section">
  <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
    <div class="about-us-container">

        {{-- LEFT: Image with 3D effect --}}
        <div class="about-us-image-wrap">
            <div class="about-us-image-glow"></div>
            <img
                src="{{ asset('assert/image3.jpg') }}"
                alt="About LedgeInvo"
                class="about-us-image"
            >
            <div class="about-us-image-shine"></div>
        </div>

        {{-- RIGHT: Content --}}
        <div class="about-us-content">

            <span class="about-us-label">WHAT DRIVES US</span>

            <h2 class="about-us-heading">
                <span class="hu-big">Guiding</span>
                <span class="hu-small">businesses</span>
                <span class="hu-big">with expert insights</span>
                <span class="hu-small">and customized</span>
                <span class="hu-big">financial strategies for</span>
                <span class="hu-script">success</span>
            </h2>

            <p class="about-us-para">
                Guided by <strong>integrity</strong>, <strong>expertise</strong>, and a
                dedication to excellence, we deliver tailored financial solutions
                that support sustainable success. We focus on understanding each
                client's unique goals and creating strategies that drive
                <strong>measurable impact</strong> over time.
            </p>

        </div>

    </div>
    <link rel="stylesheet" href="{{ asset('css/aboutus.js') }}">

</section>