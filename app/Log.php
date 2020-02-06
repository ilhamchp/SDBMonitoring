<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $primaryKey = 'log_id';
    public $incrementing = true;
    const CREATED_AT = 'last_modified';
    const UPDATED_AT = 'last_modified';
    protected $table = 'log';
    protected $fillable = ['nim_pengguna','kegiatan','no_pc','waktu_masuk','waktu_keluar'];
}
