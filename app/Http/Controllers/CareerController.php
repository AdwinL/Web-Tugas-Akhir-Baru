<?php

namespace App\Http\Controllers;

class CareerController extends Controller
{
    public function index()
    {
        // Halaman karir sederhana (statik)
        return view('career.index');
    }
}
