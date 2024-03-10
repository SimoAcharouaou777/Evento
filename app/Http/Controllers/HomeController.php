<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
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
    }
}
