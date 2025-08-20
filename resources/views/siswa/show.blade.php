{{--memanggil atau menghubungkan dengan file app--}}
@extends('layouts.app')
@section('title', 'Detail Siswa')
@section('content')
@section('css')
<style>
    /*
    CSS untuk Halaman Detail Siswa.
    Menggunakan gaya minimalis, modern, dan berfokus pada keterbacaan.
*/

/* --- General Body and Layout --- */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f6; /* Latar belakang abu-abu muda */
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2rem;
}

/* --- Back Link --- */
.back-link {
    display: inline-block;
    text-decoration: none;
    color: #4a69bd;
    font-weight: 500;
    padding: 10px 20px;
    border-radius: 8px;
    border: 2px solid #4a69bd;
    background-color: transparent;
    transition: all 0.3s ease;
    margin-bottom: 2rem;
}

.back-link:hover {
    background-color: #4a69bd;
    color: #ffffff;
    box-shadow: 0 4px 10px rgba(74, 105, 189, 0.3);
    transform: translateY(-2px);
}

.back-link:active {
    transform: translateY(0);
    box-shadow: none;
}

/* --- Main Container --- */
.detail-container {
    background-color: #ffffff;
    padding: 2.5rem;
    border-radius: 15px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
    text-align: center;
}

/* --- Profile Photo --- */
.profile-photo {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #fff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 1.5rem;
}

/* --- Headings --- */
h1 {
    color: #1a4a75;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

h3 {
    font-size: 1.2rem;
    color: #333;
    margin: 0.8rem 0;
    text-align: left;
    padding-left: 20px;
    border-left: 4px solid #4a69bd;
}

/* --- Responsive Design --- */
@media (max-width: 600px) {
    .detail-container {
        padding: 1.5rem;
    }

    .profile-photo {
        width: 120px;
        height: 120px;
    }

    h1 {
        font-size: 2rem;
    }

    h3 {
        font-size: 1rem;
        padding-left: 10px;
    }
}
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f6; /* Warna latar belakang lembut */
    color: #333;
    margin: 0;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
    animation: fadeIn 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
    opacity: 0;
}

/* Keyframe Animasi */
@keyframes fadeIn {
    to {
        opacity: 1;
    }
}

@keyframes slideInDown {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes slideInUp {
    from {
        transform: translateY(50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* --- Navigation Menu (Nav) --- */
nav {
    background-color: #1a4a75;
    padding: 1rem 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
    display: flex;
    gap: 20px;
    animation: slideInDown 0.8s ease-out forwards;
}

nav a {
    color: #ffffff;
    text-decoration: none;
    font-weight: 500;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

nav a:hover {
    background-color: #6a8eac;
    transform: translateY(-2px);
}
</style>
@endsection
<a href="/" class="back-link">Kembali</a><br>
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
