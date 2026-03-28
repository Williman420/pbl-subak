<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subak Sembung Experience</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    <x-nav-bar></x-nav-bar>

    <section>
        <div class="w-full h-20 md:h-30 bg-primary text-center p-4">
            <h1 class="text-2xl md:text-3xl font-bold text-white">Experience</h1>
            <p class="mt-2 text-sm md:text-xl text-white">Discover stories, tips, and cultural insights about the Subak irrigation system and authentic Balinese farming experiences.</p>
        </div>
    </section>


    <section class="mx-auto mt-10 mb-10 px-20 grow ">
        <div class="grid place-items-center mx-auto grid-cols-1 md:grid-cols-5 gap-2 overflow-x-auto pb-2">

            @foreach($experiences as $i)
            <a href="{{  route('experience.details', $i->id_aktivitas)  }}">

                <div class="min-w-[200px] md:min-w-[250px] snap-start bg-white rounded-xl shadow-sm overflow-hidden ">
                    <div class="h-50 md:h-60 overflow-hidden">
                        <img src="{{ asset("storage/".$i->gambar_aktivitas) }}" alt="{{ $i->nama_aktivitas }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-3">
                        <div class=" flex flex-row justify-between">
                            <h3 class="text-sm font-medium">{{ $i->nama_aktivitas }}</h3>
                            <p class="text-xs mt-1 
                                {{ $i->slot < 5 ? 'text-orange-500' : 'text-gray-500' }}">
                                {{ $i->slot }} Slots left
                            </p>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">{{ date('d', strtotime($i->start_date))}} - {{date('d F Y', strtotime($i->end_date))}}</p>
                        <div class="mt-3 flex items-center justify-between">
                            <span class="text-xs text-gray-600"> {{ $i->status_ketersediaan}}</span>
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