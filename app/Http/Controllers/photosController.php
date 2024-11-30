<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class photosController extends Controller
{
   // Display a listing of the photos.
   public function index()
   {
       $photos = Photo::all(); // Retrieve all photos
       return view('photos.index', compact('photos')); // Return view with photos
   }

   // Show the form for creating a new photo.
   public function create()
   {
       return view('photos.create'); // Return the form for creating a photo
   }

   // Store a newly created photo in storage.
   public function store(Request $request)
   {
       $validated = $request->validate([
           'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

       // Store the photo file
       $photoPath = $request->file('photo')->store('photos', 'public');

       $photo = new Photo();
       $photo->path = $photoPath;
       $photo->save(); // Save the new photo record

       return redirect()->route('photos.index'); // Redirect back to the photos list
   }

   // Display the specified photo.
   public function show($id)
   {
       $photo = Photo::findOrFail($id); // Find the photo by ID
       return view('photos.show', compact('photo')); // Return view with the photo
   }

   // Show the form for editing the specified photo.
   public function edit($id)
   {
       $photo = Photo::findOrFail($id); // Find the photo by ID
       return view('photos.edit', compact('photo')); // Return edit form view
   }

   // Update the specified photo in storage.
   public function update(Request $request, $id)
   {
       $validated = $request->validate([
           'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

       $photo = Photo::findOrFail($id);
       $photo->path = $request->file('photo')->store('photos', 'public');
       $photo->save(); // Update the photo record

       return redirect()->route('photos.index'); // Redirect back to the photos list
   }

   // Remove the specified photo from storage.
   public function destroy($id)
   {
       $photo = Photo::findOrFail($id);
       $photo->delete(); // Delete the photo record
       return redirect()->route('photos.index'); // Redirect back to the photos list
   }
}
