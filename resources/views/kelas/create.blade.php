{{--memanggil atau menghubungkan dengan file app--}}
@extends('layouts.app')
@section('title', 'Tambah Kelas')
@section('content')
@section('css')
<style>
/*
    CSS untuk Halaman Tambah Kelas.
    Gaya minimalis, modern, dan fokus pada keterbacaan formulir.
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
    min-height: 100vh;
}

/* --- Navigation Menu (Nav) --- */
nav {
    width: 100%;
    max-width: 550px;
    margin-bottom: 2rem;
    display: flex; /* Menggunakan flexbox */
    justify-content: center; /* Memusatkan item secara horizontal */
}

nav a {
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

nav a:hover {
    background-color: #4a69bd;
    color: #ffffff;
    box-shadow: 0 4px 10px rgba(74, 105, 189, 0.3);
    transform: translateY(-2px);
}

nav a:active {
    transform: translateY(0);
    box-shadow: none;
}

/* --- Headings --- */
h1, h2 {
    color: #1a4a75;
    text-align: center;
    margin: 0;
    font-weight: 600;
}

h1 {
    font-size: 2.2rem;
    margin-bottom: 0.5rem;
}

h2 {
    font-size: 1.4rem;
    color: #6a8eac;
    margin-bottom: 1.5rem;
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
}

button[type="submit"] {
    background-color: #2ecc71;
    margin-top: 1rem;
}

button[type="submit"]:hover {
    background-color: #27ae60;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(46, 204, 113, 0.4);
}

button[type="reset"] {
    background-color: #95a5a6;
    margin-top: 0.75rem;
}

button[type="reset"]:hover {
    background-color: #7f8c8d;
    transform: translateY(-2px);
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
    <nav>
        <a href="/kelas" class="back-link">Kembali</a>
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
