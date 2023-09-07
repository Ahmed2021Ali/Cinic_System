<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\UserController;
use App\Http\Controllers\back\DashboardController;
use App\Http\Controllers\back\DoctorController;
use App\Http\Controllers\back\MajorController;
use App\Http\Controllers\back\BookingController;
use App\Http\Controllers\back\ContactUSController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth','Check_Type')->prefix('Admin.dashboard')->group(function(){

    Route::resource('doctor',DoctorController::class);
    Route::resource('user',UserController::class);
    Route::resource('major',MajorController::class);

    Route::get('/',[DashboardController::class,'dashboard'])->name('dashbord');

    Route::group(['prefix'=>'bookings','as'=>'bookings.'],function(){
        Route::get('/',[BookingController::class,'index'])->name('index');
        Route::delete('/destroy/{id}',[BookingController::class,'destroy'])->name('destroy');
    });

    Route::group(['prefix'=>'contact_us','as'=>'contact_us.'],function(){
        Route::get('/',[ContactUSController::class,'index'])->name('index');
        Route::delete('/destroy/{id}',[ContactUSController::class,'destroy'])->name('destroy');
    });

});
