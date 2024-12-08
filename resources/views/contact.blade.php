<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<body>
    <h1>Contact</h1>

    @isset($name)
        <h1>Bienvenido {{ $name }}</h1>
    @endisset

    <ul>
        @foreach ([1, 2, 3, 4, 5, 6] as $item)
            <li>
                {{ $item }}
            </li>
        @endforeach
    </ul>
</body>

</html>
