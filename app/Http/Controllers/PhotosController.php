<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function show(Gallery $gallery)
    {
        // dd($gallery->photos);
        return view('gallery.show', [
            'gallery' => $gallery,
            'images' => $gallery->photos
        ]);
    }

    // You need to tell Laravel explicitly which model each route parameter
    // should bind to by updating the controller method to expect both the Gallery and Photo models

    public function image(Gallery $gallery, Photo $photo)
    {
        return view('gallery.images', [

            'image' => $photo
        ]);
    }

    public function create(Gallery $gallery)
    {
        return view('gallery.photoform', ['gallery' => $gallery]);
    }


    public function store(Request $request, $galleryId)
    {
        $request->validate([
            'images' => 'required|array',  // Ensure multiple files are selected
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validate images
            'photo_description' => 'nullable|string',
            'photo_comment' => 'nullable|string',
        ]);

        $images = $request->file('images');
        $photo_description = $request->input('photo_description');
        $photo_comment = $request->input('photo_comment');

        // Loop through each image and store it
        foreach ($images as $image) {
            // Store the image in the 'public' directory
            $path = $image->store('images', 'public');

            // Save the photo metadata in the database
            Photo::create([
                'gallery_id' => $galleryId,
                'path' => $path,
                'photo_description' => $photo_description ?? 'No description provided',
                'photo_comment' => $photo_comment ?? 'No comment provided',
            ]);
        }

        return redirect()->route('photos.index', ['gallery' => $galleryId])->with('success', 'Photos uploaded successfully');
    }


    public function edit(Gallery $gallery, Photo $photo)
    {
        return view('gallery.editphotos', compact('gallery', 'photo'));
    }
}
