<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// menambahkan route untuk mahasiswa
Route::get('/mahasiswa','MahasiswaController@all');
Route::get('/mahasiswa/{nim}','MahasiswaController@show');      // mendapatkan data user
Route::post('/mahasiswa','MahasiswaController@store');
Route::put('/mahasiswa/{nim}','MahasiswaController@update');
Route::delete('/mahasiswa/{nim}','MahasiswaController@delete');

// menambahkan route untuk status
Route::get('/status','StatusController@all');
Route::get('/status/{nim_pengguna}','StatusController@show');
Route::post('/status','StatusController@store');
Route::put('/status/{nim_pengguna}','StatusController@update');
Route::put('/status/activate/{nim_pengguna}','StatusController@activate');      // aktivasi user
Route::put('/status/deactivate/{nim_pengguna}','StatusController@deactivate');  // nonaktivasi user
Route::delete('/status/{nim_pengguna}','StatusController@delete');

// menambahkan route untuk log
Route::get('/log','LogController@all');
Route::get('/log/{nim_pengguna}','LogController@show');
Route::post('/log','LogController@store');                  // menyimpan log
Route::put('/log/{log_id}','LogController@update');
Route::delete('/log/{log_id}','LogController@delete');