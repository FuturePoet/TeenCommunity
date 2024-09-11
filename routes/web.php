<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeenController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TeenProfileController;

// Home route
Route::get('/', function () {
    return view('home');
})->name('home');

// Authentication routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Auth::routes();

// Profile routes (protected by auth middleware)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    // Admin dashboard and routes
    Route::middleware('auth:admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/reports', [AdminController::class, 'showReports'])->name('admin.reports');
        Route::post('/admin/reports/submit', [AdminController::class, 'submitReport'])->name('admin.reports.submit');
        Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
        Route::get('/admin/help', [AdminController::class, 'help'])->name('admin.help');
    });

    // Teen home view
    Route::get('/teen', [TeenController::class, 'index'])->name('teen.home');

    // Parent home view
    Route::get('/parent/home', [ParentController::class, 'index'])->name('parent.home');
});

// Courses routes
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.delete');

// Events routes
Route::get('/events', [EventController::class, 'index'])->name('events.index');

// Books routes
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Reviews routes (protected by auth middleware)
Route::middleware('auth')->group(function () {
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});

// Users routes
Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/teen', [UserController::class, 'showTeens'])->name('users.showTeens');
    Route::get('/users/admin', [UserController::class, 'showAdmins'])->name('users.showAdmins');
    Route::get('/users/parent', [UserController::class, 'showParents'])->name('users.showParents');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('profile.destroy');
});

// Teen Profile routes
Route::get('/teen/profile', [TeenProfileController::class, 'showProfile'])->name('teen.profile');
// web.php
Route::resource('courses', CourseController::class);
Route::resource('events', EventController::class);
Route::resource('books', BookController::class);
Route::resource('reviews', ReviewController::class);
// Route for the dashboard
Route::get('/admin/dashboard', [CourseController::class, 'index'])->name('admin.dashboard');
// Route for the dashboard
Route::get('/admin/dashboard', [EventController::class, 'index'])->name('admin.dashboard');
// Route for the dashboard
Route::get('/admin/dashboard', [BookController::class, 'index'])->name('admin.dashboard');
// Route for the dashboard
Route::get('/admin/dashboard', [ReviewController::class, 'index'])->name('admin.dashboard');
// web.php
Route::resource('courses', CourseController::class);
Route::resource('events', EventController::class);
Route::resource('books', BookController::class);
Route::resource('reviews', ReviewController::class);
