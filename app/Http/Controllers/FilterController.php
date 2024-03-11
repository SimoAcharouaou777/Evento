<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function search($search)
    {
        if ($search == "AllEventSearch") {
            $events = Event::where('status', 'accepted')->get();
            return view('search', compact('events'));
        } else {
            $events = Event::where('status', 'accepted')->where('title', 'like', '%' . $search . '%')->get();
            return view('search', compact('events'));
        }
    }

    public function FilterEvent($search){

        if ($search == "AllEventFilter") {
            $events = Event::where('status', 'accepted')->get();
            return view('search', compact('events'));
        } else {
            $events = Event::where('status', 'accepted')->where('category_id', $search)->get();
            return view('search', compact('events'));
        }
    }
}
