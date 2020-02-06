<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    // mengambil semua data
    public function all()
    {
        return Log::all();
    }

    // mengambil data by nim_pengguna
    public function show($nim_pengguna)
    {
        return Log::find($nim_pengguna);
    }

    // menambah data
    public function store(Request $request)
    {
        return Log::create($request->all());
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
}
