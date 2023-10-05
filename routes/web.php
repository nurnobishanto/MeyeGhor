<?php

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


Route::get('/',[\App\Http\Controllers\WordPress\HomeController::class,'home'])->name('home');
Route::get('/profile',[\App\Http\Controllers\WordPress\ProfileController::class,'profile'])->name('profile');
Route::get('/login',[\App\Http\Controllers\WordPress\AuthController::class,'login'])->name('login');
Route::get('/logout',[\App\Http\Controllers\WordPress\AuthController::class,'logout'])->name('logout');
Route::get('/signup',[\App\Http\Controllers\WordPress\AuthController::class,'signup'])->name('signup');
Route::post('/login-check',[\App\Http\Controllers\WordPress\AuthController::class,'login_check'])->name('login_check');
Route::post('/signup-check',[\App\Http\Controllers\WordPress\AuthController::class,'signup_check'])->name('signup_check');

//Category
Route::get('/shop',[\App\Http\Controllers\WordPress\ShopController::class,'shop'])->name('shop');
Route::get('/categories',[\App\Http\Controllers\WordPress\CategoryController::class,'categories'])->name('categories');
Route::get('/category/{id}',[\App\Http\Controllers\WordPress\CategoryController::class,'category'])->name('category');

Route::get('/profile/me',[\App\Http\Controllers\WordPress\ProfileController::class,'my_profile'])->name('my_profile');
