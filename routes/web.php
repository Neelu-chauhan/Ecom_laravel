<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',[LoginController::class,'index'])->name('login.index');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('dashboard',[LoginController::class,'dashboard'])->name('dashboard');

Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('register',[RegisterController::class,'store'])->name('register.store');