<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.post.index', compact('posts'));

        $posts = Post::all();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(['id', 'title']);
        return view('dashboard.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500',
            'content' => 'required|min:7',
            'category_is' => 'required|integer',
            'posted' => 'required',
        ]);

        Post::create($request->all());
        // Post::create(
        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'description' => 'test description',
        //         'content' => 'test content',
        //         'image' => 'test image',
        //         'posted' => 'no',
        //         'category_id' => 1
        //     ]
        // );

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
