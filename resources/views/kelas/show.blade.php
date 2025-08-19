{{--memanggil atau menghubungkan dengan file app--}}
@extends('layouts.app')
@section('title', 'Detail Kelas')
@section('content')
    <nav>
        <a href="/kelas">Kembali</a>
    </nav>

    <h1>Detail Kelas</h1>
    <p><strong>Nama Kelas:</strong> {{ $dataclas->name }}</p>
    <p><strong>Deskripsi:</strong> {{ $dataclas->description }}</p>

@endsection
