<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    // Show the event creation form
    public function create()
    {
        $events = Event::all();
        return view('forms.event', compact('events'));
    }

    // Store a new event in the database
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'attendees' => 'nullable|integer|min:0',
            'file-upload' => 'nullable|image|max:10240', // Optional image, max 10MB
        ]);



        // Handle file upload if provided
        $thumbnailPath = null;
        if ($request->hasFile('file-upload')) {
            $thumbnailPath = $request->file('file-upload')->store('event-thumbnails', 'public');
        }

        // Create the event in the database
        Event::create([
            'name' => $validatedData['name'],
            'type' => $validatedData['type'],
            'location' => $validatedData['location'],
            'date' => $validatedData['date'],
            'attendees' => $validatedData['attendees'] ?? 0, // Default to 0 if not provided
        ]);

        // Redirect with success message
        return redirect()->route('event.create')->with('success', 'Event created successfully!');
    }

    // List all events
    public function index()
    {
        $events = Event::all();
        return view('admin.event', compact('events'));
    }

    // Show a single event
    public function show($id)
    {
        $events = Event::all();
        return view('admin.event', compact('event'));
    }

    // Edit an event
    // public function edit($id)
    // {
    //     $event = Event::findOrFail($id);
    //     return view('events.edit', compact('event'));
    // }

    // // Update an event in the database
    // public function update(Request $request, $id)
    // {
    //     // Validate incoming request data
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'type' => 'required|string|max:100',
    //         'location' => 'required|string|max:255',
    //         'date' => 'required|date',
    //         'attendees' => 'nullable|integer|min:0',
    //         'file-upload' => 'nullable|image|max:10240',
    //     ]);

    //     $event = Event::findOrFail($id);

    //     // Handle file upload if provided
    //     if ($request->hasFile('file-upload')) {
    //         // Delete old thumbnail if it exists
    //         if ($event->thumbnail) {
    //             Storage::disk('public')->delete($event->thumbnail);
    //         }
    //         $event->thumbnail = $request->file('file-upload')->store('event-thumbnails', 'public');
    //     }

    //     // Update the event
    //     $event->update([
    //         'name' => $validatedData['name'],
    //         'type' => $validatedData['type'],
    //         'location' => $validatedData['location'],
    //         'date' => $validatedData['date'],
    //         'attendees' => $validatedData['attendees'] ?? $event->attendees,
    //     ]);

    //     return redirect()->route('events.edit', $id)->with('success', 'Event updated successfully!');
    // }

    // Delete an event
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        // Delete the thumbnail if it exists
        if ($event->thumbnail) {
            Storage::disk('public')->delete($event->thumbnail);
        }

        // Delete the event
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }
}
