<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    // Display a listing of the newsletters
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.newsletter', compact('newsletters'));
    }

    // Show the form for creating a new newsletter
    public function create()
    {
        return view('forms.newsletter');
    }

    // Store a newly created newsletter in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'send_date' => 'nullable|date',
            'content_file' => 'required', // Validate file type and size
        ]);

        $filePath = $request->hasFile('content_file')
            ? $request->file('content_file')->store('newsletters')
            : null;

        Newsletter::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'send_date' => $request->send_date,
            'content_path' => $filePath,
        ]);

        return redirect()->route('newsletter.index')
            ->with('success', 'Newsletter created successfully.');
    }



    // Remove the specified newsletter from storage
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();

        return redirect()->route('newsletter.index')
            ->with('success', 'Newsletter deleted successfully.');
    }
}
