<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>MENGEDIT DATA SISWA</h1>
    <h2>Form Edit Siswa</h2>
    <a href="/">Kembali</a><br><br>
    <img src="{{asset('storage/' .$datauser->photo)}}" alt="Photo Siswa" width="120"><br>
    <form action="/siswa/store" method="POST" enctype="multipart/form-data"><br>
        @csrf
        <div>
            <label for="">Kelas</label><br>
            <select name="kelas_id">
                @foreach ($clases as $clas)
                    <option {{$clas->id == $datauser->clas_id ? 'selected' : ''}} value="{{$clas->id}}">{{$clas->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Nama</label> <br>
            <input type="text" name="name" value="{{$datauser->name}}"><br>
            @error('name')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="">NISN</label> <br>
            <input type="text" name="nisn" value="{{$datauser->nisn}}"><br>
        </div>
        @error('nisn')
            <small style="color:red">{{$message}}</small>
        @enderror
        <div>
            <label for="">Alamat</label> <br>
            <input type="text" name="alamat" value="{{$datauser->alamat}}"><br>
            @error('alamat')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="">Email</label> <br>
            <input type="text" name="email" value="{{$datauser->email}}"><br>
            @error('email')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="">Password</label> <br>
            <input type="password" name="password"><br>
            <small style="color:red">tambahkan password jika ingin mengubah password</small>
            @error('password')
                <small style="color:red">{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="">No Handphone</label> <br>
            <input type="tel" name="no_handphone" value="{{$datauser->no_handphone}}"><br>
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
</body>
</html>
