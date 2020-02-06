<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import file model Mahasiswa
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    // mengambil semua data
    public function all()
    {
        return Mahasiswa::all();
    }

    // mengambil data by nim (primary key)
    public function show($nim)
    {
        return Mahasiswa::find($nim);
    }

    // menambah data
    public function store(Request $request)
    {
        return Mahasiswa::create($request->all());
    }

    // mengubah data
    public function update($nim, Request $request)
    {
        $mahasiswa = Mahasiswa::find($nim);
        $mahasiswa->update($request->all());
        return $mahasiswa;
    }

    // menghapus data
    public function delete($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        $mahasiswa->delete();
        return 204;
    }
}
