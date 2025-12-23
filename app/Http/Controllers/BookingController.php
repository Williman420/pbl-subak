<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;

class BookingController extends Controller
{
    public function formBooking(Aktivitas $aktivitas)
    {
        return view('BookingPage', [
            'aktivitas' => $aktivitas,
          

        ]);
    }
}
