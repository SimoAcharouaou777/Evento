<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function search($search , $category)
    {
        if ($search == "AllEventSearch" && $category == "all") {
            $events = Event::where('status', 'accepted')->get();
            return view('search', compact('events'));
        } else {
            if($category == "all"){
                $events = Event::where('status', 'accepted')->where('title', 'like', '%' . $search . '%')->get();
                return view('search', compact('events'));
            }else{
                $events = Event::where('status', 'accepted')->where('title', 'like', '%' . $search . '%')->where('category_id', $category)->get();
                return view('search', compact('events'));
            }
           
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
