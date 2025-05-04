<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);

        // Create a new message in the 'messages' table
        Message::create($validated);

        // Redirect back to the contact page with a success message
        return redirect('/contact')->with('success', 'Your message has been sent!');
    }
    public function index()
    {
        // Fetch all messages, ordered by the latest
        $messages = Message::latest()->get();

        // Return a view with the messages
        return view('menu.ContactMessage', compact('messages'));
    }
}
