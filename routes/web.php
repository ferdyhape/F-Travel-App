<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    Route::get('/', function () {
        return view('landing_page.index');
    });
    Route::get('/trip', function () {
        return view('landing_page.trip', [
            'trips' => TravelTrip::all()
        ]);
    });

    Route::group(['middleware' => ['check.company']], function () {
        Route::resource('/my-company/trip', TravelTripController::class);
        Route::get('/my-company', function () {
            return redirect('/my-company/trip');
        });
    });
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('login.process');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'store'])->name('register.process');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
