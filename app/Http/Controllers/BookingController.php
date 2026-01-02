<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function formBooking(Aktivitas $aktivitas)
    {
        return view('BookingPage', [
            'aktivitas' => $aktivitas,


        ]);
    }

    public function cancel(Request $request, Booking $booking)
    {
        // Ownership check
        if ($booking->id_pengunjung !== Auth::id()) {
            abort(403);
        }

        // Prevent double cancel
        if ($booking->status_booking === 'cancelled') {
            return back()->with('error', 'Booking already cancelled.');
        }

        DB::transaction(function () use ($booking) {

            // 1️⃣ Restore slot to aktivitas
            $aktivitas = $booking->aktivitas;

            $aktivitas->increment('slot', $booking->jumlah_peserta);

            // 2️⃣ Update booking status
            $booking->update([
                'status_booking' => 'cancelled',
            ]);
        });

        return back()->with('success', 'Booking cancelled successfully. If you already payed, your payment will be returned shortly.');
    }


    public function showMyBooking()
    {
        return view('MyBookingPage', [
            'bookings' => Booking::where('id_pengunjung', Auth::user()->id_pengunjung)->get(),
        ]);
    }
}
