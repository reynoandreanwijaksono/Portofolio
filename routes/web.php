<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SkillController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [HomeController::class, 'allProjects'])->name('projects.all');
Route::get('/projects/{project:slug}', [HomeController::class, 'showProject'])->name('projects.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Admin Routes (dengan middleware auth sederhana)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [DashboardController::class, 'loginForm'])->name('login');
    Route::post('/login', [DashboardController::class, 'login'])->name('login.post');
    
    // Routes yang perlu authentication
    Route::middleware(['auth:web'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
        
        // CRUD Projects
        Route::resource('projects', ProjectController::class);
        
        // CRUD Skills
        Route::resource('skills', SkillController::class);
    });
});