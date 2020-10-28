<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>index</title>
    </head>
<body>
    @foreach ($books as $book)
        <div>
            <h2>{{$book->title}}</h2>
            <h3>{{$book->author}}</h3>
        </div>
    @endforeach
</body>
</html>