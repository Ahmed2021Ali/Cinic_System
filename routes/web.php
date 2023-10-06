<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::post('/homepage/login',[LoginController::class,'login'])->name('Login');
Route::post('/',[LoginController::class,'logout'])->name('logout');



require __DIR__.'/backend/admin.php';
require __DIR__.'/frontend/user.php';

