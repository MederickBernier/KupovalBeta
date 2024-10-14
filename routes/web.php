<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtworksController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\EventController;

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

        //User routes
        Route::get('/users',[AdminController::class, 'listUsers'])->name('users.index');
        Route::get('/users/create',[AdminController::class, 'createUser'])->name('users.create');
        Route::get('/users/{user}/edit',[AdminController::class, 'editUser'])->name('users.edit');
        Route::put('/users/{user}',[AdminController::class, 'updateUser'])->name('users.update');
        Route::delete('/user/{user}',[AdminController::class, 'softDeleteUser'])->name('users.delete');
        Route::put('/users/{id}/toggle', [AdminController::class, 'toggleUserActivate'])->name('users.toggle');

        //Category routes
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

        // Tag routes
        Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
        Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');
        Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
        Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');
        Route::put('/tags/{tag}', [TagController::class, 'update'])->name('tags.update');
        Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');

        // Artwork routes
        Route::get('/artworks', [ArtworksController::class, 'index'])->name('artworks.index');
        Route::get('/artworks/create', [ArtworksController::class, 'create'])->name('artworks.create');
        Route::post('/artworks', [ArtworksController::class, 'store'])->name('artworks.store');
        Route::get('/artworks/{artwork}/edit', [ArtworksController::class, 'edit'])->name('artworks.edit');
        Route::put('/artworks/{artwork}', [ArtworksController::class, 'update'])->name('artworks.update');
        Route::delete('/artworks/{artwork}', [ArtworksController::class, 'destroy'])->name('artworks.destroy');

        // Settings routes
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::post('/settings/general', [SettingsController::class, 'updateGeneralSettings'])->name('settings.updateGeneral');
        Route::post('/settings/payment', [SettingsController::class, 'updatePaymentSettings'])->name('settings.updatePayment');

        // Event routes
        Route::get('/', [EventController::class, 'index'])->name('events.index');
        Route::get('/create', [EventController::class, 'create'])->name('events.create');
        Route::post('/', [EventController::class, 'store'])->name('events.store');
        Route::get('/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
        Route::put('/{event}', [EventController::class, 'update'])->name('events.update');
        Route::delete('/{event}', [EventController::class, 'destroy'])->name('events.destroy');

    });
});
