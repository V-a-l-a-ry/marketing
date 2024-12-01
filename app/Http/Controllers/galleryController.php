<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;
class galleryController extends Controller
{
    public function index()
    {
        $galleries = gallery::all();
        return view('backoffice.gallery');
    }

    public function create()
    {
        return view('backoffice.gallery');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'coverimage' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        dd($validated);
        
        gallery::create($validated);
        return redirect()->route('gallery');
    }

    public function show($id)
    {
        $gallery = gallery::findOrFail($id);
        return view('gallery');
    }

    public function edit($id)
    {
        $gallery = gallery::findOrFail($id);
        return view('backoffice.gallery');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'coverimage' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $gallery = gallery::findOrFail($id);
        $gallery->update($validated);
        return redirect()->route('backoffice.gallery');
    }

    public function destroy($id)
    {
        $gallery = gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->route('backoffice.gallery');
    }
}
