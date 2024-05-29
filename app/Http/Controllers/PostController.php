<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function indexPost()
    {
        $post = Post::find(1);
        return dd($post);
    }
}
