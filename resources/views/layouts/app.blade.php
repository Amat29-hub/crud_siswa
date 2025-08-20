<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>

</head>
<body>
    {{-- Menu Navigasi --}}
    <nav>
        <a href="{{ url('/siswa/create') }}">Menu Siswa</a> |
        <a href="{{ url('/kelas') }}">Menu Kelas</a>
    </nav>

    <hr>

    {{--body conten--}}
    @yield('content')
    @yield('css')
</body>
</html>
