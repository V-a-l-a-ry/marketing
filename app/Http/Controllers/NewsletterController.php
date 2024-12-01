<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    // Show the form to upload a new newsletter
    public function create()
    {
        return view('newsletter-upload'); // Pointing to 'newsletter-upload.blade.php' view
    }

    // Store the uploaded newsletter in the database
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'folder_path' => 'nullable|file|mimes:zip', // Assuming you want to upload a zip folder
            'category' => 'required|in:luminary,featured',
        ]);

        // Handle the file upload if there's one
        if ($request->hasFile('folder_path')) {
            $folderPath = $request->file('folder_path')->store('newsletters', 'public');
        }

        // Create a new newsletter record in the database
        Newsletter::create([
            'title' => $request->title,
            'folder_path' => $folderPath ?? null,
            'category' => $request->category,
        ]);

        // Redirect back with a success message
        return redirect()->route('newsletter.create')->with('message', 'Newsletter uploaded successfully!');
    }

    // Display all newsletters (example of an index method)
    public function index()
    {
        $newsletters = Newsletter::all(); // Get all newsletters
        return view('newsletter.index', compact('newsletters'));
    }
}
