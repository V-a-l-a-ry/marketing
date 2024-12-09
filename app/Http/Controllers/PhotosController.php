<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function show(Gallery $gallery){
        // dd($gallery->photos);
        return view('backoffice.show',[
            'gallery' => $gallery,
            'images'=>$gallery->photos
        ]);
    }

    // You need to tell Laravel explicitly which model each route parameter
    // should bind to by updating the controller method to expect both the Gallery and Photo models

    public function image(Gallery $gallery, Photo $photo){
        return view('backoffice.images',[
            
            'image'=>$photo
        ]);
    } 

    public function create(Gallery $gallery){
        return view('backoffice.photoForm', ['gallery' => $gallery]);
    }
    
    public function store(Request $request, Gallery $gallery){
    
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo_description' => 'nullable|string',
            'photo_comment' => 'nullable|string',
        ]);
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $imagePath = $imageFile->store('images', 'public');
    
                Photo::create([
                    'path' => $imagePath,
                    'gallery_id' => $gallery->id,
                    'photo_description' => $request->input('photo_description', null),
                    'photo_comment' => $request->input('photo_comment', null),
                    'Upload_time' => now(),
                ]);
            }
         }

         return redirect('/gallery/'. $gallery->id)->with('success', 'Photo uploaded successfully.');
    }

    public function edit(Gallery $gallery, Photo $photo){
        return view('backoffice.editPhotos', compact('gallery', 'photo'));
    }
}