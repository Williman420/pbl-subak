<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Subak Sembung Experience</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col text-gray-800">


    <header class="bg-white mx-10">
        <x-nav-bar />
    </header>


    <main class="px-6 pb-10 mx-0 md:mx-10 grow">
        <div class="mt-4 rounded-xl overflow-hidden">
            <img src="{{ asset("storage/".$article->gambar_aktivitas) }}" alt="{{ $article->nama_aktivitas }}" class="w-full h-full md:h-120 object-cover " loading="lazy" />
        </div>

        <div class="p-6 md:p-10">


            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">
                {{ $article->judul }}
            </h1>

            <div class="leading-relaxed text-justify text-gray-600 mb-4">
                {{ $article->tanggal_pembuatan }}
            </div>



            <div class="prose prose-gray max-w-none leading-relaxed text-justify">
                {{ $article->isi_artikel }}
            </div>

        </div>
    </main>


    <footer>
        <x-footer />
    </footer>

</body>

</html>