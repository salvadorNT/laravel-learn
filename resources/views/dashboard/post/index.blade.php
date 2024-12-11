@extends('dashboard.template_main')

@section('content')
<table>
    <th>ID</th>
    <th>Title</th>
    <th>Category</th>
    <th>Posted</th>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->description }}</td>
        <td>{{ $post->category->title}}</td>
        <td>{{ $post->posted }}</td>
    </tr>
    @endforeach
</table>

{{$posts->links()}}
@endsection
