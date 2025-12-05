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
        <div class="image-carousel flex overflow-x-auto space-x-4 mb-8 snap-x snap-mandatory">
            <!-- Image 1 -->
            <div class="carousel-item h-80 rounded-2xl overflow-hidden shadow-lg snap-start  flex-wrap">
                <img src="https://placehold.co/800x600/6aa84f/ffffff/svg?text=Rice+Paddy+Planting+1"
                    onerror="this.onerror=null;this.src='https://placehold.co/800x600/6aa84f/ffffff/svg?text=Image+1+Unavailable';"
                    alt="Rice Paddy Planting" class="w-full h-full object-cover">
            </div>
            <!-- Image 2 (Center - simulating the main focus image) -->
            <div class="carousel-item h-80 rounded-2xl overflow-hidden shadow-lg snap-start flex-wrap relative">
                <img src="https://placehold.co/800x600/6aa84f/ffffff/svg?text=Rice+Paddy+Planting+2"
                    onerror="this.onerror=null;this.src='https://placehold.co/800x600/6aa84f/ffffff/svg?text=Image+2+Unavailable';"
                    alt="Rice Paddy Planting" class="w-full h-full object-cover">
                <!-- Watermark/Credit Placeholder -->
                <div class="absolute bottom-2 right-3 text-white text-xs bg-black bg-opacity-40 px-2 py-0.5 rounded-md">Stock Credit</div>
            </div>
            <!-- Image 3 -->
            <div class="carousel-item h-80 rounded-2xl overflow-hidden shadow-lg snap-start  flex-wrap">
                <img src="https://placehold.co/800x600/6aa84f/ffffff/svg?text=Rice+Paddy+Planting+3"
                    onerror="this.onerror=null;this.src='https://placehold.co/800x600/6aa84f/ffffff/svg?text=Image+3+Unavailable';"
                    alt="Rice Paddy Planting" class="w-full h-full object-cover">
            </div>
        </div>
    </section>



</body>

<footer>
    <x-footer></x-footer>
</footer>