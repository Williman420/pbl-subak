<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;
use App\Models\Aktivitas;
use Illuminate\Support\Facades\Auth;

class CreateBooking extends Component
{
    public Aktivitas $aktivitas;

    public $tanggal_booking;
    public $jumlah_peserta = 1;
    public $total_harga = 0;

    public function mount(Aktivitas $aktivitas)
    {
        $this->aktivitas = $aktivitas;
        $this->total_harga = $aktivitas->harga;
    }

    public function updatedJumlahPeserta()
    {
        $this->total_harga = $this->aktivitas->harga * $this->jumlah_peserta;
    }

    public function submit()
    {
        $user = Auth::user();
        Booking::create([
            'id_aktivitas' => $this->aktivitas->id_aktivitas,
            'id_pengunjung' => $user->id_pengunjung,
            'tanggal_booking' => $this->tanggal_booking,
            'jumlah_peserta' => $this->jumlah_peserta,
            'status_booking' => 'pending',
            'total_harga' => $this->total_harga,
        ]);

        session()->flash('success', 'Booking saved');
    }

    public function render()
    {
        return view('livewire.create-booking');
    }
}
