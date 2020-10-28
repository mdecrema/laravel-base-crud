<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
<body>
    <form action="{{route('books.store')}}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="title">
        <input type="text" name="author">

        <input type="submit" value="salva">
    </form>
</body>
</html>