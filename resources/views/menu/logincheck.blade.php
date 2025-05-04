<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController
{
    // This function handles the login check logic
    public function check(Request $request)
    {
        // Get the 'name' and 'password' values from the form input
        $name = $request->input('name');
        $password = $request->input('password');

        // Check if both name and password are 'admin'
        if ($name === 'admin' && $password === 'admin') {
            // If credentials match, redirect the user to the admin page
            return redirect()->route('admin');
        } else {
            // If credentials are incorrect, redirect back with an error message
            return back()->with('error', 'Incorrect login details.');
        }
    }
}
