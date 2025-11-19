<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Halaman Utama (index)
    public function index()
    {
        return view('index');
    }

    // Halaman About
    public function about()
    {
        return view('about');
    }

    // Halaman Services
    public function service()
    {
        return view('service');
    }

    // Halaman Projects
    public function projects()
    {
        // Contoh data proyek
        $projects = [
            [
                'image' => 'assets/images/projects/work1.jpg',
                'category' => 'design',
                'title' => 'Wakey Wakey - Bali Menu',
                'link' => 'assets/images/projects/work1.jpg'
            ],
            [
                'image' => 'assets/images/projects/work2.jpg',
                'category' => '3D Logo',
                'title' => 'Adis 3d Logo Design',
                'link' => 'single-project.html'
            ],
            [
                'image' => 'assets/images/projects/work3.jpg',
                'category' => 'Video',
                'title' => 'Effect House - Tiktok Filter',
                'link' => 'https://www.youtube.com/watch?v=qZEPs3vmYB4'
            ],
            [
                'image' => 'assets/images/projects/work4.jpg',
                'category' => 'Branding',
                'title' => 'Just Hobbies - Motion Graphics',
                'link' => 'assets/images/projects/work4.jpg'
            ],
            [
                'image' => 'assets/images/projects/work5.jpg',
                'category' => 'Branding',
                'title' => 'Music Produser',
                'link' => 'assets/images/projects/work4.jpg'
            ],
            // Tambahkan proyek lainnya sesuai kebutuhan
        ];
    
        return view('projects', compact('projects'));
    }
    

    // Halaman Single Project
    public function singleProject()
    {
        return view('single-project');
    }

    // Halaman Blog
    public function blog()
    {
        return view('blog');
    }

    // Halaman Blog Details
    public function blogDetails()
    {
        return view('blog-details');
    }

    // Halaman Contact
    public function contact()
    {
        return view('contact');
    }
}
