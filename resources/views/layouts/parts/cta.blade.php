<!-- CTA Section -->
    <section class="bg-primary text-white py-5">
      <div class="container text-center">
        <h2 class="mb-4">{{ $header }}</h2>
        <p class="lead mb-4">
          {{ $paragraph }}
        </p>
        <a href="{{ $buttonurl ?? '/contact' }}" class="btn btn-light btn-lg">{{ $button }}</a>
      </div>
    </section>