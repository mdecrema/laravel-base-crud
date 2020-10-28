<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
<body>
    <form action="{{route('Books.store')}}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="title">
        <input type="text" name="author">

        <input type="submit" value="salva">
    </form>
</body>
</html>