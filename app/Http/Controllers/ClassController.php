<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    //fungsi untuk mengarahkan ke halaman index
    public function index(){
        //siapkan data / panggil data siswa atau user
        $classes = Clas::all();

        return view('kelas.index', compact('classes'));
    }

        //fungsi untuk mengarahkan ke halaman create
    public function create(){
        //siapkan data / panggil data kelas
        $class = Clas::all();

        return view('kelas.create', compact('class'));
    }

    //untuk store data siswa
    public function store(Request $request){
        //validasi data
        $request->validate([
            'name'                 =>'required',
            'description'          =>'required',
        ]);
        //siapkan data yang akan di masukan
        $dataclas_store=[
            'name'         => $request->name,
            'description'  => $request->description,
        ];

        //masukkan data ke dalam tabel sisiwa
        Clas::create($dataclas_store);

        //arahkan user ke halama beranda
        return redirect('/kelas')->with('success', 'Kelas berhasil ditambahkan!');
}


//buat fungsi untuk delete data siswa
    public function destroy($id){
        //cari data user di database berdasarkan id user ada atau tidak
        $dataclas = Clas::find($id);

        //cek apakah data user ada atau tidak
        if ($dataclas){
            $dataclas->delete();
        }

        //kembalikan user ke halaman home / beranda
        return redirect('/kelas')->with('success', 'Kelas berhasil dihapus!');

    }

     public function show($id)
{
    // Cari data kelas berdasarkan ID
    $dataclas = Clas::find($id);

    // Jika tidak ditemukan, redirect ke halaman kelas
    if (!$dataclas) {
        return redirect('/kelas')->with('error', 'Kelas tidak ditemukan!');
    }

    // Kirim data ke view
    return view('kelas.show', compact('dataclas'));
}

public function edit($id){
        //cari data kelas berdasarkan id
        $dataclas = Clas::find($id);

        //cek apakah data kelas ada atau tidak
        if($dataclas == null){
            return redirect('/kelas')->with('error', 'Data kelas tidak ditemukan');
        }

        //kembalikan data kelas ke halaman edit
        return view('kelas.edit', compact('dataclas'));
    }

    public function update(Request $request, $id){
        //validasi data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //cari data kelas berdasarkan id
        $dataclas = Clas::find($id);

        if($dataclas == null){
            return redirect('/kelas')->with('error', 'Data kelas tidak ditemukan');
        }

        //siapkan data yang akan diupdate
        $dataclas_update = [
            'name'          => $request->name,
            'description'   => $request->description,
        ];

        //update data kelas
        $dataclas->update($dataclas_update);

        //arahkan user ke halaman index kelas
        return redirect('/kelas')->with('success', 'Kelas berhasil diupdate');
    }

}
