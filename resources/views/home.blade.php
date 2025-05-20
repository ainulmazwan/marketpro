@extends("layouts.app")

@section("content")
<!-- Hero Section -->
    <section class="hero-section text-white text-center py-5">
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-12">
            <h1 class="display-3 fw-bold mb-4">Welcome to MarketPro Agency</h1>
            <p class="lead mb-5">Your Partner in Digital Growth and Success</p>
            <a href="services.html" class="btn btn-primary btn-lg me-3"
              >Our Services</a
            >
            <a href="contact.html" class="btn btn-outline-light btn-lg"
              >Get Started</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Services Overview -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row g-4">
          @include("layouts.parts.homeservice", [
            "header" => "SEO Optimization",
            "paragraph" => "Boost your search rankings and drive organic traffic with our expert SEO strategies."
          ])
          @include("layouts.parts.homeservice", [
            "header" => "Social Media Marketing",
            "paragraph" => "Engage your audience and build brand awareness across all social platforms."
          ])
          @include("layouts.parts.homeservice", [
            "header" => "PPC Advertising",
            "paragraph" => "Maximize ROI with targeted pay-per-click campaigns that convert."
          ])
        </div>
      </div>
    </section>

    @include("layouts.parts.cta", [
        "header" => "Ready to Grow Your Business?",
        "paragraph" => "Let's discuss how we can help you achieve your marketing goals.",
        "button" => "Contact Us Today"
    ])
@endsection