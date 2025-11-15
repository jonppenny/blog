<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10)->withQueryString();

        return view('index', ['posts' => $posts]);
    }

    public function showPost(int $id)
    {
        $post = Post::findOrfail($id);

        return view('post', ['post' => $post]);
    }

    public function showPage()
    {
    }
}
