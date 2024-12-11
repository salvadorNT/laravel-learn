<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(StorePostRequest $request)
    {
        
        // Post::create($request->all());
        Post::create($request->validated());
        return to_route('post.index');

        // Forma 1 de validar

        // $validated = Validator::make($request->all(), [
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:7',
        //     'category_id' => 'required|integer',
        //     'description' => 'required|min:7',
        //     'posted' => 'required',
        // ]);


        // Forma 2 de validar

        // $request->validate([
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:7',
        //     'category_id' => 'required|integer',
        //     'posted' => 'required',
        // ]);


        
        // Metodo create campo a campó

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
