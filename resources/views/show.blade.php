<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show</title>
    </head>
<body>
    <ul>
        <li>{{$book->title}}</li>
        <li>{{$book->author}}</li>
    </ul>
    <form action="{{route("books.destroy", $book->id)}}" method="POST">
        @method("DELETE")
        @csrf
        <input type="submit" value="Cancella">
    </form>

</body>
</html>