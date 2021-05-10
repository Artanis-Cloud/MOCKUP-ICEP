<?php

use Illuminate\Support\Facades\Route;
use App\Models\Announcement;

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
    $announcement =Announcement::get();
    return view('welcome',compact('announcement'));
})->name('welcome');

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\UserController::class, 'index'])->name('homepage');

Route::get('/hall', [App\Http\Controllers\VenueController::class, 'hall'])->name('hall');

Route::get('/hotel', [App\Http\Controllers\VenueController::class, 'hotel'])->name('hotel');

Route::get('/hotel-comparison', [App\Http\Controllers\VenueController::class, 'comparisonHotel'])->name('comparison-hotel');

Route::get('/eventspace-comparison', [App\Http\Controllers\VenueController::class, 'comparisonEventSpace'])->name('comparison-eventspace');

Route::get('/venue/details', [App\Http\Controllers\VenueController::class, 'details'])->name('details');

Route::get('/gallery', [App\Http\Controllers\VenueController::class, 'gallery'])->name('gallery');

Route::get('/contact', [App\Http\Controllers\VenueController::class, 'contact'])->name('contact');

Route::post('/compare-hotel', [App\Http\Controllers\VenueController::class, 'compareHotel'])->name('compareHotel');

Route::post('/compare-event-space', [App\Http\Controllers\VenueController::class, 'compareEventSpace'])->name('compareEventSpace');




//Announcement
Route::middleware([CheckRole::class])->group(function(){


    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

    Route::get('/hotel/add', [App\Http\Controllers\AdminController::class, 'add_hotel'])->name('hotel.add');

    Route::get('/eventspace/add', [App\Http\Controllers\AdminController::class, 'add_eventspace'])->name('eventspace.add');

    Route::get('/forms', [App\Http\Controllers\AdminController::class, 'forms'])->name('forms');

    Route::get('/venue/lists', [App\Http\Controllers\AdminController::class, 'list_venue'])->name('venue');

    Route::get('/user-list', [App\Http\Controllers\AdminController::class, 'user'])->name('user');

    Route::get('/user-add', [App\Http\Controllers\AdminController::class, 'add_user'])->name('user_add');

    Route::post('/update-profile-update', [App\Http\Controllers\AdminController::class, 'update_profile'])->name('admin.update-profile-update');

    Route::get('/update-profile', [App\Http\Controllers\AdminController::class, 'update_profile_admin'])->name('admin.update-profile');

    Route::get('/audit-trail', [App\Http\Controllers\AdminController::class, 'viewAuditList'])->name('admin.audit-trail.audit-trail-log');

    Route::get('/audit-trail-filter', [App\Http\Controllers\AdminController::class, 'viewAuditListFilter'])->name('admin.audit-trail.audit-trail-log-filter');

    Route::post('/hotel/create', [App\Http\Controllers\VenueController::class, 'submitHotel'])->name('hotel.submit');

    Route::post('/eventspace/create', [App\Http\Controllers\VenueController::class, 'submitEventSpace'])->name('eventspace.submit');

    Route::post('/compare', [App\Http\Controllers\VenueController::class, 'compare'])->name('compare');

    Route::post('/deletevenue/{id}', [App\Http\Controllers\VenueController::class, 'delete'])->name('delete');

    Route::post('/user-admin-add', [App\Http\Controllers\AdminController::class, 'addUser'])->name('useradd');

    Route::get('/admin/others/announcement/list', [App\Http\Controllers\AnnouncementController::class, 'viewAnnouncementList'])->name('admin.announcement.list');

    Route::get('/admin/others/announcement/create', [App\Http\Controllers\AnnouncementController::class, 'createAnnouncement'])->name('admin.others.announcement.create');

    // Route::get('/admin/others/announcement/edit', [App\Http\Controllers\AnnouncementController::class, 'editAnnouncement'])->name('admin.announcement.edit');

    Route::post('/admin/others/announcement/add/save', [App\Http\Controllers\AnnouncementController::class, 'addAnnouncement'])->name('admin.others.announcement.add.save');

    Route::post('/admin/others/announcement/delete/', [App\Http\Controllers\AnnouncementController::class, 'deleteAnnouncement'])->name('admin.others.announcement.delete');


    //add room testing
    Route::get('/room', function () {
        return view('/admin/homelivewire');
        });
});
