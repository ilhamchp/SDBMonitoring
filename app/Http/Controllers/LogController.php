<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import file model Mahasiswa
use App\Log;

class LogController extends Controller
{
    /*----------------------*/
    /*--- BASIC CRUD API ---*/
    /*----------------------*/

    // mengambil semua data
    public function all()
    {
        return Log::all();
    }

    // menyimpan data
    public function store(Request $request)
    {
        return Log::create($request->all());
    }

    // mengambil data by nim_pengguna
    public function show($nim_pengguna)
    {
        return Log::find($nim_pengguna);
    }

    // mengubah data
    public function update($log_id, Request $request)
    {
        $log = Log::find($log_id);
        $log->update($request->all());
        return $log;
    }

    // menghapus data
    public function delete($log_id)
    {
        $log = Log::find($log_id);
        $log->delete();
        return 204;
    }

    /*----------------------------------------*/
    /*--- API UNTUK SISTEM ABSENSI LAB SDB ---*/
    /*----------------------------------------*/
    
    // menyimpan data kegiatan
    public function savedata(Request $request)
    {
        $data= $request->json()->all();
        // dd($data['nama']);
        if(!Log::create( [
            'nim_pengguna'=> $data['nim'],
            'kegiatan'=> $data['kegiatan'],
            'no_pc'=> $data['no_pc'],
            'waktu_masuk'=> $data['waktu_masuk'],
            'waktu_keluar'=> $data['waktu_keluar']
        ])){
            // Jika insert gagal
            return [
                'message' => 'Gagal menyimpan kegiatan user ' . $request->nim_pengguna,
                'code' => 400
            ];
        }else {
            // Jika insert sukses
            return [
                'message' => 'Berhasil menyimpan kegiatan user ' . $request->nim_pengguna,
                'code' => 201
            ];
        }
    }
}
