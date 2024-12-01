<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events;

class eventsController extends Controller
{
    public function index()
    {
        $events = events::with('photos')->get();
        return view('events.index', compact('events'));
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        events::create($validated);
        return redirect()->route('events.index');
    }

    public function show($id)
    {
        $mentorship = events::findOrFail($id);
        return view('events.show', compact('events'));
    }

    public function edit($id)
    {
        $mentorship =events::findOrFail($id);
        return view('events.edit', compact('events'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $mentorship = events::findOrFail($id);
        $mentorship->update($validated);
        return redirect()->route('events.index');
    }

    public function destroy($id)
    {
        $mentorship = events::findOrFail($id);
        $mentorship->delete();
        return redirect()->route('events.index');
    }
}
