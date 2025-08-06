<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda Siswa</title>
</head>
<body>
    <h1>HALAMAN BERANDA SISWA</h1>
    <h2>Daftar Siswa</h2>
    <a href="siswa/create">Tambah Data Siswa</a>
    <table border="5">
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
                    <img src="{{asset ('storage/' . $siswa->photo)}}" alt="Photo Siswa" width="50">
                </td>
                <td>
                    <a href="">DELETE</a> |
                    <a href="">EDIT</a> |
                    <a href="">DETAIL</a> |
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
