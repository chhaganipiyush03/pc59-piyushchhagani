<?php

namespace App\Http\Controllers;

abstract class Controller
{
    
    //
}

class ContactController extends Controller
{
    public function show()
    {
        return view('contact'); // Adjust to your view file name
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Handle the submission logic (e.g., send an email)

        return redirect()->route('contact.show')->with('success', __('Message sent successfully!'));
    }
}