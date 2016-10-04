<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [
          0 => 'Post 1',
          1 => 'Post 2',
          2 => 'Post 3',
          3 => 'Post 4',
          4 => 'Post 5'
        ];

        return view('blog.index', [
          'posts' => $posts
        ]);
    }
}
