<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

// --- GET Routes untuk Halaman Statis ---
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/service', [PortfolioController::class, 'service'])->name('service');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/single-project', [PortfolioController::class, 'singleProject'])->name('single-project');
Route::get('/blog', [PortfolioController::class, 'blog'])->name('blog');
Route::get('/blog-details', [PortfolioController::class, 'blogDetails'])->name('blog-details');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

// --- POST Route untuk Form Kontak ---
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');
