@extends('dashboard.template_main')

@section('title')
    Create Post
@endsection

@section('content')

    @include('dashboard.fragment.error-form')
    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.post._form')
    </form>
@endsection
