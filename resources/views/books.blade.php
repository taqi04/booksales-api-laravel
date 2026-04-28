<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <br>
    <p>selamat datang di toko booksales</p>

    @foreach ($books as $item)
    <ul>
        <li>{{ $item['title']}}</li>
        <li>{{ $item['description']}}</li>
        <li>{{ $item['stock']}}</li>
        <li>{{ $item['price']}}</li>
    </ul>
    @endforeach
</body>
</html>