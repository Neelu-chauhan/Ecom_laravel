<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Category\CategoryTypeController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',[LoginController::class,'index'])->name('login.index');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('dashboard',[LoginController::class,'dashboard'])->name('dashboard');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('register',[RegisterController::class,'store'])->name('register.store');


// Category

Route::controller(CategoryTypeController::class)->prefix('category-type')->group(function(){
    Route::get('index', 'index')->name('category-type.index');

});