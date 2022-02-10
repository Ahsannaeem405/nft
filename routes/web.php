<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loa
ded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // dd(123);
//     return view('user.index');
// });

Route::get('/', [App\Http\Controllers\UpcomingController::class, 'view_index']);

Route::get('/detail', [App\Http\Controllers\UpcomingController::class, 'detail']);

Route::post('/newsletter/send', [App\Http\Controllers\UpcomingController::class, 'newsletter']);



Route::get('/contact', function () {
    return view('user.contact');
});


Route::get('/newsletter', function () {
    return view('user.newsletter');
});


Route::post('/upcoming/save', [App\Http\Controllers\UpcomingController::class, 'create']);


Route::get('/upcoming', [App\Http\Controllers\UpcomingController::class, 'upcoming']);

Route::post('/add/contact', [App\Http\Controllers\UpcomingController::class, 'add_contact']);




Route::group(['middleware' => 'auth'], function () {

    Route::prefix('/admin')->group(function () {
// Route::prefix('/admin')->group(['middleware' => 'auth'], function () {

   Route::get('/', [App\Http\Controllers\UpcomingController::class, 'index']);
   Route::get('/upcoming/view', [App\Http\Controllers\UpcomingController::class, 'show']);
   Route::get('/approved/{id}', [App\Http\Controllers\UpcomingController::class, 'approved']);
   Route::get('/featured_approve/{id}', [App\Http\Controllers\UpcomingController::class, 'featured_approve']);

   Route::get('/featured_disapprove/{id}', [App\Http\Controllers\UpcomingController::class, 'featured_disapprove']);
   Route::get('/disapproved/{id}', [App\Http\Controllers\UpcomingController::class, 'disapproved']);

   Route::get('/edit/profile', [App\Http\Controllers\UpcomingController::class, 'edit']);

   Route::get('/featured', [App\Http\Controllers\UpcomingController::class, 'featured']);

   Route::post('/send/mail', [App\Http\Controllers\UpcomingController::class, 'mail']);







   Route::post('/update', [App\Http\Controllers\UpcomingController::class, 'update']);
});
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/overview/{slug}', [App\Http\Controllers\UpcomingController::class, 'overview']);
Route::get('/featured/overview/{id}', [App\Http\Controllers\UpcomingController::class, 'featured_overview']);
