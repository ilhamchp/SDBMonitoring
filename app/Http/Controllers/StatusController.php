<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    /*----------------------*/
    /*--- BASIC CRUD API ---*/
    /*----------------------*/

    // mengambil semua data
    public function all()
    {
        return Status::all();
    }

    // mengambil data by nim_pengguna
    public function show($nim_pengguna)
    {
        return Status::where('nim_pengguna',$nim_pengguna);
    }

    // menambah data
    public function store(Request $request)
    {
        return Status::create($request->all());
    }

    // mengubah data
    public function update($nim_pengguna, Request $request)
    {
        $status = Status::where('nim_pengguna',$nim_pengguna);
        $status->update($request->all());
        return $status;
    }

    // menghapus data
    public function delete($nim_pengguna)
    {
        $status = Status::where('nim_pengguna',$nim_pengguna);
        $status->delete();
        return 204;
    }

    /*----------------------------------------*/
    /*--- API UNTUK SISTEM ABSENSI LAB SDB ---*/
    /*----------------------------------------*/


    // aktifkan status user
    public function activate($nim_pengguna, Request $request)
    {
        $status = Status::where('nim_pengguna',$nim_pengguna);
        if(!$status->update([
            'nomor_pc' => $request->nomor_pc,
            'status_pengguna' => '1'
        ])){
            // Jika update gagal
            return [
                'message' => 'Bad Request',
                'code' => 400,
            ];
        } else {
            // Jika update sukses
            return [
                'message' => 'OK',
                'code' => 201,
            ];
        }
    }
}
