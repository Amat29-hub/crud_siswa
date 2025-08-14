<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Kelas</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <nav>
        <a href="/kelas">Kembali</a>
    </nav>

    <h1>Detail Kelas</h1>
    <p><strong>Nama Kelas:</strong> {{ $dataclas->name }}</p>
    <p><strong>Deskripsi:</strong> {{ $dataclas->description }}</p>

</body>
</html>
