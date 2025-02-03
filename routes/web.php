<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\front\HomeController;
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



Route::middleware('user.guest')->group(function () {
    Route::get('/', [App\Http\Controllers\front\HomeController::class, 'index']);
    Route::get('/product-list', [App\Http\Controllers\front\HomeController::class, 'productlist']);
    Route::get('/product-details', [App\Http\Controllers\front\HomeController::class, 'productdetails']);
    Route::post('/login', [App\Http\Controllers\front\HomeController::class, 'login'])->name('Login');
    
});


Route::middleware('admin.guest')->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\admin\AuthController::class, 'index']);
    Route::post('/login', [App\Http\Controllers\admin\AuthController::class, 'login'])->name('Login');
    
});


Route::middleware('admin.auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);
    Route::get('/logout', [App\Http\Controllers\admin\AuthController::class, 'logout'])->name('Logout');

});