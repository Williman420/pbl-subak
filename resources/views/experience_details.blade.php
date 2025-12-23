<!DOCTYPE html>
<html lang="en">
@vite('resources/css/app.css')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subak Sembung Experience</title>
</head>

<body class="min-h-screen text-gray-800 flex-col">
    <header class="bg-white ml-10 mr-10">
        <x-nav-bar>
        </x-nav-bar>
    </header>

    <section class="px-6 pb-10 mx-0 md:mx-10 grow">
        <div class="my-4 rounded-xl overflow-hidden">
            <img src="{{ asset("storage/".$experience->gambar_aktivitas) }}" alt="{{ $experience->nama_aktivitas }}" class="w-full h-full md:h-120 object-cover" loading="lazy" />
        </div>
        <i class="fa-regular fa-circle-left" style="color: #000000;"></i> Home Page
        <span class="flex-row justify-between flex">
            <h2 class="mt-3 text-2xl md:text-3xl text-black">
                {{ $experience->nama_aktivitas }}
            </h2>

            <span class="flex-col">
                <h1 class=" text-gray-600 mt-1">Available From</h1>
                <p class="text-sm text-gray-600 mt-1">{{ date('d', 
                strtotime($experience->start_date))}} - {{date('d F Y', strtotime($experience->end_date))}}</p>
            </span>
        </span>
        <p class="text-sm text-gray-500 mt-1">{{ $experience->slot}} slots left</p>
        <div class="my-6 w-1/3 md:w-2/3">
            <h3 class="text-lg font-semibold mb-2">About this experience</h3>
            <p class="text-gray-700 text-justify">
                {{ $experience->deskripsi }}
            </p>
        </div>

        <a href="{{ route('booking.create', $experience->id_aktivitas, $experience->harga ) }}">
            <div class="  text-sm px-3 py-3 rounded-xl text-white inline-block bg-[#1E2E11]">
                Book a spot
                <i class="fa-regular fa-calendar-plus"></i>
            </div>
        </a>


        <div class="flex flex-row justify-between mt-20">
            <h2 class="font-semibold text-base md:text-xl mb-4">Other Planting Sessions</h2>
            <a href="/experience" class="mt-3 text-sm md:text-sm text-gray-600">See more</a>

        </div>

        <div class="flex gap-5 overflow-x-auto pb-2 snap-x snap-mandatory">
            @foreach($experienceList as $i)

            <a href="{{  route('experience.details', $i->id_aktivitas)  }}">
                <div class="min-w-[200px] max-w-[250px] snap-start bg-white rounded-xl shadow-sm overflow-hidden ">
                    <div class="h-50 md:h-60 overflow-hidden">
                        <img src="{{ asset("storage/".$i->gambar_aktivitas) }}" alt="{{ $i->nama_aktivitas }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-3">
                        <div class=" flex flex-row justify-between">
                            <h3 class="text-sm font-medium">{{$i->nama_aktivitas}}</h3>
                            <p class="text-xs mt-1 
                             {{ $i->slot < 5 ? 'text-orange-500' : 'text-gray-500' }}">
                                {{ $i->slot }} Slots left
                            </p>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">{{ date('d', strtotime($i->start_date))}} - {{date('d F Y', strtotime($i->end_date))}}</p>
                        <div class="mt-3 flex items-center justify-between">
                            <span class="text-xs text-gray-600"> {{ $i->status_ketersediaan }}</span>
                            <button class="text-xs px-2 py-1 border rounded text-[#0b6abf]">Book</button>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </section>










</body>
<footer>
    <x-footer></x-footer>
</footer>

</html>