<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        // Ambil data kontak (biasanya hanya 1 record dengan informasi bisnis)
        $contact = Contact::first();

        // Tampilkan halaman kontak
        return view('contact.index', compact('contact'));
    }
}
