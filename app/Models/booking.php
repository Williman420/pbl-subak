<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking'; // your table name

    protected $primaryKey = 'id_booking'; // primary key name

    public $timestamps = false; // because your table has no created_at / updated_at

    protected $fillable = [
        'id_pengunjung',
        'tanggal_booking',
        'jumlah_peserta',
        'status_booking',
        'total_harga',
    ];
}
