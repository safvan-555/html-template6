<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Static pages routes
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/blogs', 'pages.blogs')->name('blogs');
Route::view('/pages', 'pages.pages')->name('pages');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/quote', 'pages.quote')->name('quote');
Route::view('/blog/{id}', 'pages.blog-detail')->name('blog.show');

// // Form submission routes
Route::post('/contact/submit', function() {
    return back()->with('success', 'Message sent successfully!');
})->name('contact.submit');

Route::post('/newsletter/subscribe', function() {
    return back()->with('success', 'Subscribed successfully!');
})->name('newsletter.subscribe');
