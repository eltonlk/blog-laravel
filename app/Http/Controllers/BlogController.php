<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Tag;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();

        return view('blog.index', [
            'posts' => $posts,
            'tags' => $tags
        ]);
    }
}
