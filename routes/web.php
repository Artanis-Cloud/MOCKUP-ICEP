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

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/hall', [App\Http\Controllers\VenueController::class, 'hall'])->name('hall');

Route::get('/hotel', [App\Http\Controllers\VenueController::class, 'hotel'])->name('hotel');

Route::get('/vanue/add', [App\Http\Controllers\HomeController::class, 'add_vanue'])->name('vanue.add');

Route::post('/vanue/create', [App\Http\Controllers\HomeController::class, 'add_vanue'])->name('vanue.create');



