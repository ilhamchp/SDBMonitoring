<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
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
}
