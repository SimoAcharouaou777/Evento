<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::where('status', 'accepted')->latest()->take(9)->get();
        $mostReservedEvents = Event::where('status', 'accepted')->withCount('users')->orderBy('users_count', 'desc')->take(1)->get();
        $lastEvent = Event::where('status', 'accepted')->latest()->take(3)->get();
        return view('home', compact('events','mostReservedEvents','lastEvent'));
    }
}
