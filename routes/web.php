<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', '/login', 301);

/*
|--------------------------------------------------------------------------
| "Guest" Middleware
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function(){

  // Login route's
  Route::get('/login', [AuthController::class, 'index'])->name('login');
  Route::post('/login', [AuthController::class, 'authenticated'])->name('login');
  
  // Register route's
  Route::get('/register', [AuthController::class, 'register'])->name('register');
  Route::post('/register',[AuthController::class, 'store_user'])->name('store_user');
  
  // OTP route's
  Route::get('/otp', [AuthController::class, 'otp'])->name('otp');
  Route::post('/otp', [AuthController::class, 'store_otp'])->name('store_otp');

});

/*
|--------------------------------------------------------------------------
| "Auth" Middleware
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function(){

  // Dashboard route's
  Route::get('/dashboard', function() {
    return view('layouts.dashboard');
  })->name('dashboard')->middleware('verified');

  // Verify email route's
  Route::get('/email/verify',[AuthController::class, 'email_verify'])->name('verification.notice');
  Route::get('/email/verify/{id}/{hash}',[AuthController::class, 'verification'])->middleware('signed')->name('verification.verify');


  // Logout
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});