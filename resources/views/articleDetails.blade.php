<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Subak Sembung Experience</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col text-gray-800">

    <!-- Header -->
    <header class="bg-white mx-10">
        <x-nav-bar />
    </header>

    <!-- Main content (grows to push footer down) -->
    <main class="px-6 pb-10 mx-0 md:mx-10 grow">
        <div class="mt-4 rounded-xl overflow-hidden">
            <img src="/assets/sawah_hero.png" alt="Subak rice terraces hero" class="w-full h-full md:h-100 object-cover" loading="lazy" />
        </div>
        <section class="max-w-2/3">


            <div class="text-center mt-10 px-4 md:px-24">
                <h1 class="text-2xl md:text-3xl font-bold">Experience the Ancient Art of Balinese Rice Farming</h1>
                <p class="mt-3 text-sm md:text-xl  text-gray-600">
                    Step into the UNESCO-listed Subak rice terrace system in North Denpasar and participate in centuries-old agricultural traditions while learning sustainable farming practices.
                </p>
            </div>
        </section>
        <div class="mt-10 pb-8">
            <div class="flex flex-row justify-between mb-5">
                <h2 class="font-semibold text-base md:text-xl mb-4">Articles</h2>
                <a href="/articles" class="mt-3 text-sm md:text-sm  text-gray-600">See more</a>

            </div>

            <div class="flex gap-4 overflow-x-auto pb-2 snap-x snap-mandatory">
                {{-- article card --}}
                @foreach($artikels as $a)
                <a href="{{  route('article.details', $a->id_artikel)  }}">
                    <div class="min-w-[150px] md:max-w-[400px] flex-wrap bg-white rounded-xl shadow-md overflow-hidden ">
                        <div class="h-50 rounded-tl-lg rounded-tr-lg overflow-hidden">
                            <img src="{{ $a->gambar_aktivitas }}" alt="subak terraces" class="w-full h-full object-cover" />
                        </div>

                        <div class="mt-3 p-3">
                            <time class="text-xs text-gray-500">{{ $a->tanggal_pembuatan }}</time>
                            <h3 class="mt-1 text-sm font-semibold">{{ $a->judul }}</h3>
                            <p class="text-xs text-gray-600 mt-2 line-clamp-3">
                                {{ Str::limit($a->isi_artikel, 100) }}
                            </p>
                            <div class="mt-3 flex justify-between items-center text-xs text-primary font-medium">
                                Read more
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <x-footer />
    </footer>

</body>

</html>