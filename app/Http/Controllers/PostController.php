<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getAllPost(){
        $posts = Post::all();
        return view('posts', ['posts' => $posts]);
    }
}
