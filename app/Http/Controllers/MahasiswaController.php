<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import file model Mahasiswa
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /*----------------------*/
    /*--- BASIC CRUD API ---*/
    /*----------------------*/

    // mengambil semua data
    public function all()
    {
        return Mahasiswa::all();
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

    /*----------------------------------------*/
    /*--- API UNTUK SISTEM ABSENSI LAB SDB ---*/
    /*----------------------------------------*/

    // mengambil data by nim (primary key)
    public function show($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        if($mahasiswa!=null){
            return [
                'nim' => $mahasiswa->nim,
                'nama' => $mahasiswa->nama,
                'tanggal_lahir' => $mahasiswa->tanggal_lahir,
                'code' => 200
            ];
        }else{
            return [
                'message' => 'NIM ' + $nim + ' tidak terdaftar!',
                'code' => 400
            ];
        }
    }
}
