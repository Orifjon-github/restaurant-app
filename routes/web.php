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
         return redirect('admin/login');
     });
     Route::get('/login', [AuthController::class, 'login'])->name('login');
//     Route::get('/register', [AuthController::class, 'register'])->name('register');
//     Route::post('/register', [AuthController::class, 'register_store'])->name('register_store');
     Route::view('/dashboard', 'admin.index');
     Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
 });

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

