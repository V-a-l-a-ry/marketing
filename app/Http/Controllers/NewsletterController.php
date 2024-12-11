<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    /**
     * Show the form for creating a new newsletter.
     */
    public function create()
    {
        return view('newsletter.upload');
    }

    /**
     * Store a newly created newsletter in the database.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:luminaries,feature',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
        ]);

        // Handle file upload if present
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images'); // Store image in 'public/images'
        }

        // Create a new newsletter
        $newsletter = new Newsletter([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'content' => $validated['content'],
            'image' => $imagePath, // Store image path
        ]);

        // Save the newsletter to the database
        $newsletter->save();

        // Return success message and redirect
        return redirect()->route('newsletter.create')->with('success', 'Article uploaded successfully!');
    }
    /**
     * Display a listing of newsletters with category counts.
     */
    public function index()
    {
        // Get the count of newsletters per category
        $categoryCounts = Newsletter::select('category', DB::raw('count(*) as count'))
                                    ->groupBy('category')
                                    ->get();

        // Pass the counts to the view
      
        $newsletters = Newsletter::latest()->paginate(6); // Adjust pagination as needed
        return view('newsletter.index', compact('newsletters'));
    }

    /**
     * Display all newsletters.
     */
    public function showNewsletters()
    {
        $newsletters = Newsletter::all();
        return view('newsletter.article', ['newsletters' => $newsletters]);
    }
}
