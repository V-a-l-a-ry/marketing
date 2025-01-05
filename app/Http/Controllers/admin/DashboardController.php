<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use App\Models\Event;
use App\Models\Gallery;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Show the dashboard with upcoming events
    public function index()
    {

        // Upcoming Events
        $events = Event::all();

        // Recent Newsletters
        $recentNewsletters = Newsletter::orderBy('send_date', 'desc')->take(5)->get();

        // Latest Newsletter
        $latestNewsletter = Newsletter::latest()->first();

        // Latest Gallery
        $latestGallery = Gallery::latest()->first();

        // Latest Event
        $latestEvent = Event::latest()->first();

        return view('admin.dashboard', compact(



            'events',
            'recentNewsletters',
            'latestNewsletter',
            'latestGallery',
            'latestEvent'
        ));
    }
}
