<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController
{
    public function check(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');

        if ($name === 'admin' && $password === 'admin') {
            return redirect()->route('admin');
        } else {
            return back()->with('error', 'Incorrect login details.');
        }
    }
}

