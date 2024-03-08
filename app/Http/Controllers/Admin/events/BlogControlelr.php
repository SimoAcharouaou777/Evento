<?php

namespace App\Http\Controllers\Admin\events;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class BlogControlelr extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $events = Event::where('status', 'accepted')->paginate(6);
        return view('blogs.blog', compact('events','categories'));
    }
}
