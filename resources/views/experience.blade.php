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
            <h1 class="text-2xl md:text-3xl font-bold text-white">Experience</h1>
            <p class="mt-2 text-sm md:text-xl text-white">Discover stories, tips, and cultural insights about the Subak irrigation system and authentic Balinese farming experiences.</p>
        </div>
    </section>


    <section class="mx-auto mt-10 mb-10 px-20 ">
        <div class="grid place-items-center mx-auto grid-cols-1 md:grid-cols-5 gap-2 overflow-x-auto pb-2">
            @foreach(range(1,6) as $a)
            <div class="min-w-[250px] md:max-w-[300px] snap-start bg-white rounded-xl shadow-sm overflow-hidden mb-4">
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
    </section>



    <footer>
        <x-footer></x-footer>
    </footer>


</body>


</html>