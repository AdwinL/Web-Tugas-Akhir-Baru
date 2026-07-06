<?php

namespace App\Http\Controllers;

use App\Models\Category;

class MenuController extends Controller
{
    public function index()
    {
        $categories = Category::where('type', 'menu')->with('menus')->get();

        return view('menu.index', compact('categories'));
    }

    public function category(Category $category)
    {
        return view('menu.category', compact('category'));
    }
}
