<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    // Display a listing of the newsletters
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.newsletter', compact('newsletters'));
    }

    // Show the form for creating a new newsletter
    public function create()
    {
        return view('forms.newsletter');
    }

    // Store a newly created newsletter in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'send_date' => 'nullable|date',
            'opens' => 'nullable|integer|min:0',
        ]);


        Newsletter::create($request->all());

        return redirect()->route('newsletters.index')
            ->with('success', 'Newsletter created successfully.');
    }

    // Display the specified newsletter
    public function show(Newsletter $newsletter)
    {
        $newsletters = Newsletter::all();
        return view('newsletter', compact('newsletter'));
    }

    // Show the form for editing the specified newsletter
    // public function edit(Newsletter $newsletter)
    // {
    //     return view('newsletters.edit', compact('newsletter'));
    // }

    // Update the specified newsletter in storage
    // public function update(Request $request, Newsletter $newsletter)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'category_id' => 'required|integer',
    //         'status' => 'required|string',
    //         'send_date' => 'nullable|date',
    //         'opens' => 'nullable|integer|min:0',
    //     ]);

    //     $newsletter->update($request->all());

    //     return redirect()->route('newsletters.index')
    //                      ->with('success', 'Newsletter updated successfully.');
    // }

    // Remove the specified newsletter from storage
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();

        return redirect()->route('newsletter.index')
            ->with('success', 'Newsletter deleted successfully.');
    }
}
