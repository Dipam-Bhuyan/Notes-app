<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Instead of individual routes, you can use Route::resource
Route::resource('notes', NoteController::class);


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
