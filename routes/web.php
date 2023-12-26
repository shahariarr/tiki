<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TripController;
use App\Models\Trip;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');

Route::get('/search_trip',[TripController::class,'search_trip'])->name('search_trip');
Route::post('/search_trip',[TripController::class,'get_trip'])->name('get_trip');
Route::get('/book_trip/{id}',[TripController::class,'book_trip'])->name('book_trip');
Route::post('/book_trip',[TripController::class,'book_trip_store'])->name('book_trip_store');

Route::resource('trip',TripController::class);

Route::get('/profile',[HomeController::class,'profile'])->name('profile');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/profile', [HomeController::class, 'showProfile'])->name('profile');
