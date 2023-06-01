<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::with('category')->where('status', 1)->get();
        return view('web.blog', ['posts' => $posts]);
    }
    public function show($id)
    {
        $posts = Post::findOrFail($id);
        $related_posts = Post::where('status', 1)->where('id', '!=', $posts->id)->get();
        return view('web.detail', compact('posts', 'related_posts'));
    }
}
