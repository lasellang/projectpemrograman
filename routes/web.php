<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; 

// --- GET Routes untuk Halaman Statis ---

// Halaman Utama (index.blade.php)
Route::get('/', function () {
    return view('index'); 
})->name('home');

// Halaman About (about.blade.php)
Route::get('/about', function () {
    return view('about'); 
})->name('about');

// Halaman Services (service.blade.php)
// File service.html ada di template Anda, jadi harus dimasukkan.
Route::get('/service', function () {
    return view('service');
})->name('service');

// Halaman Projects (projects.blade.php)
Route::get('/projects', function () {
    return view('projects'); 
})->name('projects');

// Halaman Single Project (single-project.blade.php)
Route::get('/single-project', function () {
    return view('single-project');
})->name('single-project');

// Halaman Blog (blog.blade.php)
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Halaman Blog Details (blog-details.blade.php)
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

// Halaman Contact (contact.blade.php)
Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

// --- POST Route untuk Form Kontak ---

// Ini adalah route yang sebelumnya bermasalah.
// Gunakan sintaks array yang benar: [Controller::class, 'methodName']
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');