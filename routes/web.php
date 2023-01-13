<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [\App\Http\Controllers\MenuController::class, 'index']);

 Route::prefix('admin')->group(function () {
     Route::get('/', function () {
         return redirect('/login');
     });
//     Route::get('/login', [AuthController::class, 'login'])->name('login');
     Route::get('/dashboard', [\App\Http\Controllers\UserProfileController::class, 'dashboard']);
     Route::get('/user-profile', [\App\Http\Controllers\UserProfileController::class, 'user_profile'])->name('user_profile');
     Route::resource('/products', \App\Http\Controllers\ProductController::class);
     Route::resource('/categories', \App\Http\Controllers\CategoryController::class);

 });
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_store'])->name('register_store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

