<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Subak Sembung Experience</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen text-gray-800 flex-col">
    <header class="bg-white ml-10 mr-10">
        <x-nav-bar>
        </x-nav-bar>
    </header>

    <section class="px-6 pb-10 mx-0 md:mx-10 grow">
        <div class="mt-4 rounded-xl overflow-hidden">
            <img src="/assets/sawah_hero.png" alt="Subak rice terraces hero" class="w-full h-full md:h-100 object-cover" loading="lazy" />
        </div>

        <div class="text-center mt-10 px-4 md:px-24">
            <h1 class="text-2xl md:text-3xl font-bold">Experience the Ancient Art of Balinese Rice Farming</h1>
            <p class="mt-3 text-sm md:text-xl  text-gray-600">
                Step into the UNESCO-listed Subak rice terrace system in North Denpasar and participate in centuries-old agricultural traditions while learning sustainable farming practices.
            </p>
        </div>

        {{-- Available Planting Sessions --}}

        <div class="mt-30 ">
            <div class="flex flex-row justify-between mb-5">
                <h2 class="font-semibold text-base md:text-xl mb-4">Available Planting Sessions</h2>
                <a href="/experience" class="mt-3 text-sm md:text-sm text-gray-600">See more</a>

            </div>

            <div class="flex gap-5 overflow-x-auto pb-2 snap-x snap-mandatory">
                {{-- session card - replicate or loop with blade --}}

                @foreach($experiences as $i)

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
        </div>


        {{-- ARTICLES --}}
        <div class="mt-10 pb-8">
            <div class="flex flex-row justify-between mb-5">
                <h2 class="font-semibold text-base md:text-xl mb-4">Articles</h2>
                <a href="/articles" class="mt-3 text-sm md:text-sm  text-gray-600">See more</a>

            </div>

            <div class="flex gap-4 overflow-x-auto pb-2 snap-x snap-mandatory">
                {{-- article card --}}
                @foreach($artikels as $a)
                <article class="min-w-[150px] md:max-w-[300px]  bg-white rounded-xl shadow-sm overflow-hidden snap-start ">
                    <div class="h-50 rounded-tl-lg rounded-tr-lg overflow-hidden">
                        <img src="{{  asset("storage/".$a->gambar_aktivitas) }} " alt="{{ $a->judul }}" class="w-full h-full object-cover" />
                    </div>

                    <div class="mt-3 p-3">
                        <time class="text-xs text-gray-500"> {{ date('d F Y', strtotime($a->tanggal_pembuatan)) }}</time>
                        <h3 class="mt-1 text-sm font-semibold">{{ $a->judul }}</h3>
                        <p class="text-xs text-gray-600 mt-2 line-clamp-3">
                            {{ Str::limit($a->isi_artikel, 100) }}
                        </p>
                        <div class="mt-3 flex justify-between items-center">
                            <a href="#" class="text-xs text-[#0b6abf] font-medium">Read more</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

</body>
<footer>
    <x-footer></x-footer>
</footer>