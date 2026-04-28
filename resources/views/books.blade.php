<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Buku</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Judul</th>
        <th>Author</th>
        <th>Harga</th>
    </tr>

    @foreach($books as $b)
    <tr>
        <td>{{ $b->title }}</td>
        <td>{{ $b->author->name }}</td>
        <td>{{ $b->price }}</td>
    </tr>
    @endforeach
</body>
</html>