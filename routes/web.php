<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class,'aboutus']);
Route::get('/huts',[HomeController::class,'huts']);
Route::get('/contact-us',[HomeController::class,'contactus']);

