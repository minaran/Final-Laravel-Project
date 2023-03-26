<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use Illuminate\Http\Request;  // to mi netreba ali neka stoji

class PostController extends Controller
{
    public function show($postId) 
    {
        $post = Post::find($postId);

        return view('post', compact('post'));       // koristimo compact kad su i kljuc i vrednost iste
    }
}
