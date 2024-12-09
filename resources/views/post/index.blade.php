<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
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
</body>

</html>
