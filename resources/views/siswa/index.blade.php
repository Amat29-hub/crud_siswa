{{--memanggil atau menghubungkan dengan file app--}}
@extends('layouts.app')
@section('title', 'Beranda Siswa')
@section('content')
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
                <td>{{$siswa->clas->name}}</td>
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

@endsection
