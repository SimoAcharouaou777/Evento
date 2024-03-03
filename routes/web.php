<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('home');
});


Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/registerUser',[AuthController::class, 'store'])->name('store');
Route::post('/loginUser',[AuthController::class, 'authenticate'])->name('authenticate');