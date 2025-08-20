{{--memanggil atau menghubungkan dengan file app--}}
@extends('layouts.app')
@section('title', 'Tambah Siswa')
@section('content')
@section('css')
<style>
    /*
    CSS untuk Halaman Tambah Data Siswa.
    Gaya minimalis, modern, dan animasi yang keren.
*/

/* --- General Body and Layout --- */
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

@keyframes popIn {
    from {
        transform: scale(0.8);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

h1, h2 {
    color: #1a4a75;
    text-align: center;
    margin: 0;
    font-weight: 600;
    animation: slideInDown 0.8s ease-out forwards;
}

h1 {
    font-size: 2.2rem;
    margin-bottom: 0.5rem;
}

h2 {
    font-size: 1.4rem;
    color: #6a8eac;
    margin-bottom: 1.5rem;
    animation-delay: 0.2s;
}

/* --- Back Link --- */
.back-link {
    display: inline-block;
    margin-bottom: 1.5rem;
    color: #4a69bd;
    text-decoration: none;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
    animation: slideInDown 0.8s ease-out forwards;
    animation-delay: 0.4s;
}

.back-link:hover {
    background-color: #4a69bd;
    color: #ffffff;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transform: translateY(-2px);
}

/* --- Form Styling --- */
form {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 550px;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    animation: slideInUp 0.8s ease-out forwards;
    animation-delay: 0.6s;
}

form div {
    display: flex;
    flex-direction: column;
    position: relative;
}

label {
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: #333;
}

input[type="text"],
input[type="tel"],
input[type="password"],
input[type="file"],
select {
    width: 100%;
    padding: 12px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 1em;
    transition: border-color 0.3s, box-shadow 0.3s;
    box-sizing: border-box;
}

input:focus,
select:focus {
    border-color: #4a69bd;
    box-shadow: 0 0 15px rgba(74, 105, 189, 0.2);
    outline: none;
}

/* --- Error and Small Text --- */
small {
    color: #e74c3c !important; /* Penting untuk override style inline */
    margin-top: 0.25rem;
    font-size: 0.85rem;
    animation: popIn 0.5s ease-out forwards;
}

/* --- Buttons --- */
button {
    padding: 14px 20px;
    border: none;
    border-radius: 8px;
    font-size: 1em;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
    color: #fff;
    width: 100%;
    animation: popIn 0.8s ease-out forwards;
}

button[type="submit"] {
    background-color: #2ecc71;
    margin-top: 1rem;
    animation-delay: 1.2s;
}

button[type="submit"]:hover {
    background-color: #27ae60;
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 8px 20px rgba(46, 204, 113, 0.4);
}

button[type="reset"] {
    background-color: #95a5a6;
    margin-top: 0.75rem;
    animation-delay: 1.4s;
}

button[type="reset"]:hover {
    background-color: #7f8c8d;
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 8px 20px rgba(149, 165, 166, 0.4);
}

/* --- Responsive Design --- */
@media (max-width: 600px) {
    body {
        padding: 1rem;
    }

    form {
        padding: 1.5rem;
        gap: 1rem;
    }

    h1 {
        font-size: 1.8rem;
    }

    h2 {
        font-size: 1.2rem;
    }
}
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
/*
    CSS untuk tautan "Kembali".
    Gaya minimalis, modern, dan beranimasi.
*/

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
</style>
@endsection
    <h1>HALAMAN TAMBAH SISWA</h1>
    <h2>Form Tambah Siswa</h2>
    <a href="/" class="back-link">Kembali</a>
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
