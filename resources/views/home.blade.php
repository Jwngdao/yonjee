@extends('layouts.app')

@section('title', 'Home | Yonjee Retreat')

@section('content')


<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000" data-bs-wrap="true">


  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="hero-slide" style="background-image: url('{{ asset('images/ynj1.jpg') }}');">
        <div class="carousel-caption d-none d-md-block">
          <h1>Welcome to Yongjee Retreat Farm Stay</h1>
          <p>Relax in our luxury cottages.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="hero-slide" style="background-image: url('{{ asset('images/ynj2.jpg') }}');">
        <div class="carousel-caption d-none d-md-block">
          <h1>Open Lawn</h1>
          <p>View of Lawn and sitting place of Yonjee Retreat Farmstay</p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="hero-slide" style="background-image: url('{{ asset('images/ynj3.jpg') }}');">
        <div class="carousel-caption d-none d-md-block">
        <h1>Experience Nature</h1>
        <p>Wake up to the sounds of birds and Mountains.</p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="hero-slide" style="background-image: url('{{ asset('images/yj4.jpg') }}');">
        <div class="carousel-caption d-none d-md-block">
          <h1>Bonfire</h1>
          <p>Enjoy the Bonfire with Friends and Family.</p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="hero-slide" style="background-image: url('{{ asset('images/yj5.jpg') }}');">
        <div class="carousel-caption d-none d-md-block">
          <h1>Duplex Huts</h1>
          <p>View of Duplex Huts of Yonjee Retreat Farmstay.</p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="hero-slide" style="background-image: url('{{ asset('images/yj6.jpg') }}');">
        <div class="carousel-caption d-none d-md-block">
        <h1>Duplex Huts</h1>
        <p>View of Duplex Huts of Yonjee Retreat Farmstay.</p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="hero-slide" style="background-image: url('{{ asset('images/rooms.jpg') }}');">
        <div class="carousel-caption d-none d-md-block">
        <h1>Comfortable Rooms</h1>
        <p>Enjoy the cozy rooms.</p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="hero-slide" style="background-image: url('{{ asset('images/yj7.jpg') }}');">
        <div class="carousel-caption d-none d-md-block">
          <h1>Night View</h1>
          <p>Enjoy the night with the Nature</p>
        </div>
      </div>
    </div>

    <!-- Add more slides as needed -->
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<section class="services">
  <h2>Huts & Rooms</h2>
</section>

<script>
  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.3 });

  const servicesSection = document.querySelector('.services');
  if (servicesSection) {
    sectionObserver.observe(servicesSection);
  }
</script>

<section class="room-list">
            <div class="room-card">
                <img src="{{ asset('images/yj1.jpg') }}" alt="Photo 2" width="300">
                <h3>Tree House</h3>
                <p>Be in Nature</p>
            </div>
            <div class="room-card" >
                <img src="{{ asset('images/rooms.jpg') }}" alt="Photo 2" width="300">
                <h3>Bedrooms</h3>
                <p>Cozy Stay</p>
            </div>
            <div class="room-card">
                <img src="{{ asset('images/yj5.jpg') }}" alt="Photo 2" width="300">
                <h3>Duplex Huts</h3>
                <p>Luxury Duplex Huts</p>
            </div>

            <div class="room-card">
                <img src="{{ asset('images/rooms2.jpg') }}" alt="Photo 2" width="300">
                <h3>Bedrooms</h3>
                <p>Comfortable Rooms</p>
            </div>
 </section>
 <script>
  const cards = document.querySelectorAll('.room-card');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target); // Optional: Stop observing after animation
      }
    });
  }, {
    threshold: 0.3
  });

  cards.forEach(card => observer.observe(card));
</script>


<section class="amenities">
  <ul>
    <li> <h2>Amenities</h2></li>
    <li>🛏️ Comfortable Rooms</li>
    <li>🔥 Bonfire & BBQ</li>
    <li>🍽️ Multi-cuisine Restaurant</li>
    <li>🚗 Free Parking</li>
  </ul>
</section>

<script>
  const amenitiesObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        amenitiesObserver.unobserve(entry.target); // optional: stop after animation
      }
    });
  }, { threshold: 0.3 });

  const amenitiesSection = document.querySelector('.amenities');
  if (amenitiesSection) {
    amenitiesObserver.observe(amenitiesSection);
  }
</script>


<section id="gallery" class="photo-gallery">
    <h2>Gallery</h2>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="{{ asset('images/yj1.jpg') }}" alt="Photo 1">
            <br>
            <h3 class="text-center">Huts</h3>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/yj2.jpg') }}" alt="Photo 2">
            <br>
            <h3 class="text-center">Lawn</h3>
        </div>

        <div class="gallery-item">
            <img src="{{ asset('images/rooms.jpg') }}" alt="Rooms">
            <br>
            <h3 class="text-center">Bedroom</h3>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/rooms2.jpg') }}" alt="Photo 3">
            <br>
            <h3 class="text-center">Bedroom</h3>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/yj4.jpg') }}" alt="Photo 4">
            <br>
            <h3 class="text-center">Bonfire</h3>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/washrooms2.jpeg') }}" alt="Washroom">
            <br>
            <h3 class="text-center">Washroom</h3>
        </div>
    </div>
</section>

<script>
  const galleryObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.3 });

  document.querySelectorAll('.gallery-item').forEach(item => {
    galleryObserver.observe(item);
  });
</script>

@endsection
