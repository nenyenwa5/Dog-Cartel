<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Home Page
Route::get('/', function () {
    return view('guestViews.welcome');
})->name('home');

// About Us
Route::get('/about-us', function () {
    return view('guestViews.about-us');
})->name('about-us');

// Contact Us
Route::get('/contact-us', function () {
    return view('guestViews.contact-us');
})->name('contact-us');

// Cartel
Route::get('/cartel', function () {
    return view('guestViews.cartel');
})->name('cartel');

// Dog Details
Route::get('/details', function () {
    return view('guestViews.details');
})->name('dog-details');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
