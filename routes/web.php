<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BaneUserController;
use App\Http\Controllers\Admin\category\CategoryController;
use App\Http\Controllers\Admin\events\BlogControlelr;
use App\Http\Controllers\Admin\events\DetailsController;
use App\Http\Controllers\Admin\events\ManageEventsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Organizer\events\EventController;
use App\Http\Controllers\Organizer\OrganizerControlelr;
use App\Http\Controllers\User\RoleSwitchController;
use App\Models\Event;
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
    $events = Event::all();
    return view('home', compact('events'));
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/registerUser',[AuthController::class, 'store'])->name('store');
Route::post('/loginUser',[AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/switchToOrganizer',[RoleSwitchController::class, 'switchToOrganizer'])->name('roleswitch');
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('password.forget');
Route::get('/blog',[BlogControlelr::class, 'index'])->name('blog');
Route::get('/details',[DetailsController::class, 'index'])->name('details');
// Handle the request to send a password reset link
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Show the form to reset the password
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');

// Handle the password reset request
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');

// organizer Controller 
Route::resource('organizer',OrganizerControlelr::class);
//admin controller 
Route::resource('admin', AdminController::class);

//ban user
Route::put('banned/{user}', [BaneUserController::class, 'banUser'])->name('banuser');
// event controller 
Route::resource('events',EventController::class);
// category
Route::resource('category',CategoryController::class);
//admin manage categories
Route::resource('admin_events',ManageEventsController::class);