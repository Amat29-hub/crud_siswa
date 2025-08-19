{{--memanggil atau menghubungkan dengan file app--}}
@extends('layouts.app')
@section('title', 'Tambah Kelas')
@section('content')
    <nav>
        <a href="/kelas">Kembali</a>
    </nav>
    <h1>HALAMAN TAMBAH KELAS</h1>
    <h2>Form Tambah KELAS</h2>
    <form action="/kelas/store" method="POST" enctype="multipart/form-data"><br>
        @csrf
        <div>
            <label for="">KELAS</label> <br>
            <input type="text" name="name"><br>
            @error('name')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="">Description</label> <br>
            <input type="text" name="description"><br>
            @error('description')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>
    </form>
@endsection
