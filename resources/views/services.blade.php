@extends("layouts.app")

@section("content")
<!-- Page Header -->
    <section class="page-header text-white text-center py-5">
      <div class="container">
        <h1 class="display-4 fw-bold">Our Services</h1>
        <p class="lead">Comprehensive Digital Marketing Solutions</p>
      </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6">
            <img
              src="https://placehold.co/600x400"
              class="img-fluid rounded shadow"
              alt="SEO Services"
            />
          </div>
          <div class="col-lg-6">
            <h3 class="mb-3">Search Engine Optimization (SEO)</h3>
            <p>
              Our SEO services help your business rank higher in search results
              and attract more organic traffic.
            </p>
            <ul>
              <li>Keyword Research & Strategy</li>
              <li>On-Page Optimization</li>
              <li>Technical SEO Audits</li>
              <li>Link Building Campaigns</li>
              <li>Local SEO for Businesses</li>
              <li>Monthly Reporting & Analytics</li>
            </ul>
            <a href="contact.html" class="btn btn-primary">Get Started</a>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 order-lg-2">
            <img
              src="https://placehold.co/600x400"
              class="img-fluid rounded shadow"
              alt="Social Media Marketing"
            />
          </div>
          <div class="col-lg-6 order-lg-1">
            <h3 class="mb-3">Social Media Marketing</h3>
            <p>
              Build your brand presence and engage with your audience across all
              major social platforms.
            </p>
            <ul>
              <li>Social Media Strategy Development</li>
              <li>Content Creation & Curation</li>
              <li>Community Management</li>
              <li>Paid Social Advertising</li>
              <li>Influencer Marketing</li>
              <li>Performance Analytics</li>
            </ul>
            <a href="contact.html" class="btn btn-primary">Get Started</a>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6">
            <img
              src="https://placehold.co/600x400"
              class="img-fluid rounded shadow"
              alt="PPC Advertising"
            />
          </div>
          <div class="col-lg-6">
            <h3 class="mb-3">Pay-Per-Click (PPC) Advertising</h3>
            <p>
              Maximize your ROI with targeted advertising campaigns that drive
              conversions.
            </p>
            <ul>
              <li>Google Ads Management</li>
              <li>Facebook & Instagram Ads</li>
              <li>Display Advertising</li>
              <li>Remarketing Campaigns</li>
              <li>Landing Page Optimization</li>
              <li>A/B Testing & Optimization</li>
            </ul>
            <a href="contact.html" class="btn btn-primary">Get Started</a>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 order-lg-2">
            <img
              src="https://placehold.co/600x400"
              class="img-fluid rounded shadow"
              alt="Content Marketing"
            />
          </div>
          <div class="col-lg-6 order-lg-1">
            <h3 class="mb-3">Content Marketing</h3>
            <p>
              Create compelling content that attracts, engages, and converts
              your target audience.
            </p>
            <ul>
              <li>Content Strategy Development</li>
              <li>Blog Writing & Management</li>
              <li>Video Content Creation</li>
              <li>Infographic Design</li>
              <li>Email Marketing Campaigns</li>
              <li>Content Distribution</li>
            </ul>
            <a href="contact.html" class="btn btn-primary">Get Started</a>
          </div>
        </div>
      </div>
    </section>

    @include("layouts.parts.cta", [
        "header" => "Ready to Boost Your Online Presence?",
        "paragraph" => "Let's create a custom digital marketing strategy for your business.",
        "button" => "Get a Free Consultation"
    ])
@endsection