<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhoneController;
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

Route::get('/', function () {
    return view('login');
});


Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'authenticate'])->name('login');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/admin', [AdminController::class,'index'])->name('admin')->middleware('auth');
Route::get('/phones', [PhoneController::class,'index'])->name('phones')->middleware('auth');




// Route::get('/auth', function () {
//     return 'fdafadf';
// })->name('auth');
