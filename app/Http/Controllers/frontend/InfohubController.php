<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Notice;
use App\Models\Event;

class InfohubController extends Controller
{
    public function index()
    {
        // Fetch necessary data
        $news = News::orderBy('published_at', 'desc')->take(3)->get();
        $notices = Notice::latest()->take(3)->get();
        $events = Event::orderBy('date', 'desc')->get();
        $galleries = Gallery::orderBy('created_at', 'desc')->take(6)->get();

        // Pass variables to the view
        return view('frontend.infohub', compact('news', 'notices', 'events', 'galleries'));
    }
}
