@extends('layouts.app')

@section('title', 'Book Your Stay - YonJee Retreat')
@if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif


@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white shadow-2xl rounded-2xl mt-10">
    <h1 class="text-3xl font-bold text-center text-green-700 mb-6">Book Your Stay at YonJee Retreat</h1>

    <form action="{{ route('booking.submit') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="room_type" class="block font-medium text-gray-700">Room Type</label>
            <select name="room_type" id="room_type" required class="w-full p-2 border border-gray-300 rounded-xl mt-1">
                <option value="">Select a room type</option>
                <option value="standard">Standard Room</option>
                <option value="deluxe">Deluxe Room</option>
                <option value="suite">Suite</option>
            </select>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="check_in" class="block font-medium text-gray-700">Check-in Date</label>
                <input type="date" name="check_in" id="check_in" required class="w-full p-2 border border-gray-300 rounded-xl mt-1">
            </div>
            <div>
                <label for="check_out" class="block font-medium text-gray-700">Check-out Date</label>
                <input type="date" name="check_out" id="check_out" required class="w-full p-2 border border-gray-300 rounded-xl mt-1">
            </div>
        </div>

        <div>
            <label for="guests" class="block font-medium text-gray-700">Number of Guests</label>
            <input type="number" name="guests" id="guests" min="1" max="10" required class="w-full p-2 border border-gray-300 rounded-xl mt-1">
        </div>

        <div>
            <label for="name" class="block font-medium text-gray-700">Full Name</label>
            <input type="text" name="name" id="name" required class="w-full p-2 border border-gray-300 rounded-xl mt-1">
        </div>

        <div>
            <label for="email" class="block font-medium text-gray-700">Email Address</label>
            <input type="email" name="email" id="email" required class="w-full p-2 border border-gray-300 rounded-xl mt-1">
        </div>

        <div>
            <label for="phone" class="block font-medium text-gray-700">Phone Number</label>
            <input type="tel" name="phone" id="phone" required class="w-full p-2 border border-gray-300 rounded-xl mt-1">
        </div>

        <div class="text-center mt-6">
            <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-xl hover:bg-green-700 transition">Book Now</button>
        </div>
    </form>
</div>
@endsection
