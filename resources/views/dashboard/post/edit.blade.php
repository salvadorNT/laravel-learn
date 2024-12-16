@extends('dashboard.template_main')

@section('title')
    Edit Post
@endsection

@section('content')
    <h1>Edit Post</h1>
    @include('dashboard.fragment.error-form')
    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @include('dashboard.post._form', ['task'=>'edit'])
    </form>
@endsection
