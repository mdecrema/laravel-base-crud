<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>index</title>
    </head>
<body>
    @foreach
        <div>
            <h2>{{$book->title}}</h2>
            <h3>{{$book->author}}</h3>
        </div>
    @endforeach
</body>
</html>