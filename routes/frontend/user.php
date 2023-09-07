<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\frontend\booking\BookingsController;
use App\Http\Controllers\frontend\contact_us\ContactController;
use App\Http\Controllers\frontend\doctors_major\Major_doctorsController;

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



Route::get('/',[HomepageController::class,'Home'])->name('HomePage');



Route::group(['prefix' => 'homepage'], function() {

    Route::get('/Doctor/{city?}',[HomepageController::class,'Doctor'])->name('DoctorPage');
    Route::get('/Booking',[HomepageController::class,'Booking'])->name('BookingPage');
    Route::get('/Major',[HomepageController::class,'Major'])->name('MajorPage');
    Route::get('/Login',[HomepageController::class,'Login'])->name('LoginPage');
    Route::get('/Contact_Us',[HomepageController::class,'Contact_Us'])->name('Contact_Us');
    Route::get('/Registration',[HomepageController::class,'Registration'])->name('RegistrationPage');

    Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

    Route::group(['prefix' => 'Booking','as'=>'booking.'], function() {
        Route::get('/create/{id}',[BookingsController::class,'create'])->name('create');
        Route::post('/store/{id}',[BookingsController::class,'store'])->name('store');
        });

    Route::get('/index/{id}',[Major_doctorsController::class,'index'])->name('major_doctors.index');

    });
