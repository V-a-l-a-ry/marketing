<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $event = Event::latest()->first();
        $backgroundImage = $event && $event->file_upload
            ? $event->file_upload
            : 'https://i.pinimg.com/736x/bf/1d/df/bf1ddf5a001515cfeb53f7f02879703e.jpg';

        return view('frontend.home', compact('backgroundImage'));
    }
}
