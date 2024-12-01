<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;
class galleryController extends Controller
{
    public function index()
    {
        $galleries = gallery::all();
        return view('galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        gallery::create($validated);
        return redirect()->route('galleries.index');
    }

    public function show($id)
    {
        $gallery = gallery::findOrFail($id);
        return view('galleries.show', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = gallery::findOrFail($id);
        return view('galleries.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $gallery = gallery::findOrFail($id);
        $gallery->update($validated);
        return redirect()->route('galleries.index');
    }

    public function destroy($id)
    {
        $gallery = gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->route('galleries.index');
    }
}
