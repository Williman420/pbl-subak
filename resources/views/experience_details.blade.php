<!DOCTYPE html>
<html lang="en">
@vite('resources/css/app.css')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @php
    @endphp
    <h1>{{ $experience->nama_aktivitas }}</h1>
    <img src="{{ asset("storage/".$experience->gambar_aktivitas) }}" alt="Activity Image" style="width:300px;height:auto;">
    <p>{{ $experience->deskripsi_aktivitas }}</p>
    <p>Start Date: {{ date('d F Y', strtotime($experience->start_date)) }}</p>
    <p>End Date: {{ date('d F Y', strtotime($experience->end_date)) }}</p>
    <p>Slots Left: {{ $experience->slot }}</p>
    <p>Status: {{ $experience->status_ketersediaan }}</p>
    <a href="{{ route('booking.formBooking', ['experience' => $experience->id_aktivitas]) }}"
        class="text-xs px-2 py-1 border rounded text-[#0b6abf] inline-block">
        Book
    </a>
</body>

</html>