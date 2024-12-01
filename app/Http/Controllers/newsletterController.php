<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newsletter;

class newsletterController extends Controller
{
    public function index()
    {
        $newsletters = newsletter::with('photos')->get();
        return view('newsletters.index', compact('newsletters'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        newsletter::create($validated);
        return redirect()->route('newsletter.index');
    }

    public function show($id)
    {
        $mentorship = newsletter::findOrFail($id);
        return view('newsletter.show', compact('newsletter'));
    }

    public function edit($id)
    {
        $mentorship =newsletter::findOrFail($id);
        return view('newsletter.edit', compact('newsletter'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $mentorship = newsletter::findOrFail($id);
        $mentorship->update($validated);
        return redirect()->route('newsletter.index');
    }

    public function destroy($id)
    {
        $mentorship = newsletter::findOrFail($id);
        $mentorship->delete();
        return redirect()->route('newsletter.index');
    }
}
