<?php

namespace App\Http\Controllers\Admin\events;

use App\Http\Controllers\Controller;
use App\Models\Event;



class DetailsController extends Controller
{
    public function index($id)
    {
       
        
        $event = Event::find($id);
        return view('details', compact('event'));
    }
}

// $event = Event::find($id);
// Path: app/Http/Controllers/Admin/events/DetailsController.php