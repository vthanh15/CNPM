<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::with('category')->where('status', 1)->get();
        $posts = Post::paginate(4);
        return view('web.home', ['posts' => $posts]);
    }
}
