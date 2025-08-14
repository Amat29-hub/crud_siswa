<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('siswa.index');
});
Route::get('/', [SiswaController::class, 'index']);

Route::get('/siswa/create', [SiswaController::class, 'create']);

Route::post('/siswa/store', [SiswaController::class, 'store']);

Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy']);

Route::get('/siswa/show/{id}', [SiswaController::class, 'show']);

Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);

Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);

//route kelas
Route::get('/kelas', [ClassController::class, 'index']);
Route::get('/kelas/create', [ClassController::class, 'create']);
Route::post('/kelas/store', [ClassController::class, 'store']);
Route::get('/kelas/delete/{id}', [ClassController::class, 'destroy']);
Route::get('/kelas/show/{id}', [ClassController::class, 'show']);
Route::get('/kelas/edit/{id}', [ClassController::class, 'edit']);
Route::post('/kelas/update/{id}', [ClasController::class, 'update']);
