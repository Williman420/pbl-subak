<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{


    public function formBooking()
    {
        return view('BookingPage');
    }

    public function create(Booking $booking,)
    {
        // dd($experience);
        $pengunjung_id = Auth::id();
        $booking = Booking::create([
            'id_pengunjung' => $pengunjung_id,
            'tanggal_booking' => $booking->tanggal_booking,
            'jumlah_peserta' => $booking->jumlah_peserta,
            'status_booking' => $booking->status_booking,
            'total_harga' => $booking->total_harga * $booking->jumlah_peserta,
        ]);

        return view('BookingPage', compact('booking'));
    }
}
