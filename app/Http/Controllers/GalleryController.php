<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Display all gallery items in a Blade view
    public function index()
    {
        $galleries = Gallery::all(); // You could add sorting, pagination, or filtering here if needed

        return view('gallery', compact('galleries')); // Pass 'galleries' to the Blade view
    }

    // Show the form for creating a new gallery item
    public function create()
    {
        return view('forms.gallery');
    }

    // Store a new gallery item in the database
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'send_date' => 'nullable|date',
            'opens' => 'nullable|integer|min:0',
            'media' => 'required|file|mimes:jpg,jpeg,png,mp4,mp3,pdf|max:10240', // Add file validation
        ]);
    
        // Initialize media type
        $mediaType = null;
    
        // Handle file upload if media is present
        if ($request->hasFile('media') && $request->file('media')->isValid()) {
            // Store the file and get its path
            $filePath = $request->file('media')->store('galleries', 'public');
            $validated['media_url'] = $filePath;
    
            // Automatically determine the media type
            $mimeType = $request->file('media')->getMimeType();
    
            // Set media type based on MIME type
            if (strpos($mimeType, 'image') !== false) {
                $mediaType = 'image';
            } elseif (strpos($mimeType, 'video') !== false) {
                $mediaType = 'video';
            } elseif (strpos($mimeType, 'pdf') !== false) {
                $mediaType = 'document';
            }
    
            // Assign media type
            $validated['type'] = $mediaType;
        }
    
        // Create the new gallery item with the validated data
        Gallery::create($validated);
    
        // Redirect with success message
        return redirect()->route('galleries.index')->with('success', 'Gallery created successfully.');
    }
    


    // Delete a gallery item
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Gallery item deleted successfully.');
    }
}
