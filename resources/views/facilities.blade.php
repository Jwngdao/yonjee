@extends('layouts.app')

@section('title', 'Home | Yonjee Retreat')

@section('content')
<section id="facilities" class="container my-5">
    <h2 class="text-center mb-4" style="font-family: 'Gilda Display', serif;">Your Luxury Home at Yonjee Retreat</h2>
    <p class="text-center mb-5">Yonjee Retreat Farm Stay offers the following amenities:</p>

    <div class="row gy-5">
        @foreach([
            ['img' => 'breakfast.jpg', 'title' => 'Complimentary Breakfast', 'desc' => 'Enjoy a delicious breakfast included every morning.'],
            ['img' => 'wifi.jpg', 'title' => 'Free WiFi', 'desc' => 'Stay connected with high-speed internet access.'],
            ['img' => 'bonfire.jpg', 'title' => 'Bonfire on Request', 'desc' => 'Request a bonfire for cozy evenings.'],
            ['img' => 'sightseeing.jpg', 'title' => 'Sightseeing Trips', 'desc' => 'Explore local spots with organized tours.'],
            ['img' => 'picnic.jpg', 'title' => 'Picnic Arrangements', 'desc' => 'Picnics can be arranged on request.'],
            ['img' => 'trekking.jpg', 'title' => 'Trekking Trails', 'desc' => 'Enjoy serene nature trails and treks.'],
        ] as $facility)
        <div class="col-md-6 d-flex align-items-center facility-box">
            <img src="{{ asset('images/facilities/' . $facility['img']) }}" alt="{{ $facility['title'] }}" class="img-fluid me-3 facility-img">
            <div>
                <h5>{{ $facility['title'] }}</h5>
                <p>{{ $facility['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection


