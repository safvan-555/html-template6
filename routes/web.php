<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ProjectPageController; 
use App\Http\Controllers\ServicePageController; 

use App\Http\Controllers\Admin\TestimonialsController; 
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AboutUsPageController;
use App\Http\Controllers\Admin\HomePageController; 

Route::get('/', [ProjectPageController::class, 'homepage'])->name('home');
Route::get('/about', [ProjectPageController::class, 'aboutuspage'])->name('about');

Route::view('/blogs', 'pages.blogs')->name('blogs');
Route::view('/pages', 'pages.pages')->name('pages');
Route::view('/contacts', 'pages.contact')->name('contact');

Route::get('/services', [ServicePageController::class, 'index'])->name('services');
Route::get('/service/{id}', [ServicePageController::class, 'show'])->name('service.show');

Route::get('/projects', [ProjectPageController::class, 'index'])->name('projects');
Route::get('/project/{id}', [ProjectPageController::class, 'show'])->name('project.show');

Route::post('/quote', [App\Http\Controllers\QuoteController::class, 'store'])
     ->name('quote.store');

Route::post('/contact/submit', function() {
    return back()->with('success', 'Message sent successfully!');
})->name('contact.submit');

Route::post('/newsletter/subscribe', function() {
    return back()->with('success', 'Subscribed successfully!');
})->name('newsletter.subscribe');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });
    Route::middleware(['auth'])->group(function () {

        Route::get('/services', [ServiceController::class, 'index'])->name('services');
        Route::post('/services', [ServiceController::class, 'update']);
        Route::post('/services/item', [ServiceController::class, 'storeItem'])->name('services.item.store');
        Route::put('/services/item/{id}', [ServiceController::class, 'updateItem'])->name('services.item.update');
        Route::delete('/services/item/{id}', [ServiceController::class, 'deleteItem'])->name('services.item.delete');
        Route::get('/services/item/{id}/edit', [ServiceController::class, 'edit'])->name('services.item.edit');

        Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
        Route::post('/projects', [ProjectController::class, 'update']);
        Route::post('/projects/item', [ProjectController::class, 'storeItem']);
        Route::put('/projects/item/{id}', [ProjectController::class, 'updateItem'])->name('projects.item.update');
        Route::delete('/projects/item/{id}', [ProjectController::class, 'deleteItem']);
        Route::get('/projects/item/{id}/edit', [ProjectController::class, 'edit'])->name('projects.item.edit');

        Route::get('/about-us', [ProjectController::class, 'index'])->name('projects');
        Route::post('/projects', [ProjectController::class, 'update']);

        Route::get('/home-page', [HomePageController::class, 'index'])->name('home-page');
        Route::put('/home-page', [HomePageController::class, 'update'])->name('home-page.update');
        
        Route::get('/about-us', [AboutUsPageController::class, 'index'])->name('aboutus_page');
        Route::put('/about-us', [AboutUsPageController::class, 'update'])->name('aboutus_page');

        Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');
        Route::post('/testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');
        Route::get('/testimonials/{id}/edit', [TestimonialsController::class, 'edit'])->name('testimonials.edit');
        Route::put('/testimonials/{id}', [TestimonialsController::class, 'update'])->name('testimonials.update');
        Route::delete('/testimonials/{id}', [TestimonialsController::class, 'destroy'])->name('testimonials.destroy');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});