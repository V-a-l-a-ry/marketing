<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Handle file upload logic
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:2048', // Example validation
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('newsletters', $fileName, 'public');

        // Redirect to the newsletter page
        return redirect()->route('newsletter')->with('success', 'Newsletter uploaded successfully!');
    }
}
