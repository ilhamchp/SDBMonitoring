<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $primaryKey = '';
    public $incrementing = false;
    const CREATED_AT = 'last_modified';
    const UPDATED_AT = 'last_modified';
    protected $table = 'status';
    protected $fillable = ['nim_pengguna','nomor_pc','status'];
}
