<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partials.crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'title' => 'required|max:50',
            'author' => 'required',
            'content' => 'required',
        ]);
        
        ($data["is_published"] == "post") ? $data["is_published"] = true : $data["is_published"] = false;
        $new_post = new Post();
        $new_post->title = $data['title'];
        $new_post->content = $data['content'];
        $new_post->author = $data['author'];
        $new_post->is_published = $data['is_published'];
        $new_post->slug = Str::slug($data['title']);
        $new_post->save();
        $posts = Post::all();
        $number_posts = Post::where('is_published', true)->count();
        $number_drafts = Post::where('is_published', false)->count();
        return view('admin.index', compact('posts', 'number_posts', 'number_drafts'));
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post -> delete();
        return view('admin.dashboard');
    }
}
