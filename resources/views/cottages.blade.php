@extends('layouts.app')

@section('title', 'Home | Yonjee Retreat')

@section('content')
<div class="container my-5" style="max-width: 700px;">

  <!-- Carousel -->
  <div id="treeHouseCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner rounded-3 shadow-sm">
      <div class="carousel-item active">
        <img src="{{ asset('images/yjn2.jpeg') }}" class="d-block w-100" alt=" House 1" style="height: 400px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/yjn2.jpeg') }}" class="d-block w-100" alt=" House 2" style="height: 400px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/yjn2.jpeg') }}" class="d-block w-100" alt=" House 3" style="height: 400px; object-fit: cover;">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#treeHouseCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#treeHouseCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Room details -->
  <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); font-family: 'Segoe UI', sans-serif; color: #333;">
    <h3 class="mb-3" style="font-family: 'Gilda Display', serif;">Yonjee Cottages</h3>
    <p><strong>Experience:</strong> Stay high among the trees with stunning natural views.</p>
    <p><strong>Check-in Time:</strong> 12:00 PM onwards</p>
    <p><strong>Check-out Time:</strong> By 11:00 AM</p>
    <p><strong>Amenities:</strong> Cozy beds, private balcony, nature trails, and more.</p>
  </div>

  <!-- Book Now button -->
  <div class="text-center mt-4">
    <a href="{{ url('/booking') }}" class="btn btn-success btn-lg" style="font-family: 'Gilda Display', serif; padding: 12px 40px;">
      Book Now
    </a>
  </div>
</div>

<!-- Bootstrap 5 JS dependencies (if not included already) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
