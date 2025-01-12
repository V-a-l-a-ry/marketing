<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the newsletters.
     */
    public function index()
    {
        // Fetch newsletters with eager loading for performance optimization
        $newsletters = Newsletter::all();
        return view('frontend.newsletter', compact('newsletters'));
    }

    /**
     * Display the specified newsletter.
     */
    public function show(Newsletter $newsletter)
    {
        // Increment the opens count
        $newsletter->increment('opens');

        // Return the newsletter to the view
        return view('frontend.article', compact('newsletter'));
    }

    /**
     * Download the specified newsletter file.
     */
    public function download(Newsletter $newsletter)
    {
        if ($newsletter->content_path && file_exists(storage_path("app/public/{$newsletter->content_path}"))) {
            return response()->download(storage_path("app/public/{$newsletter->content_path}"));
        }

        return back()->withErrors(['error' => 'The file does not exist.']);
    }
}
