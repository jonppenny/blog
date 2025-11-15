<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10)->withQueryString();

        return view('admin/home', ['posts' => $posts]);
    }
}
