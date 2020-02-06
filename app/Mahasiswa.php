<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $primaryKey = 'nim';
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'mahasiswa';
    protected $fillable = ['nim','nama','tanggal_lahir'];
}
