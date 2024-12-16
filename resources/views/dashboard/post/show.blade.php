@extends('dashboard.template_main')

@section('content')
    <H1>Title: {{ $post->title }}</H1>
    <span>publicado: {{ $post->posted }}</span>
    <br>
    <span>Categoría: {{ $post->category->title }}</span>
    <div>
        <h2>Descripción</h2>
        <p>{{ $post->description }}</p>
    </div>
    <div>
        <h2>Contenido</h2>
        <p>{{ $post->content }}</p>
    </div>
    <div>
        <img src="/uploads/posts/{{$post->image}}" style="width: 250px" alt="post image">
    </div>
@endsection
