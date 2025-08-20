{{--memanggil atau menghubungkan dengan file app--}}
@extends('layouts.app')
@section('title', 'Beranda Kelas')
@section('content')
@section('css')
<style>
    /*
    CSS untuk Halaman Beranda Kelas.
    Menggunakan gaya minimalis, modern, dan animasi yang halus.
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
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

nav a:hover {
    background-color: #6a8eac;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
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
    animation: slideInDown 0.8s ease-out forwards;
    animation-delay: 0.2s;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}

h2 {
    font-size: 1.5rem;
    color: #6a8eac;
    margin-bottom: 2rem;
    animation-delay: 0.4s;
}

/* --- Table Styling --- */
table {
    width: 100%;
    max-width: 1200px;
    border-collapse: collapse;
    background-color: #ffffff;
    border-radius: 10px;
    overflow: hidden; /* Penting untuk border-radius */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    animation: slideInUp 0.8s ease-out forwards;
    animation-delay: 0.6s;
}

thead {
    background-color: #1a4a75;
    color: #ffffff;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #e0e0e0;
}

th {
    font-weight: 600;
    text-transform: uppercase;
}

tbody tr:hover {
    background-color: #f0f3f6;
    transition: background-color 0.3s ease;
}

tbody tr:last-child td {
    border-bottom: none;
}

/* --- Action Links --- */
td a {
    color: #4a69bd;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease, transform 0.3s ease;
    display: inline-block;
}

td a:hover {
    color: #1a4a75;
    transform: scale(1.05);
}

/* --- Responsive Design --- */
@media (max-width: 768px) {
    body {
        padding: 1rem;
    }

    nav {
        flex-direction: column;
        align-items: center;
        width: 100%;
        padding: 1rem;
    }

    nav a {
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }

    table, thead, tbody, th, td, tr {
        display: block;
    }

    thead {
        display: none;
    }

    tr {
        margin-bottom: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    td {
        border-bottom: 1px solid #ddd;
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: bold;
        text-align: left;
    }
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
    <nav>
        <a href="/" class="back-link">Kembali</a> |
        <a href="/kelas/create" class="back-link">Tambah Kelas</a>
    </nav>

    <h1>HALAMAN BERANDA SISWA</h1>
    <h2>Daftar Siswa</h2>

    <table border="4">
        <thead>
            <tr>
                <th>KELAS</th>
                <th>DESCRIPTION</th>
                <th>OPTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $kelas)
            <tr>
                <td>{{$kelas->name}}</td>
                <td>{{$kelas->description}}</td>
                <td>
                    <a href="/kelas/delete/{{$kelas->id}}">Delete</a> |
                    <a href="/kelas/edit/{{$kelas->id}}">Edit</a> |
                    <a href="/kelas/show/{{$kelas->id}}">Detail</a> |
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
