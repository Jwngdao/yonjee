<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class,'aboutus']);
Route::get('/huts',[HomeController::class,'huts']);
Route::get('/facilities',[HomeController::class,'facilities']);
Route::get('/explorer',[HomeController::class,'explorer']);
Route::get('/contact-us',[HomeController::class,'contactus']);
Route::get('/book-room', [BookingController::class, 'showForm'])->name('booking.form');
Route::post('/book-room', [BookingController::class, 'submitForm'])->name('booking.submit');

