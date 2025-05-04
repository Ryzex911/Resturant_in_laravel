<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;  // Correct import

use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\ContactMessage;


Route::get('/', [HomeController::class, 'index']);

Route::resource('menu', MenuController::class);

Route::get('/menu/{menu}/edit', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');

// Login Page
Route::get('/login', function () {
    return view('menu.login');
})->name('login');

// Login Check
Route::post('/login/check', [LoginController::class, 'check'])->name('menu.logincheck');

// Admin Panel
Route::get('/admin', function () {
    $items = Menu::all();
    return view('menu.admin', compact('items'));
})->name('admin');


// Show the contact form
Route::get('/contact', function () {
    return view('menu.contact');
});

// Store the message in the database (using the controller now)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/mission', function () {
    return view('menu.ourmission'); // adjust if it's in a different folder
});



Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');





Route::get('/admin/contactmessages', [ContactMessageController::class, 'index'])->name('contactmessages.index');
