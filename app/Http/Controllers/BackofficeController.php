<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Photo;

class BackofficeController extends Controller
{
    public function dashboard()
    {
        // Retrieve galleries from the database
        $galleries = Gallery::all(); 

        return view('backoffice.galleries', [
            'galleryCount' => Gallery::count(),
            'photoCount' => Photo::count(),
            'galleries' => $galleries, // Pass galleries to the view
            'recentActivities' => [
                'Uploaded a new gallery: Nature Wonders',
                'Added a photo to gallery: Summer',
                'Created a new event: Tech Summit 2024',
            ],
        ]);
    }
}
