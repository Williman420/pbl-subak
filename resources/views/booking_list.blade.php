<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subak Sembung Experience</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-nav-bar></x-nav-bar>

    <section>
        <div class="w-full h-20 md:h-30 bg-primary text-center p-4">
            <h1 class="text-2xl md:text-3xl font-bold text-white">Booking List</h1>
            <p class="mt-2 text-sm md:text-xl text-white">View and manage all your Subak experiences</p>
        </div>
    </section>


    <section class="mx-auto mt-10 mb-10 px-20 ">
        <div class="grid place-items-center mx-auto grid-cols-1 gap-2 overflow-x-auto pb-5">
            @foreach(range(1,6) as $a)
            <div class="bg-white border border-gray-300 rounded-3xl p-6 shadow-sm">
                <!-- Top Section -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <!-- Experience -->
                    <div class="md:col-span-1">
                        <p class="text-gray-500 text-sm mb-1">Experience</p>
                        <h3 class="font-bold text-gray-900 text-lg leading-tight">Cultural Heritage Workshop</h3>
                    </div>

                    <!-- Date -->
                    <div class="md:col-span-1">
                        <p class="text-gray-500 text-sm mb-1">Date</p>
                        <p class="font-bold text-gray-900">Nov 12, 2025</p>
                    </div>

                    <!-- Participants -->
                    <div class="md:col-span-1">
                        <p class="text-gray-500 text-sm mb-1">Participants</p>
                        <p class="font-bold text-gray-900">3 Person</p>
                    </div>
                    <!-- Status & Price -->
                    <div class="md:col-span-1 text-left md:text-right flex flex-col items-start md:items-end">
                        <div class="flex gap-2 mb-1">
                            <!-- Confirmed Badge -->
                            <span class="bg-[#bbf786] text-green-900 text-xs font-semibold px-3 py-1 rounded-full">
                                Confirmed
                            </span>
                            <!-- Paid Badge -->
                            <span class="bg-[#bbf786] text-green-900 text-xs font-semibold px-3 py-1 rounded-full flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Paid
                            </span>
                        </div>
                        <p class="text-gray-900 font-medium">IDR 1.755.000</p>
                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-gray-300 my-5"></div>

                <!-- Bottom Section -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
                    <div class="flex gap-12">
                        <!-- Booking ID -->
                        <div>
                            <p class="text-gray-500 text-sm mb-1">Booking ID</p>
                            <p class="text-gray-900">#1762262961299</p>
                        </div>

                        <!-- Booked On -->
                        <div>
                            <p class="text-gray-500 text-sm mb-1">Booked On</p>
                            <p class="text-gray-900">Nov 4, 2025</p>
                        </div>
                    </div>

                    <!-- Bottom Status Badge -->
                    <div>
                        <span class="bg-[#bbf786] text-green-900 text-xs font-semibold px-4 py-1.5 rounded-full">
                            Confirmed
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>





    </section>



    <footer>
        <x-footer></x-footer>
    </footer>


</body>


</html>