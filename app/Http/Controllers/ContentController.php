<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    // Show list of contents (Galleries + Newsletters)
    public function index()
    {
        // Fetch galleries and newsletters
        $galleries = Gallery::all();
        $newsletters = Newsletter::all();

        // Merge both collections
        $contents = $galleries->concat($newsletters);

        // Pass merged contents to the view
        return view('contentlibrary', compact('contents'));
    }

    // Show form for creating new content (both galleries and newsletters)
    public function create()
    {
        return view('forms.content');
    }

    // Store new content (either gallery or newsletter)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'status' => 'required|string',
            'send_date' => 'nullable|date',
        ]);

        // Store gallery or newsletter based on type
        if ($request->type === 'gallery') {
            Gallery::create([
                'title' => $request->title,
                'type' => $request->media_type, // handle media_type if needed
                'status' => $request->status,
                'send_date' => $request->send_date,
            ]);
        } elseif ($request->type === 'newsletter') {
            Newsletter::create([
                'title' => $request->title,
                'status' => $request->status,
                'send_date' => $request->send_date,
            ]);
        }

        return redirect()->route('contentlibrary');
    }
}
