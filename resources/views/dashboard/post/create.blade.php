@extends('dashboard.template_main')

@section('title')
    Create Post
@endsection

@section('content')

    @include('dashboard.fragment.error-form')
    <form action="{{ route('post.store') }}" method="post">
        
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="">

        <label for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        

        <label for="content">Content</label>
        <input type="textarea" name="content" id="">

        <label for="category_id">Category</label>
        <select name="category_id" id="">
            @foreach ($categories as $category)
                <option value={{ $category->id }}>{{ $category->title }}</option>
            @endforeach
        </select>

        <label for="image">Image</label>
        <input type="textarea" name="image" id="">

        <label for="posted">Posted</label>
        <select name="posted" id="">
            <option value="yes">Yes</option>
            <option value="no" selected>No</option>
        </select>



        <button type="submit">Guardar</button>
    </form>
@endsection
