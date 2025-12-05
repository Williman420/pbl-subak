<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking_memiliki_jadwal extends Model
{
    protected $table = 'booking_memiliki_jadwal'; // your table name



    public $timestamps = false; // because your table has no created_at / updated_at

    protected $fillable = [
        'id_jadwal',
        'id_booking',
        'harga_aktivitas',
        'jumlah_peserta',
    ];
}
