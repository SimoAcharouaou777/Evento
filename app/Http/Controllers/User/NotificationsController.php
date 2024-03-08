<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function index()
    {    
        $user = Auth::user();
        $events = $user->events; 
        return view('user.notification', compact('events', 'user'));
    }
}
