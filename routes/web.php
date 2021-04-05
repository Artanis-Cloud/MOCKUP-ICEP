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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hall', [App\Http\Controllers\VenueController::class, 'hall'])->name('hall');

Route::get('/hotel', [App\Http\Controllers\VenueController::class, 'hotel'])->name('hotel');

Route::get('/gallery', [App\Http\Controllers\VenueController::class, 'gallery'])->name('gallery');

Route::get('/contact', [App\Http\Controllers\VenueController::class, 'contact'])->name('contact');

Route::get('/venue/add', [App\Http\Controllers\HomeController::class, 'add_venue'])->name('venue.add');

Route::post('/venue/create', [App\Http\Controllers\VenueController::class, 'submit'])->name('venue.submit');



