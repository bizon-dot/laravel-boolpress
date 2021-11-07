<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Post;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.dashboard', compact('posts'));
        
    }
}
