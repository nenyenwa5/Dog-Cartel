<?php

use App\Http\Controllers\UserProfileController;
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
// Welcome Page
Route::get('/', function () {
    return view('guestViews.welcome');
})->name('welcome');

// Home page
Route::get('/home', 'HomeController@index')->name('home');

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

// // Create User Profile
// Route::get('/create-profile', function () {
//     return view('userViews.create-profile');
// })->name('create-profile');

 Route::get('/userProfile', [UserProfileController::class, 'create']);

 Route::post('/userProfile', [UserProfileController::class, 'store']);
// Route::resource('/user_profile', UserProfileController::class);

// View User Profile
Route::get('/view-profile', function () {
    return view('userViews.view-profile');
})->name('profile');

// Dog gallery
Route::get('/dog-gallery', function () {
    return view('userViews.dog-gallery');
})->name('dog-gallery');

// Upload a Dog
Route::get('/upload-a-dog', function () {
    return view('userViews.upload-a-dog');
})->name('upload-a-dog');

// Find a Cross
Route::get('/find-a-cross', function () {
    return view('userViews.find-a-cross');
})->name('find-a-cross');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
