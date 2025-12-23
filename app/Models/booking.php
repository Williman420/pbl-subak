<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking'; // your table name

    protected $primaryKey = 'id_booking'; // primary key name

    public $timestamps = false; // because your table has no created_at / updated_at

    protected $fillable = [
        'id_aktivitas',
        'id_pengunjung',
        'tanggal_booking',
        'jumlah_peserta',
        'status_booking',
        'total_harga',
    ];

    public function aktivitas()
    {
        return $this->belongsTo(aktivitas::class, 'id_aktivitas', 'id_aktivitas');
    }
    public function pengunjung()
    {
        return $this->belongsTo(Pengunjung::class, 'id_pengunjung', 'id_pengunjung');
    }
}
