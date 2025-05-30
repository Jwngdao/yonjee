<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    public function showForm()
    {
        return view('booking');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'room_type' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'guests' => 'required|integer|min:1',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

         Booking::create($validated);

        return redirect()->route('booking.form')->with('success', 'Booking request submitted successfully!');
    }
}
