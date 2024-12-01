<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\luminary;

class luminariesController extends Controller
{
    public function index()
    {
        $luminaries = luminary::all();
        return view('luminaries.index', compact('luminaries'));
    }

    public function create()
    {
        return view('luminaries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'testimonial' => 'required|string',
        ]);

        luminary::create($validated);
        return redirect()->route('luminaries.index');
    }

    public function show($id)
    {
        $luminary = luminary::findOrFail($id);
        return view('luminaries.show', compact('luminary'));
    }

    public function edit($id)
    {
        $luminary = luminary::findOrFail($id);
        return view('luminaries.edit', compact('luminary'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'testimonial' => 'required|string',
        ]);

        $luminary = luminary::findOrFail($id);
        $luminary->update($validated);
        return redirect()->route('luminaries.index');
    }

    public function destroy($id)
    {
        $luminary = luminary::findOrFail($id);
        $luminary->delete();
        return redirect()->route('luminaries.index');
    }
}
