<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

//Route to dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

//Route to login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');


//Post request to login
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // Attempt to log in the user
    if (Auth::attempt($credentials)) {
        return redirect('/dashboard');
    }

    // If login fails, send back with error message
    return back()->withErrors([
        'email' => 'Invalid email or password.',
    ]);
})->name('login');


//Route to logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
