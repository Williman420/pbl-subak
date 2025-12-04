<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Subak Sembung Experience</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen text-gray-800">
    <header class="bg-white ml-10 mr-10">
        <x-nav-bar>

        </x-nav-bar>
    </header>

    <section class="px-6 pb-10 mx-0 md:mx-10">
        <div class="mt-4 rounded-xl overflow-hidden">
            <img src="/assets/sawah_hero.png" alt="Subak rice terraces hero" class="w-full h-full md:h-100 object-cover" />
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
                <a href="#" class="mt-3 text-sm md:text-sm text-gray-600">See more</a>

            </div>

            <div class="flex gap-5 overflow-x-auto pb-2 snap-x snap-mandatory">
                {{-- session card - replicate or loop with blade --}}
                @foreach(range(1,5) as $i)
                <div class="min-w-[200px] md:min-w-[250px] snap-start bg-white rounded-xl shadow-sm overflow-hidden ">
                    <div class="h-50 md:h-60 overflow-hidden">
                        <img src="/assets/planting.png" alt="rice paddy" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-3">
                        <h3 class="text-sm font-medium">Rice Paddy Planting</h3>
                        <p class="text-xs text-gray-500 mt-1">10 spots left</p>
                        <p class="text-xs text-gray-500 mt-1">10 - 23 Oct 2025</p>
                        <div class="mt-3 flex items-center justify-between">
                            <span class="text-xs text-gray-600">Available</span>
                            <button class="text-xs px-2 py-1 border rounded text-[#0b6abf]">Book</button>
                        </div>
                    </div>
                </div>
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
                @foreach(range(1,5) as $a)
                <article class="min-w-[300px] bg-white rounded-xl shadow-sm overflow-hidden snap-start ">
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
        </div>
    </section>


</body>

<footer>
    <x-footer></x-footer>
</footer>

</html>