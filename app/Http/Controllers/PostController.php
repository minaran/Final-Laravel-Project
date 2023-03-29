<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use Illuminate\Http\Request;  // to mi netreba ali neka stoji

class PostController extends Controller
{
    public function show(Post $post)    // necemo ($postId) nego koristimo model Post $post
    {
       // $post = Post::find($postID);    // i zato nam ovo sad ne treba, vec samo vracamo view, ako trazimo nepostojeci sad nam daje 404

        return view('post', compact('post'));       // koristimo compact kad su i kljuc i vrednost iste
    }
}
