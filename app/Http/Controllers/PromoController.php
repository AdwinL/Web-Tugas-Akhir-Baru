<?php

namespace App\Http\Controllers;

use App\Models\Promo;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::active()->latest('starts_at')->get();

        return view('promos.index', compact('promos'));
    }
}
