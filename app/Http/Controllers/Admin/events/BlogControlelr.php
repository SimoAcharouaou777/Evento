<?php

namespace App\Http\Controllers\Admin\events;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogControlelr extends Controller
{
    public function index()
    {
        return view('blogs.blog');
    }
}
