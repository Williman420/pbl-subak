<div class="w-full max-w-md mx-auto p-6 bg-white rounded-xl shadow border border-gray-600">

    <h2 class="text-lg font-bold mb-3">
        Booking: {{ $aktivitas->nama_aktivitas }}
    </h2>

    @if (session()->has('success'))
    <div class="bg-green-100 text-primary p-2 mb-3 rounded">
        {{ session(key: 'success') }}
    </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-4">
        <p class="text-sm text-gray-600 mt-1">
            Date
        </p>
        <input type="date" required
            wire:model="tanggal_booking"
            class="w-full border p-2 rounded">
        <p class="text-sm text-gray-600 mt-1">
            Number of Participants
        </p>
        <input type="number" min="1"
            wire:model="jumlah_peserta"
            class="w-full border p-2 rounded">

        <div class="bg-gray-100 p-2 rounded text-black">
            Price: Rp {{ number_format($aktivitas->harga) }} <br>
        </div>

        <button wire:click="submit"
            {{ $aktivitas->slot < $jumlah_peserta ? 'disabled' : '' }}
            class="w-full bg-primary text-white py-2 rounded-xl disabled:bg-gray-400 disabled:cursor-not-allowed" wire:click="showModal = true">
            Book
        </button>

    </form>
    @if ($showModal && $selectedBooking)
    <div class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center">
        <div class="bg-white w-full max-w-md rounded-2xl shadow-lg p-6">

            <h2 class="text-xl font-bold">Booking Confirmation</h2>
            <p class="text-sm text-gray-600 mt-1">
                Review your booking details before proceeding to payment
            </p>

            <div class="mt-5">
                <p class="text-sm text-gray-600">Experiences</p>
                <p class="font-semibold">{{ $aktivitas->nama_aktivitas }}</p>
            </div>

            <div class="flex justify-between mt-5">
                <div>
                    <p class="text-sm text-gray-500">Date</p>
                    <p class="font-semibold">{{ $selectedBooking->tanggal_booking }}</p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Participants</p>
                    <p class="font-semibold">{{ $selectedBooking->jumlah_peserta }} Person</p>
                </div>
            </div>

            <div class="mt-6">
                <p class="text-sm text-gray-600 mb-2">Guest Information</p>
                <div class="bg-gray-100 rounded-lg p-3">
                    <p class="font-semibold text-black">{{ $selectedBooking->pengunjung->nama_lengkap }}</p>
                    <p class="text-sm text-black">{{ $selectedBooking->pengunjung->email }}</p>
                </div>
            </div>

            <div class="mt-6 border-t pt-4">
                <div class="flex justify-between font-bold bg-green-50 p-3 rounded-lg">
                    <span>Total Amount</span>
                    <span>IDR {{ number_format($selectedBooking->total_harga) }}</span>
                </div>
            </div>
            <p class="text-sm text-gray-500">Please verify your payment via WhatsApp by sending a screenshot of your Payment </p>



            <a aria-label="Chat on WhatsApp" href="https://wa.me/087763085571">
                <button class="w-full mt-6 bg-primary text-white py-3 rounded-full font-semibold">
                    Proceed to WhatsApp
                </button>
            </a>
        </div>
    </div>
    @endif


    <a href="{{ route('experience.details', $aktivitas->id_aktivitas) }}">
        <button class="w-full bg-primary text-white py-2 rounded-xl mt-5">
            Back to activity details
        </button>
    </a>



</div>