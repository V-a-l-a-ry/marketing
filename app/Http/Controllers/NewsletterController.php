<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsletterController extends Controller
{

    

    public function create()
    {
        return view('newsletter');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:luminaries,feature',
            'folder' => 'required|file|mimes:zip,rar',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Handle folder upload
        $folderPath = $request->file('folder')->store('newsletter/folders', 'public');
    
        // Handle photo upload
        $photoPath = $request->file('photo')->store('newsletter/photos', 'public');
    
        // Save newsletter to the database
        Newsletter::create([
            'title' => $request->title,
            'category' => $request->category,
            'folder_path' => $folderPath,
            'photo_path' => $photoPath,
        ]);
    
        return redirect()->route('newsletter')->with('success', 'Newsletter uploaded successfully!');
    }
    public function index()
{
    $newsletter = Newsletter::all(); // Fetch all newsletters
    $newsletter = Storage::files('public/newsletters');
    return view('newsletter');
}
public function showNewsletters()
{
    $newsletters = Newsletter::all(); // Assuming you have a `Newsletter` model.
    return view('newsletter', ['newsletter' => $newsletters]);
}

    
    }