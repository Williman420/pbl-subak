<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengunjung extends Authenticatable
{

    protected $table = 'pengunjung';
    protected $primaryKey = 'id_pengunjung';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'nama_lengkap',
        'email',
        'password',
        'no_tlp',
    ];
}
