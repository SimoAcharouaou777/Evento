<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Organizer\OrganizerControlelr;
use App\Http\Controllers\User\RoleSwitchController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/registerUser',[AuthController::class, 'store'])->name('store');
Route::post('/loginUser',[AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/switchToOrganizer',[RoleSwitchController::class, 'switchToOrganizer'])->name('roleswitch');

// organizer Controller 
Route::resource('organizer',OrganizerControlelr::class);
//forgetPassword Controller

// Show the form to request a password reset link
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('password.forget');

// Handle the request to send a password reset link
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Show the form to reset the password
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');

// Handle the password reset request
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');