{{--memanggil atau menghubungkan dengan file app--}}
@extends('layouts.app')
@section('title', 'Detail Siswa')
@section('content')
<a href="/">Kembali</a><br><br>
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

@endsection
