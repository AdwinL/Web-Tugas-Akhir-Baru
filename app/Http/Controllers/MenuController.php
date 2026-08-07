<?php

namespace App\Http\Controllers;

use App\Models\Category;

class MenuController extends Controller
{
    public function index()
    {
        // Ambil kategori yang memakai tipe 'menu' beserta relasi menus
        $categories = Category::where('type', 'menu')->with('menus')->get();

        // Tampilkan view daftar menu per kategori
        return view('menu.index', compact('categories'));
    }

    public function category(Category $category)
    {
        // Tampilkan halaman kategori menu tertentu
        return view('menu.category', compact('category'));
    }
}
