@extends('dashboard.template_main')

@section('content')
    <ul>
        @foreach ($posts as $post)
            <li>Title: {{ $post->title }}
                <ul>
                    <li>ID: {{ $post->id }}</li>
                    <li>Description: {{ $post->description }}</li>
                    <li>Category: {{ $post->category->title }}</li>
                    <li>Posted: {{ $post->posted }}</li>
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
