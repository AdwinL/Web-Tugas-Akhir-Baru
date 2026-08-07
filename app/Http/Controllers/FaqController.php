<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        // Ambil semua FAQ yang aktif
        $faqItems = Faq::active()->get();

        // Render halaman FAQ
        return view('faq.index', compact('faqItems'));
    }
}
