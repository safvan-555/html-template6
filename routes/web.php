<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Static pages routes
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/blogs', 'pages.blogs')->name('blogs');
Route::view('/pages', 'pages.pages')->name('pages');
Route::view('/contacts', 'pages.contact')->name('contact');
Route::view('/service/{id}', 'pages.service-detail')->name('service.show');
Route::view('/project/{id}', 'pages.project-detail')->name('project.show');



Route::post('/quote', [App\Http\Controllers\QuoteController::class, 'store'])
     ->name('quote.store');

// // Form submission routes
Route::post('/contact/submit', function() {
    return back()->with('success', 'Message sent successfully!');
})->name('contact.submit');

Route::post('/newsletter/subscribe', function() {
    return back()->with('success', 'Subscribed successfully!');
})->name('newsletter.subscribe');
