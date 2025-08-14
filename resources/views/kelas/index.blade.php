<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda Siswa</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <nav>
        <a href="/">Kembali</a>
        <a href="/kelas/create">Tambah Kelas</a>
    </nav>

    <h1>HALAMAN BERANDA SISWA</h1>
    <h2>Daftar Siswa</h2>

    <table border="4">
        <thead>
            <tr>
                <th>KELAS</th>
                <th>DESCRIPTION</th>
                <th>OPTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $kelas)
            <tr>
                <td>{{$kelas->name}}</td>
                <td>{{$kelas->description}}</td>
                <td>
                    <a href="/kelas/delete/{{$kelas->id}}">Delete</a> |
                    <a href="/kelas/edit/{{$kelas->id}}">Edit</a> |
                    <a href="/kelas/show/{{$kelas->id}}">Detail</a> |
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
