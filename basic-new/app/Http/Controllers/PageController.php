<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {
        return view('posts', [
            // Un post pertenece a un usuario 'user'
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }

    // var $post debe coincidir con el parametro de la ruta
    // blog/{post}
    public function post(Post $post)
    {
        return view('post', [ 'post' => $post ]);
    }
}
