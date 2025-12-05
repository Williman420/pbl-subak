<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aktivitas extends Model
{

    protected $table = 'aktivitas';
    protected $primaryKey = 'id_aktivitas';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false; // 👈 Disable created_at and updated_at

    protected $fillable = [
        'nama_aktivitas',
        'deskripsi',
        'harga',
        'gambar_aktivitas',
        'status_ketersediaan',
    ];
}
