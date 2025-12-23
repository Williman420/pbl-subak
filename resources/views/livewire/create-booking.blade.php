<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">

        <h2 class="text-lg font-bold mb-3">
            Booking: {{ $aktivitas->nama_aktivitas }}
        </h2>

        @if (session()->has('success'))
        <div class="bg-green-100 text-green-700 p-2 mb-3 rounded">
            {{ session('success') }}
        </div>
        @endif

        <form wire:submit.prevent="submit" class="space-y-4">

            <input type="date" wire:model="tanggal_booking"
                class="w-full border p-2 rounded">

            <input type="number" min="1"
                wire:model="jumlah_peserta"
                class="w-full border p-2 rounded">

            <div class="bg-gray-100 p-2 rounded">
                Harga: Rp {{ number_format($aktivitas->harga) }} <br>
                Total: Rp {{ number_format($total_harga) }}
            </div>

            <button class="w-full bg-blue-600 text-white py-2 rounded">
                Book
            </button>

        </form>
    </div>

</body>

</html>