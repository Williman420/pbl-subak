<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{

    protected $table = 'pengunjung';
    protected $primaryKey = 'id_pengunjung';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false; // 👈 Disable created_at and updated_at

    protected $fillable = [
        'username',
        'nama_lengkap',
        'email',
        'password',
        'no_tlp',
    ];
}
