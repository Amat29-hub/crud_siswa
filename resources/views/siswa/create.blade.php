<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>HALAMAN TAMBAH SISWA</h1>
    <h2>Form Tamnbah Siswa</h2>
    <a href="/">Kembali</a>
    <form action="/siswa/store" method="POST">
        @csrf
        <div>
            <label for="">Kelas</label>
            <select name="kelas_id">
                <option value="1">XII PPLG 1</option>
                <option value="2">XII PPLG 2</option>
                <option value="3">XII PPLG 3</option>
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
            <input type="file" name="foto">
        </div>

        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
