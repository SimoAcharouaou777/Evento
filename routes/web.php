<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BaneUserController;
use App\Http\Controllers\Admin\category\CategoryController;
use App\Http\Controllers\Admin\events\BlogControlelr;
use App\Http\Controllers\Admin\events\DetailsController;
use App\Http\Controllers\Admin\events\ManageEventsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Organizer\events\EventController;
use App\Http\Controllers\Organizer\events\GetTicketController;
use App\Http\Controllers\Organizer\events\PartisipantController;
use App\Http\Controllers\Organizer\OrganizerControlelr;
use App\Http\Controllers\User\NotificationsController;
use App\Http\Controllers\User\RoleSwitchController;
use App\Http\Controllers\User\UserProfileController;
use App\Models\Event;
use App\Models\User;
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
        $events = Event::where('status', 'accepted')->latest()->take(9)->get();
        $mostReservedEvents = Event::where('status', 'accepted')->withCount('users')->orderBy('users_count', 'desc')->take(1)->get();
        $lastEvent = Event::where('status', 'accepted')->latest()->take(3)->get();
        $userCount = User::count();
        $eventcount = Event::count();
        $participantCount = User::whereHas('events', function ($query){
            $query->where('event_user.status', 'reserved');
        })->count();
        $eventReserved = Event::whereHas('users', function ($query){
            $query->where('event_user.status','reserved');
        })->count();
        $organizers = User::has('organizers')->get();
        return view('home', compact('events','mostReservedEvents','lastEvent','userCount','eventcount','participantCount','eventReserved','organizers'));
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
Route::get('/details/{id}',[DetailsController::class, 'index'])->name('details');
Route::get('/getTicket/{id}', [GetTicketController::class, 'getTicket'])->name('getTicket');
Route::get('/partisipant',[PartisipantController::class, 'index'])->name('partisipant')->middleware('role:organizer');
Route::put('/acceptRequest/{event}/{user}', [PartisipantController::class, 'acceptRequest'])->name('acceptRequest')->middleware('role:organizer');
Route::put('/downloadTicket/{event}', [GetTicketController::class, 'downloadTicket'])->name('downloadTicket');
// Handle the request to send a password reset link
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Show the form to reset the password
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');

// Handle the password reset request
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');

// organizer Controller 
Route::resource('organizer',OrganizerControlelr::class)->middleware('role:organizer');
//admin controller 
Route::resource('admin', AdminController::class)->middleware('role:admin');

//ban user
Route::put('banned/{user}', [BaneUserController::class, 'banUser'])->name('banuser');
// event controller 
Route::resource('events',EventController::class);
// category
Route::resource('category',CategoryController::class);
//admin manage categories
Route::resource('admin_events',ManageEventsController::class)->middleware('role:admin');
//user
Route::resource('profile', UserProfileController::class)->middleware('role:organizer,user');
Route::get('/notification', [NotificationsController::class, 'index'])->name('notification')->middleware('role:organizer,user');



//search 
Route::get('/SearchEvent/{search}', [FilterController::class, 'search'])->name('SearchEvent');
Route::get('/FilterEvent/{search}', [FilterController::class, 'FilterEvent'])->name('FilterEvent');