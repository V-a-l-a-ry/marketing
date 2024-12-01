<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mentorship;
class mentorshipController extends Controller
{
    public function index()
    {
        $mentorships = mentorship::all();
        return view('mentorships.index', compact('mentorships'));
    }

    public function create()
    {
        return view('mentorships.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        mentorship::create($validated);
        return redirect()->route('mentorships.index');
    }

    public function show($id)
    {
        $mentorship = mentorship::findOrFail($id);
        return view('mentorships.show', compact('mentorship'));
    }

    public function edit($id)
    {
        $mentorship = mentorship::findOrFail($id);
        return view('mentorships.edit', compact('mentorship'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $mentorship = mentorship::findOrFail($id);
        $mentorship->update($validated);
        return redirect()->route('mentorships.index');
    }

    public function destroy($id)
    {
        $mentorship = mentorship::findOrFail($id);
        $mentorship->delete();
        return redirect()->route('mentorships.index');
    }
}
