<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExhibitController extends Controller
{
    /**
     * Display a listing of the galleries.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('frontend.exhibit', compact('galleries'));
    }


    public function show(Gallery $gallery)
    {
        // Assuming 'images' is a relationship defined in the Gallery model
        $images = $gallery->images;

        return view('frontend.photos', compact('gallery', 'images'));
    }
}
