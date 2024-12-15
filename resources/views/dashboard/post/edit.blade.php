@extends('dashboard.template_main')

@section('title')
    Edit Post
@endsection

@section('content')
    <h1>Edit Post</h1>
    @include('dashboard.fragment.error-form')
    <form action="{{ route('post.update', $post->id) }}" method="post">

        @method('PATCH')
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <label for="title">Title</label>
        <input type="text" name="title" value={{ $post->title }} id="">

        <label for="slug">Slug</label>
        <input type="text" name="slug" value={{ $post->slug }} id="">

        <label for="description">Description</label>
        <input type="text" name="description" value={{ $post->description }} id="">


        <label for="content">Content</label>
        <textarea name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>
        

        <label for="category_id">Category</label>
        <select name="category_id" value={{ $post->category_id }} id="">
            @foreach ($categories as $category)
                <option value={{ $category->id }} {{$post->category_id==$category->id ? 'selected': ''}}>{{ $category->title }}</option>
            @endforeach
        </select>

        <label for="image">Image</label>
        <input type="textarea" name="image" value={{ $post->image }} id="">

        <label for="posted">Posted</label>
        <select name="posted" value={{ $post->posted }} id="">
            <option value="yes" {{$post->posted == 'yes' ? 'selected' : ''}}>Yes</option>
            <option value="no" {{$post->posted == 'no' ? 'selected' : ''}}>No</option>
        </select>



        <button type="submit">Guardar</button>
    </form>
@endsection
