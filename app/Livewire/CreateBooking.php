<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;
use App\Models\Aktivitas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateBooking extends Component
{
    public Aktivitas $aktivitas;

    public $tanggal_booking;
    public $jumlah_peserta = 1;
    public $total_harga = 0;
    public $timestamps = true;
    public $showModal = false;
    public $selectedBooking = null;

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
        $this->validate([
            'tanggal_booking' => 'required|date',
            'jumlah_peserta'  => 'required|integer|min:1',
        ]);

        try {
            DB::transaction(function () {

                $user = Auth::user();


                $aktivitas = Aktivitas::where('id_aktivitas', $this->aktivitas->id_aktivitas)
                    ->lockForUpdate()
                    ->first();


                if ($aktivitas->slot < $this->jumlah_peserta) {
                    throw new \Exception('Slot tidak mencukupi.');
                }

                $booking = Booking::create([
                    'id_aktivitas'    => $aktivitas->id_aktivitas,
                    'id_pengunjung'   => $user->id_pengunjung,
                    'tanggal_booking' => $this->tanggal_booking,
                    'jumlah_peserta'  => $this->jumlah_peserta,
                    'status_booking'  => 'pending',
                    'total_harga'     => $this->total_harga,
                ]);

                $aktivitas->decrement('slot', $this->jumlah_peserta);

                $this->selectedBooking = $booking;
                $this->showModal = true;
            });

            session()->flash(
                'success',
                'Booking saved, continue to WhatsApp to verify your payment!'
            );
        } catch (\Exception $e) {
            $this->addError('jumlah_peserta', $e->getMessage());
        }
    }



    public function closeModal()
    {
        $this->reset(['showModal', 'selectedBooking']);
    }

    public function render()
    {
        return view('livewire.create-booking');
    }
}
