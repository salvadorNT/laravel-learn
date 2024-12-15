@extends('dashboard.template_main')

@section('content')
    <a href="{{ route('post.create') }}">
        <button>Crear</button>
    </a>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Posted</th>
            <th>Options</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->title }}</td>
                <td>{{ $post->posted }}</td>
                <td>
                    <a href="{{ route('post.edit', $post->id) }}">Editar</a>
                    <a href="{{ route('post.show', $post->id) }}">Detalle</a>
                    <a href="{{ route('post.destroy', $post->id) }}">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $posts->links() }}
@endsection
