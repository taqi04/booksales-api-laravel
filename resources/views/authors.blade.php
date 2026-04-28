<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Author</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Bio</th>
    </tr>

    @foreach($authors as $a)
    <tr>
        <td>{{ $a->name }}</td>
        <td>{{ $a->bio }}</td>
    </tr>
    @endforeach
</body>
</html>