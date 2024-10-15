<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController, AuthController, UserController, AdminController,
    ArtworksController, CategoryController, TagController,
    SettingsController, EventController, ShopController,
    ProductTypeController, ArtworkVariantController
};
use App\Http\Middleware\AdminMiddleware;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Shop Routes
Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('index'); // List all artworks
    Route::get('/{artwork}', [ShopController::class, 'show'])->name('show'); // Show specific artwork
});

// Authentication routes
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Routes for logged-in users
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
    Route::post('/user/delete-account', [UserController::class, 'deleteAccount'])->name('user.deleteAccount');

    // Admin dashboard route
    Route::prefix('admin')->middleware(AdminMiddleware::class)->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('dashboard');

        // User routes
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', [AdminController::class, 'listUsers'])->name('index');
            Route::get('/create', [AdminController::class, 'createUser'])->name('create');
            Route::get('/{user}/edit', [AdminController::class, 'editUser'])->name('edit');
            Route::put('/{user}', [AdminController::class, 'updateUser'])->name('update');
            Route::delete('/{user}', [AdminController::class, 'softDeleteUser'])->name('delete');
            Route::put('/{id}/toggle', [AdminController::class, 'toggleUserActivate'])->name('toggle');
        });

        // Category routes
        Route::prefix('categories')->name('categories.')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('/create', [CategoryController::class, 'create'])->name('create');
            Route::post('/', [CategoryController::class, 'store'])->name('store');
            Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('edit');
            Route::put('/{category}', [CategoryController::class, 'update'])->name('update');
            Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('destroy');
        });

        // Tag routes
        Route::prefix('tags')->name('tags.')->group(function () {
            Route::get('/', [TagController::class, 'index'])->name('index');
            Route::get('/create', [TagController::class, 'create'])->name('create');
            Route::post('/', [TagController::class, 'store'])->name('store');
            Route::get('/{tag}/edit', [TagController::class, 'edit'])->name('edit');
            Route::put('/{tag}', [TagController::class, 'update'])->name('update');
            Route::delete('/{tag}', [TagController::class, 'destroy'])->name('destroy');
        });

        // Artwork routes
        Route::prefix('artworks')->name('artworks.')->group(function () {
            Route::get('/', [ArtworksController::class, 'index'])->name('index');
            Route::get('/create', [ArtworksController::class, 'create'])->name('create');
            Route::post('/', [ArtworksController::class, 'store'])->name('store');
            Route::get('/{artwork}/edit', [ArtworksController::class, 'edit'])->name('edit');
            Route::put('/{artwork}', [ArtworksController::class, 'update'])->name('update');
            Route::delete('/{artwork}', [ArtworksController::class, 'destroy'])->name('destroy');

            // Artwork Variant routes
            Route::prefix('{artwork}/variants')->name('artwork_variants.')->group(function () {
                Route::get('/', [ArtworkVariantController::class, 'index'])->name('index');
                Route::get('/create', [ArtworkVariantController::class, 'create'])->name('create');
                Route::post('/', [ArtworkVariantController::class, 'store'])->name('store');
                Route::get('/{variant}/edit', [ArtworkVariantController::class, 'edit'])->name('edit');
                Route::put('/{variant}', [ArtworkVariantController::class, 'update'])->name('update');
                Route::delete('/{variant}', [ArtworkVariantController::class, 'destroy'])->name('destroy');
            });
        });

        // Product Type routes
        Route::prefix('product_types')->name('product_types.')->group(function () {
            Route::get('/', [ProductTypeController::class, 'index'])->name('index');
            Route::get('/create', [ProductTypeController::class, 'create'])->name('create');
            Route::post('/', [ProductTypeController::class, 'store'])->name('store');
            Route::get('/{productType}/edit', [ProductTypeController::class, 'edit'])->name('edit');
            Route::put('/{productType}', [ProductTypeController::class, 'update'])->name('update');
            Route::delete('/{productType}', [ProductTypeController::class, 'destroy'])->name('destroy');
        });

        // Settings routes
        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/', [SettingsController::class, 'index'])->name('index');
            Route::post('/general', [SettingsController::class, 'updateGeneralSettings'])->name('updateGeneral');
            Route::post('/payment', [SettingsController::class, 'updatePaymentSettings'])->name('updatePayment');
        });

        // Event routes
        Route::prefix('events')->name('events.')->group(function () {
            Route::get('/', [EventController::class, 'index'])->name('index');
            Route::get('/create', [EventController::class, 'create'])->name('create');
            Route::post('/', [EventController::class, 'store'])->name('store');
            Route::get('/{event}/edit', [EventController::class, 'edit'])->name('edit');
            Route::put('/{event}', [EventController::class, 'update'])->name('update');
            Route::delete('/{event}', [EventController::class, 'destroy'])->name('destroy');
        });
    });
});
