<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ListBookController;
use App\Http\Controllers\TravelCompanyController;
use App\Http\Controllers\TravelTripController;
use App\Models\TravelTrip;

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

Route::group(['middleware' => ['auth']], function () {
    // Route for user company
    Route::group(['prefix' => 'my-company', 'middleware' => ['check.company']], function () {
        Route::get('/', function () {
            return redirect('/my-company/trip');
        });
        Route::resource('/trip', TravelTripController::class);
        Route::resource('/profile', TravelCompanyController::class)->only(['index', 'update']);
        Route::resource('/list-booking', ListBookController::class);
        Route::resource('booking', BookingController::class)->only(['confirmBooking']);
    });

    // Route for user non company
    Route::resource('booking', BookingController::class)->except(['confirmBooking']);
    Route::group(['prefix' => 'booking'], function () {
        Route::get('pre-book/{id}', [BookingController::class, 'preBooking'])->name('pre-booking');
        Route::post('payment/{id}', [BookingController::class, 'storePayment'])->name('payment');
        Route::post('cancel/{id}', [BookingController::class, 'cancelBooking'])->name('cancel-booking');
        Route::post('confirm/{id}', [BookingController::class, 'confirmBooking'])->name('confirm-booking');
    });
    Route::get('register-company', [TravelCompanyController::class, 'register'])->name('register-company');
    Route::post('register-company', [TravelCompanyController::class, 'store'])->name('register-company.process');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', function () {
    return view('landing_page.index');
});
Route::get('/trip', function () {
    return view('landing_page.trip', [
        'trips' => TravelTrip::all()
    ]);
});
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('login.process');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'store'])->name('register.process');
