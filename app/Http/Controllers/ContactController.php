<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Import untuk menggunakan fitur Mail
use App\Mail\ContactMail; // Akan kita buat di langkah berikutnya

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        // 1. Validasi Data
        // Ini menggantikan sebagian besar validasi manual di sendmail.php
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Kirim Email (menggunakan Mailable Class)
        // Ganti "aslamazhari46@gmail.com" dengan email tujuan
        $recipient = 'aslamazhari46@gmail.com'; 
        
        try {
            // Mengirim data dari $request ke Mailable Class
            Mail::to($recipient)->send(new ContactMail($request->all()));
            
            // Berhasil
            return back()->with('success', 'Pesan Anda telah berhasil terkirim!');
            
        } catch (\Exception $e) {
            // Gagal
            return back()->withErrors('Gagal mengirim pesan. Silakan coba lagi.')->withInput();
        }
    }
}