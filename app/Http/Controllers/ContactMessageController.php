<?php

namespace App\Http\Controllers;

use App\Models\Message; // or ContactMessage if you're using a different model

class ContactMessageController extends Controller
{
    public function index()
    {
        // Fetch all messages from the 'messages' table
        $messages = Message::all();

        // Check if messages are retrieved
        if ($messages->isEmpty()) {
            \Log::info("No messages found.");
        } else {
            \Log::info("Messages found: " . $messages->count());
        }

        // Pass messages to the view
        return view('menu.ContactMessage', compact('messages'));
    }

}
