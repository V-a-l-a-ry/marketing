<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Show the dashboard with upcoming events
    public function index()
    {
        // Total Subscribers Count
        $totalSubscribers = Subscriber::count();

        // Active Events Count (events happening now or soon)
        $activeEvents = Event::where('status', 'active')->count();

        // Average Newsletter Opens
        $averageOpens = Newsletter::whereNotNull('opens')->avg('opens');
        $averageOpensFormatted = number_format($averageOpens, 1) . '%';

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

        return view('dashboard', compact(
            'totalSubscribers',
            'activeEvents',
            'averageOpensFormatted',
            'events',
            'recentNewsletters',
            'latestNewsletter',
            'latestGallery',
            'latestEvent'
        ));
    }
}
