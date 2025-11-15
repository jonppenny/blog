<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class BaseController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10)->withQueryString();

        return view('home', ['posts' => $posts]);
    }

    public function showPost()
    {
    }

    public function showPage()
    {
    }
}
