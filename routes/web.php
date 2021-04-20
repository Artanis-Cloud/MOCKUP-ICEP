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

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

Route::get('/hall', [App\Http\Controllers\VenueController::class, 'hall'])->name('hall');

Route::get('/hotel', [App\Http\Controllers\VenueController::class, 'hotel'])->name('hotel');

Route::get('/venue/details', [App\Http\Controllers\VenueController::class, 'details'])->name('details');

Route::get('/gallery', [App\Http\Controllers\VenueController::class, 'gallery'])->name('gallery');

Route::get('/contact', [App\Http\Controllers\VenueController::class, 'contact'])->name('contact');

Route::get('/hotel/add', [App\Http\Controllers\AdminController::class, 'add_hotel'])->name('hotel.add');

Route::get('/eventspace/add', [App\Http\Controllers\AdminController::class, 'add_eventspace'])->name('eventspace.add');

Route::get('/forms', [App\Http\Controllers\AdminController::class, 'forms'])->name('forms');

Route::get('/venue/lists', [App\Http\Controllers\AdminController::class, 'list_venue'])->name('venue');

Route::post('/hotel/create', [App\Http\Controllers\VenueController::class, 'submitHotel'])->name('hotel.submit');

Route::post('/eventspace/create', [App\Http\Controllers\VenueController::class, 'submitEventSpace'])->name('eventspace.submit');

Route::post('/compare', [App\Http\Controllers\VenueController::class, 'compare'])->name('compare');

Route::post('/comparehotel', [App\Http\Controllers\VenueController::class, 'comparehotel'])->name('comparehotel');

Route::post('/deletevenue/{id}', [App\Http\Controllers\VenueController::class, 'delete'])->name('delete');
