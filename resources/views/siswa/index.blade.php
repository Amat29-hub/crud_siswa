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

    <!-- Menu Navigasi -->
    <nav>
        <a href="/siswa/create">Tambah Siswa</a>
        <a href="/kelas">Tambah Class</a>
    </nav>

    <h1>HALAMAN BERANDA SISWA</h1>
    <h2>Daftar Siswa</h2>

    <table border="4">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>NISN</th>
                <th>ALAMAT</th>
                <th>PHOTO</th>
                <th>OPTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr>
                <td>{{$siswa->id}}</td>
                <td>{{$siswa->name}}</td>
                <td>{{$siswa->Clas->name}}</td>
                <td>{{$siswa->nisn}}</td>
                <td>{{$siswa->alamat}}</td>
                <td>
                    <img src="{{ asset('storage/' . $siswa->photo) }}" alt="Photo Siswa" width="50">
                </td>
                <td>
                    <a onclick="return confirm('apakah mau di hapus?')" href="/siswa/delete/{{$siswa->id}}">Delete</a> |
                    <a href="/siswa/edit/{{$siswa->id}}">Edit</a> |
                    <a href="/siswa/show/{{$siswa->id}}">Detail</a> |
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
