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
            <h1 class="text-2xl md:text-3xl font-bold text-white">Articles</h1>
            <p class="mt-2 text-sm md:text-xl text-white">Discover stories, tips, and cultural insights about the Subak irrigation system and authentic Balinese farming experiences.</p>
        </div>
    </section>


    <section class="mx-auto mt-10 mb-10 px-20 ">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 overflow-x-auto pb-2 ">
            {{-- article card --}}
            @foreach(range(1,6) as $a)
            <article class="min-w-[150px] md:max-w-[400px] bg-white rounded-xl shadow-md overflow-hidden ">
                <div class="h-50 rounded-tl-lg rounded-tr-lg overflow-hidden">
                    <img src="/assets/loginBG.svg " alt="subak terraces" class="w-full h-full object-cover" />
                </div>

                <div class="mt-3 p-3">
                    <time class="text-xs text-gray-500">November 3, 2025</time>
                    <h3 class="mt-1 text-sm font-semibold">The History and Significance of Subak in Balinese Culture</h3>
                    <p class="text-xs text-gray-600 mt-2 line-clamp-3">
                        Explore the ancient roots of the Subak irrigation system and how it has shaped Balinese civilization for over a thousand years. Learn about its UNESCO World Heritage recognition and cultural importance.
                    </p>
                    <div class="mt-3 flex justify-between items-center">
                        <a href="#" class="text-xs text-[#0b6abf] font-medium">Read more</a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </section>



    <footer>
        <x-footer></x-footer>
    </footer>


</body>


</html>