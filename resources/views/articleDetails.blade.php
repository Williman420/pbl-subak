<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $article->judul }} | Subak Sembung Experience</title>

    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col bg-gray-50 text-gray-800">

    <!-- HEADER -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6">
            <x-nav-bar />
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-grow px-4 py-12">
        <article class="max-w-3xl mx-auto bg-white rounded-2xl shadow-sm overflow-hidden">

            <!-- IMAGE -->
            <div class="h-[220px] md:h-[420px] overflow-hidden">
                <img
                    src="{{ asset('storage/' . $article->gambar_aktivitas) }}"
                    alt="{{ $article->judul }}"
                    class="w-full h-full object-cover"
                    loading="lazy" />
            </div>

            <!-- CONTENT -->
            <div class="px-6 md:px-10 py-8">

                <!-- TITLE -->
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 leading-snug">
                    {{ $article->judul }}
                </h1>

                <!-- META -->
                <p class="mt-2 text-sm text-gray-500">
                    {{ \Carbon\Carbon::parse($article->tanggal_pembuatan)->translatedFormat('d F Y') }}
                </p>

                <!-- DIVIDER -->
                <hr class="my-6">

                <!-- ARTICLE BODY -->
                <div class="prose prose-gray max-w-none leading-relaxed text-justify">
                    {!! nl2br(e($article->isi_artikel)) !!}
                </div>

            </div>
        </article>
    </main>

    <!-- FOOTER -->
    <footer class="mt-auto">
        <x-footer />
    </footer>

</body>

</html>