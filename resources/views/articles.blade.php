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

    <main class="flex-col grow">
        <section>
            <div class="w-full h-20 md:h-30 bg-primary text-center p-4">
                <h1 class="text-2xl md:text-3xl font-bold text-white">Articles</h1>
                <p class="mt-2 text-md md:text-xl text-white">Discover stories, tips, and cultural insights about the Subak irrigation system and authentic Balinese farming experiences.</p>
            </div>
        </section>


        <section class="max-w-7xl mx-auto mt-10 mb-16 px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($artikel as $a)
                <a href="{{ route('article.details', $a->id_artikel) }}" class="h-full">
                    <div
                        class="
            group
            bg-white rounded-xl overflow-hidden
            shadow-md
            flex flex-col h-full
            transition duration-300 ease-out
            hover:-translate-y-1
            hover:shadow-lg
        ">

                        <!-- Gambar -->
                        <div class="h-48 overflow-hidden">
                            <img
                                src="{{ asset('storage/'.$a->gambar_aktivitas) }}"
                                alt="{{ $a->judul }}"
                                class="
                    w-full h-full object-cover
                    transition duration-300
                    group-hover:scale-105
                " />
                        </div>

                        <!-- Konten -->
                        <div class="p-4 flex flex-col h-full">
                            <time class="text-xs text-gray-500">
                                {{ $a->tanggal_pembuatan }}
                            </time>

                            <h3 class="mt-2 text-base font-semibold text-gray-900 line-clamp-2">
                                {{ $a->judul }}
                            </h3>

                            <p class="mt-2 text-sm text-gray-600 line-clamp-3">
                                {{ Str::limit($a->isi_artikel, 100) }}
                            </p>

                            <!-- Read more -->
                            <span
                                class="
                    mt-auto pt-4
                    text-sm font-medium text-primary
                    transition
                    group-hover:translate-x-1
                ">
                                Read more →
                            </span>
                        </div>

                    </div>
                </a>

                @endforeach
            </div>
        </section>

    </main>
</body>

<footer>
    <x-footer></x-footer>
</footer>


</html>