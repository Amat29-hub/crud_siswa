<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Detail Data Siswa</title>
    <link rel="stylesheet" href="{{ asset('assets/css/show.css') }}">
</head>
<body>
    <h1>Detail Siswa</h1>

    {{--profile siswa--}}
    <img src="{{asset ('storage/' . $datauser->photo)}}" width="140">

    {{--nama sisiwa--}}
    <h3>Nama Siswa : {{$datauser->name}}</h3>

    {{--nisn siswa--}}
    <h3>NISN Siswa : {{$datauser->nisn}}</h3>

    {{--alamat--}}
    <h3>Alamat Siswa : {{$datauser->alamat}}</h3>

    {{--email siswa--}}
    <h3>Email Siswa : {{$datauser->email}}</h3>

    {{--no handphone siswa--}}
    <h3>No Handphone siswa : {{$datauser->no_handphone}}</h3>

</body>
</html>
