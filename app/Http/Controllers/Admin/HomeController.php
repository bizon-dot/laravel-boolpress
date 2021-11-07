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
        $number_posts = Post::where('is_published', true)->count();
        $number_drafts = Post::where('is_published', false)->count();
        return view('admin.dashboard', compact('posts', 'number_posts', 'number_drafts'));
    }
}
