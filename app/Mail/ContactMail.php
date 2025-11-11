<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Properti untuk menampung data dari form

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        // Mengatur Subjek Email dari input form user
        return new Envelope(
            subject: 'Pesan Kontak Baru: ' . $this->data['subject'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Menentukan template Blade yang akan digunakan untuk isi email
        return new Content(
            view: 'emails.contact', // Template yang akan dibuat di resources/views/emails/contact.blade.php
            with: [
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'message' => $this->data['message'],
            ],
        );
    }
}