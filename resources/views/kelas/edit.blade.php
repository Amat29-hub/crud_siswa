{{--memanggil atau menghubungkan dengan file app--}}
@extends('layouts.app')
@section('title', 'Edit Kelas')
@section('content')
    <h1>Halaman Tambah Kelas</h1>
    <b>Form Tambah Kelas</b>
    <br>
    <a href="/kelas">Kembali</a>
    <br>
    <form action="/kelas/update/{{ $dataclas->id }}" method="POST">
        @csrf
        <div>
            <label for="">Nama Kelas</label>
            <br>
            <input type="text" name="name" placeholder="Masukkan nama kelas" value="{{ $dataclas->name }}"><br>
            @error('name')
                <small><span style="color: red;">{{ $message }}</span></small>
            @enderror
        </div>
        <div>
            <label for="">deskripsi</label>
            <br>
            <input type="text" name="description" value="{{ $dataclas->description }}"><br>
            @error('description')
                <small><span style="color: red;">{{ $message }}</span></small>
            @enderror
        </div>
        <br>
        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>
    </form>
@endsection
