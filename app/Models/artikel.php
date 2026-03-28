<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel'; // your table name

    protected $primaryKey = 'id_artikel'; // primary key name

    public $timestamps = false; // because your table has no created_at / updated_at

    protected $fillable = [
        'id_pengelola',
        'judul',
        'tanggal_pembuatan',
        'gambar_aktivitas',
        'modified_date',
        'isi_artikel'
    ];

    
}
