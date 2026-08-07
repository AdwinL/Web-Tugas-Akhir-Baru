<?php

namespace App\Http\Controllers;

use App\Models\Promo;

class PromoController extends Controller
{
    public function index()
    {
        // Ambil promo yang aktif, urut berdasarkan mulai
        $promos = Promo::active()->latest('starts_at')->get();

        // Render view daftar promo
        return view('promos.index', compact('promos'));
    }
}
