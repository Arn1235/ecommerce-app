<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CategoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware('admin.guest')->group(function () {
    Route::get('/', [App\Http\Controllers\admin\AuthController::class, 'index']);
    Route::post('/login', [App\Http\Controllers\admin\AuthController::class, 'login'])->name('Login');
    
});


Route::middleware('admin.auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);
    Route::get('/logout', [App\Http\Controllers\admin\AuthController::class, 'logout'])->name('Logout');

    Route::get('/categoryList', [App\Http\Controllers\admin\CategoryController::class, 'categoryList'])->name('categoryList');
    Route::get('/categoryadd',[App\Http\Controllers\admin\CategoryController::class, 'categoryAdd'])->name('categoryadd');
    Route::post('/categoryaddSave',[App\Http\Controllers\admin\CategoryController::class, 'categoryaddSave'])->name('categoryaddSave');
   
    

});