<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Display all gallery items in a Blade view
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery', compact('galleries'));
    }

    // Show the form for creating a new gallery item
    public function create()
    {
        return view('forms.gallery');
    }

    // Store a new gallery item in the database
    public function store(Request $request)
    {
        // Validate the incoming request for gallery creation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'send_date' => 'nullable|date',
            'opens' => 'nullable|integer|min:0',
        ]);

        // Create the new gallery item
        $gallery = Gallery::create([
            'title' => $validated['title'],
            'send_date' => $validated['send_date'],
            'opens' => $validated['opens'],
        ]);

        // Redirect with success message
        return redirect()->route('galleries.index')->with('success', 'Gallery created successfully.');
    }

    public function uploadImages(Request $request, $galleryId)
    {
        // Validate the incoming request for images
        $validated = $request->validate([
            'images.*' => 'required|image|mimes:jpg,jpeg,png|max:10240', // Validate multiple images
        ]);

        // Find the existing gallery
        $gallery = Gallery::findOrFail($galleryId);

        // Handle multiple image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    // Store the image in the 'galleries' directory under 'public'
                    $filePath = $image->store('galleries', 'public');

                    // Create an image entry in the database
                    $gallery->images()->create([
                        'path' => $filePath,
                    ]);
                }
            }
        }

        // Redirect with success message
        return redirect()->route('galleries.show', $galleryId)->with('success', 'Images uploaded successfully.');
    }


    // Display a specific gallery and its images
    public function show($id)
    {
        $gallery = Gallery::with('images')->findOrFail($id);
        return view('admin.images', compact('gallery'));
    }

    // Delete a gallery item and its associated images
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Delete associated images from storage and database
        foreach ($gallery->images as $image) {
            if ($image->path) {
                Storage::disk('public')->delete($image->path);
            }
            $image->delete();
        }

        // Delete the gallery itself
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Gallery item deleted successfully.');
    }
}
