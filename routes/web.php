<?php

use App\Models\ProductModel;
use App\Models\ProductListModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SubcategryController;
use App\Http\Controllers\ProductListController;
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

// Category type

Route::controller(CategoryTypeController::class)->prefix('category-type/')->group(function(){
    Route::get('index', 'index')->name('category-type.index');
    Route::get('create', 'create')->name('category-type.create');
    Route::post('store', 'store')->name('category-type.store');
    Route::get('edit/{id}', 'edit')->name('category-type.edit');
    Route::post('update/{id}', 'update')->name('category-type.update');
    Route::get('destroy/{id}', 'destroy')->name('category-type.destroy');

});

// sub category 
Route::controller(SubcategryController::class)->prefix('subcat/')->group(function(){
    Route::get('index', 'index')->name('subcat.index');
    Route::get('create', 'create')->name('subcat.create');
    Route::post('store', 'store')->name('subcat.store');
    Route::get('edit/{id}', 'edit')->name('subcat.edit');
    Route::post('update/{id}', 'update')->name('subcat.update');
    Route::get('destroy/{id}', 'destroy')->name('subcat.destroy');
});
// product type 
Route::controller(ProductController::class)->prefix('product-type/')->group(function(){
    Route::get('index', 'index')->name('product-type.index');
    Route::get('create', 'create')->name('product-type.create');
    Route::post('store', 'store')->name('product-type.store');
    Route::get('edit/{id}', 'edit')->name('product-type.edit');
    Route::post('update/{id}', 'update')->name('product-type.update');
    Route::get('destroy/{id}', 'destroy')->name('product-type.destroy');
});

// product list

Route::controller(ProductListController::class)->prefix('product/')->group(function(){
    Route::get('index', 'index')->name('product.index');
    Route::get('create', 'create')->name('product.create');
    Route::post('store', 'store')->name('product.store');
    Route::get('edit/{id}', 'edit')->name('product.edit');
    Route::post('update/{id}', 'update')->name('product.update');
    Route::get('destroy/{id}', 'destroy')->name('product.destroy');
    Route::get('color/{id}', 'color')->name('product.color');
});