<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrafficController;
use App\Http\Controllers\RambuController;
use App\Http\Controllers\TlightController;
use App\Http\Controllers\MapsController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('traffic', TrafficController::class);
Route::resource('rambu', RambuController::class);
Route::resource('tlight', TlightController::class);
Route::resource('maps', MapsController::class);


// Redirect root to home
Route::get('/', function () {
    return redirect()->route('login');
});