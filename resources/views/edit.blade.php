<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit</title>
    </head>
<body>
    <form action="{{route('Books.update', $book->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$book->title}}">
        <input type="text" name="author" value="{{$book->author}}">

        <input type="submit" value="salva">
    </form>
</body>
</html>