<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subak Sembung Experience</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="min-h-screen flex flex-col">


    <header class="bg-white mx-10">
        <x-nav-bar />
    </header>

    <main class="flex-1">



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
        @if (session('success'))
        <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show"
            x-transition.opacity.duration.300ms
            class="fixed top-6 right-6 z-50">
            <div class="flex items-center gap-4 bg-[#bbf786] text-[#25301B] px-6 py-4 rounded-2xl shadow-lg max-w-lg">
                <i class="fa-solid fa-circle-check text-green-800"></i>

                <p class="text-sm font-medium">
                    {{ session('success') }}
                </p>

                <button
                    @click="show = false"
                    class="ml-auto text-black/70 hover:text-black">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
        @endif


        <section class="mx-auto mt-10 mb-10 px-20">
            <div class="grid place-items-center mx-auto grid-cols-1 gap-2 overflow-x-auto pb-5">
                @foreach($bookings as $booking)
                <div class="bg-white border border-gray-300 rounded-3xl p-6 shadow-sm w-full max-w-4xl">


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
                            <p class="text-gray-500 text-sm mb-1">Time</p>
                            <p class="font-bold text-gray-900">
                                @if($booking->jam_mulai && $booking->jam_selesai)
                                {{ \Carbon\Carbon::parse($booking->jam_mulai)->format('H:i') }}
                                -
                                {{ \Carbon\Carbon::parse($booking->jam_selesai)->format('H:i') }}
                                @else
                                <span class="text-gray-400 italic">Belum ditentukan</span>
                                @endif

                            </p>
                        </div>


                        <div>
                            <p class="text-gray-500 text-sm mb-1">Participants</p>
                            <p class="font-bold text-gray-900">
                                {{ $booking->jumlah_peserta }} Person
                            </p>
                        </div>

                        <div class="text-left md:text-left">
                            <p class="text-gray-500 text-sm mb-1">Total amount</p>
                            <p class="text-gray-900 font-medium">
                                IDR {{ number_format($booking->total_harga) }}
                            </p>
                        </div>

                    </div>

                    <div class="border-t border-gray-300 my-5"></div>


                    <div class="flex flex-col md:flex-row justify-between gap-4 items-start md:items-end">

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

                        <div class="flex items-center gap-3">
                            {{-- Status badge --}}
                            <span class="text-xs font-semibold px-4 py-1.5 rounded-full border border-gray-300
                        @if ( $booking->status_booking == 'pending' ) bg-[#FFE79F] text-[#390909]
                        @elseif ($booking->status_booking == 'confirmed') bg-[#bbf786] text-[#25301B]
                        @elseif ($booking->status_booking == 'cancelled') bg-[#FEC1BF] text-[#180D0C]
                        @endif
        ">
                                {{ ucfirst($booking->status_booking) }}
                            </span>

                            {{-- Cancel button --}}
                            @if(in_array($booking->status_booking, ['pending', 'confirmed']))
                            <form
                                action="{{ route('booking.cancel', $booking) }}"
                                method="POST"
                                onsubmit="return confirm('Are you sure you want to cancel this booking?')">
                                @csrf
                                <button
                                    type="submit"
                                    class="text-xs px-4 py-1.5 rounded-full border border-red-400
                           text-red-600 hover:bg-red-50 transition">
                                    Cancel
                                </button>
                            </form>

                            @endif
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </section>

    </main>

    <footer>
        <x-footer />
    </footer>

</body>

</html>