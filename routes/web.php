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

Route::group(['middleware' => ['auth', 'active_user']], function() {

Route::get('/homepage', [App\Http\Controllers\UserController::class, 'index'])->name('homepage');

Route::get('/eventspace', [App\Http\Controllers\VenueController::class, 'eventspace'])->name('eventspace');

Route::get('/hotel', [App\Http\Controllers\VenueController::class, 'hotel'])->name('hotel');

Route::get('/hotel-comparison', [App\Http\Controllers\VenueController::class, 'comparisonHotel'])->name('comparison-hotel');

Route::get('/eventspace-comparison', [App\Http\Controllers\VenueController::class, 'comparisonEventSpace'])->name('comparison-eventspace');

Route::get('/venue/details', [App\Http\Controllers\VenueController::class, 'details'])->name('details');

Route::get('/gallery', [App\Http\Controllers\VenueController::class, 'gallery'])->name('gallery');

Route::get('/contact', [App\Http\Controllers\VenueController::class, 'contact'])->name('contact');

Route::post('/compare-hotel', [App\Http\Controllers\VenueController::class, 'compareHotel'])->name('compareHotel');

Route::post('/compare-event-space', [App\Http\Controllers\VenueController::class, 'compareEventSpace'])->name('compareEventSpace');

Route::post('/room-details', [App\Http\Controllers\VenueController::class, 'roomDetail'])->name('room_detail');

Route::post('/eventspace-details', [App\Http\Controllers\VenueController::class, 'eventspaceDetail'])->name('eventspace_detail');

Route::get('/eventspace-detail/{id}', [App\Http\Controllers\VenueController::class, 'eventspaceDetails'])->name('eventspace_details');

Route::get('/hotelroom-filtered', [App\Http\Controllers\VenueController::class, 'roomFilter'])->name('room_filter');

Route::get('/eventspace-filtered', [App\Http\Controllers\VenueController::class, 'eventspaceFilter'])->name('eventspace_filter');





//Announcement
Route::middleware([CheckRole::class])->group(function(){


    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

    Route::get('/hotel/add', [App\Http\Controllers\AdminController::class, 'add_hotel'])->name('hotel.add');

    Route::get('/eventspace/add', [App\Http\Controllers\AdminController::class, 'add_eventspace'])->name('eventspace.add');

    Route::get('/hotel_edit/{id}', [App\Http\Controllers\VenueController::class, 'hotel_edit'])->name('hotel_edit');

    Route::post('/hotel_update/{id}', [App\Http\Controllers\VenueController::class, 'hotel_update'])->name('hotel_update');

    Route::get('/room_edit/{id}', [App\Http\Controllers\VenueController::class, 'room_edit'])->name('room_edit');

    Route::post('/room_update/{id}', [App\Http\Controllers\VenueController::class, 'room_update'])->name('room_update');

    Route::get('/eventspace_edit/{id}', [App\Http\Controllers\VenueController::class, 'eventspace_edit'])->name('eventspace_edit');

    Route::post('/eventspace_update/{id}', [App\Http\Controllers\VenueController::class, 'eventspace_update'])->name('eventspace_update');

    Route::get('/forms', [App\Http\Controllers\AdminController::class, 'forms'])->name('forms');

    Route::get('/venue/lists', [App\Http\Controllers\AdminController::class, 'list_venue'])->name('venue');

    Route::post('/admin/hotel/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteHotel'])->name('hotel.delete');

    Route::post('/admin/hotelroom/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteHotelRoom'])->name('hotelroom.delete');

    Route::post('/admin/eventspace/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteEventSpace'])->name('eventspace.delete');

    Route::get('/user-list', [App\Http\Controllers\AdminController::class, 'user'])->name('user');

    Route::get('/user-deactive/{id}', [App\Http\Controllers\AdminController::class, 'userDelete'])->name('users.deactivate');

    Route::post('/users/id={id}', [App\Http\Controllers\AdminController::class, 'updateUserRole'])->name('user.update');

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

    Route::get('/admin/announcement/list', [App\Http\Controllers\AnnouncementController::class, 'viewAnnouncementList'])->name('admin.announcement.list');

    Route::get('/admin/announcement/create', [App\Http\Controllers\AnnouncementController::class, 'createAnnouncement'])->name('admin.announcement.create');

    // Route::get('/admin/others/announcement/edit', [App\Http\Controllers\AnnouncementController::class, 'editAnnouncement'])->name('admin.announcement.edit');

    Route::post('/admin/announcement/add/save', [App\Http\Controllers\AnnouncementController::class, 'addAnnouncement'])->name('admin.announcement.add.save');

    Route::post('/admin/announcement/delete/', [App\Http\Controllers\AnnouncementController::class, 'deleteAnnouncement'])->name('admin.announcement.delete');


    //add room testing
    Route::get('/room', function () {
        return view('/admin/homelivewire');
        });
});
});
