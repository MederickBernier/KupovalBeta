<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtworksController;
use App\Http\Middleware\AdminMiddleware;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Authentication routes
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Routes for logged-in users
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');

    // Route for deleting user account
    Route::post('/user/delete-account', [UserController::class, 'deleteAccount'])->name('user.deleteAccount');

    // Admin dashboard route
    Route::prefix('admin')->middleware(AdminMiddleware::class)->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('dashboard');

        // Artwork routes
        Route::get('/artworks', [ArtworksController::class, 'index'])->name('artworks.index');
        Route::get('/artworks/create', [ArtworksController::class, 'create'])->name('artworks.create');
        Route::post('/artworks', [ArtworksController::class, 'store'])->name('artworks.store');
        Route::get('/artworks/{artwork}/edit', [ArtworksController::class, 'edit'])->name('artworks.edit');
        Route::put('/artworks/{artwork}', [ArtworksController::class, 'update'])->name('artworks.update');
        Route::delete('/artworks/{artwork}', [ArtworksController::class, 'destroy'])->name('artworks.destroy');
    });
});

