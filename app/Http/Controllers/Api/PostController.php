<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    { //prendo tutti i post dal database
        $posts = Post::with('category')->get();
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
    public function show(Post $post)
    {
        $post->load('category', 'tags');
        return response()->json(
            [
                'success' => true,
                'results' => $post
            ]
        );
    }
}
