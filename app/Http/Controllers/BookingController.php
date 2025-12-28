<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class BookingController extends Controller
{
    public function formBooking(Aktivitas $aktivitas)
    {
        return view('BookingPage', [
            'aktivitas' => $aktivitas,


        ]);
    }


    public function showMyBooking()
    {
        return view('MyBookingPage', [
            'bookings' => Booking::where('id_pengunjung', Auth::user()->id_pengunjung)->get(),
        ]);
    }
}
