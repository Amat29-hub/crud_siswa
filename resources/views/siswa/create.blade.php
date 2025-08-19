{{--memanggil atau menghubungkan dengan file app--}}
@extends('layouts.app')
@section('title', 'Tambah Siswa')
@section('content')
    <h1>HALAMAN TAMBAH SISWA</h1>
    <h2>Form Tambah Siswa</h2>
    <a href="/">Kembali</a>
    <form action="/siswa/store" method="POST" enctype="multipart/form-data"><br>
        @csrf
        <div>
            <label for="">Kelas</label><br>
            <select name="kelas_id">
                @foreach ($clases as $clas)
                    <option value="{{$clas->id}}">{{$clas->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Nama</label> <br>
            <input type="text" name="name"><br>
            @error('name')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="">NISN</label> <br>
            <input type="text" name="nisn"><br>
        </div>
        @error('nisn')
            <small style="color:red">{{$message}}</small>
        @enderror
        <div>
            <label for="">Alamat</label> <br>
            <input type="text" name="alamat"><br>
            @error('alamat')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="">Email</label> <br>
            <input type="text" name="email"><br>
            @error('email')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="">Password</label> <br>
            <input type="password" name="password"><br>
            @error('password')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="">No Handphone</label> <br>
            <input type="tel" name="no_handphone"><br>
            @error('no_handphone')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="">Foto</label> <br>
            <input type="file" name="foto"><br>
            @error('foto')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>

        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>
    </form>
@endsection
