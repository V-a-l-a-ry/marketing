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
        $newsletters = Newsletter::all(); // Fetch all newsletters without eager loading
        return view('frontend.newsletter', compact('newsletters'));
    }
    

    /**
     * Display the specified newsletter.
     */
    public function show(Newsletter $newsletter)
    {
        return view('frontend.article', compact('newsletter'));
    }
}
