<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Ambil posting aktif, urutkan berdasarkan tanggal publish, paginate 6 per halaman
        $posts = Post::active()->latest('published_at')->paginate(6);

        // Tampilkan daftar blog
        return view('blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        // Tampilkan single post
        return view('blog.show', compact('post'));
    }
}
