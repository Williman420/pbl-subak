<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subak Sembung Experience</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col">

    <!-- HEADER -->
    <header class="bg-white mx-10">
        <x-nav-bar />
    </header>

    <!-- MAIN CONTENT (flex-1 is the key) -->
    <main class="flex-1">

        <!-- PAGE TITLE -->
        <section>
            <div class="w-full h-20 md:h-30 bg-primary text-center p-4">
                <h1 class="text-2xl md:text-3xl font-bold text-white">
                    Booking List
                </h1>
                <p class="mt-2 text-sm md:text-xl text-white">
                    View and manage all your Subak experiences
                </p>
            </div>
        </section>

        <!-- BOOKING LIST -->
        <section class="mx-auto mt-10 mb-10 px-20">
            <div class="grid place-items-center mx-auto grid-cols-1 gap-2 overflow-x-auto pb-5">
                @foreach($bookings as $booking)
                <div class="bg-white border border-gray-300 rounded-3xl p-6 shadow-sm w-full max-w-4xl">

                    <!-- Top Section -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">

                        <div>
                            <p class="text-gray-500 text-sm mb-1">Experience</p>
                            <h3 class="font-bold text-gray-900 text-lg">
                                {{ $booking->aktivitas->nama_aktivitas }}
                            </h3>
                        </div>

                        <div>
                            <p class="text-gray-500 text-sm mb-1">Date</p>
                            <p class="font-bold text-gray-900">
                                {{ $booking->tanggal_booking }}
                            </p>
                        </div>

                        <div>
                            <p class="text-gray-500 text-sm mb-1">Participants</p>
                            <p class="font-bold text-gray-900">
                                {{ $booking->jumlah_peserta }} Person
                            </p>
                        </div>

                        <div class="text-left md:text-right">
                            <p class="text-gray-500 text-sm mb-1">Total amount</p>
                            <p class="text-gray-900 font-medium">
                                IDR {{ number_format($booking->total_harga) }}
                            </p>
                        </div>

                    </div>

                    <div class="border-t border-gray-300 my-5"></div>

                    <!-- Bottom Section -->
                    <div class="flex flex-col md:flex-row justify-between gap-4">

                        <div class="flex gap-12">
                            <div>
                                <p class="text-gray-500 text-sm mb-1">Booking ID</p>
                                <p class="text-gray-900">
                                    #{{ $booking->id_booking }}
                                </p>
                            </div>

                            <div>
                                <p class="text-gray-500 text-sm mb-1">Booked On</p>
                                <p class="text-gray-900">
                                    {{ $booking->created_at }}
                                </p>
                            </div>
                        </div>

                        <span class="bg-[#bbf786] text-green-900 text-xs font-semibold px-4 py-1.5 rounded-full self-start md:self-end">
                            {{ $booking->status_booking }}
                        </span>

                    </div>
                </div>
                @endforeach
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <x-footer />
    </footer>

</body>

</html>