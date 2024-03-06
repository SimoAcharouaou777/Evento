<?php

namespace App\Http\Controllers\Admin\events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('details', compact('events'));
    }
}
