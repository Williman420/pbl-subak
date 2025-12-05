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
            <h1 class="text-2xl md:text-3xl font-bold text-white">About Subak Bali</h1>
            <p class="mt-2 text-sm md:text-xl text-white">Discover the heritage and significance of the traditional Balinese irrigation system</p>
        </div>
    </section>


    <section class="mx-auto mt-10 mb-10 px-10 flex justify-between md:flex-row items-center gap-10">
        <div class="md:w-1/2">
            <h1 class="text-2xl md:text-3xl font-bold">What is Subak</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <img src="/assets/loginBG.svg" alt="About Subak Image"
            class="w-full md:w-1/3 h-50 rounded-lg object-cover" />
    </section>

    <div class="h-50  bg-secondary px-6 pb-10 mx-0 md:mx-10 rounded-2xl border">
        <div class="flex flex-row p-5">
            <img src="/assets/icons/fa_university.png" alt="" class=" w-10 h-10 mr-10">
            <div class="">
                <h1 class="text-2xl md:text-3xl font-bold">What is Subak</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

    <section class="mx-auto mt-10 mb-10 px-10 flex justify-between md:flex-row items-center">
        <img src="/assets/loginBG.svg" alt="About Subak Image"
            class="w-full md:w-1/3 h-50 rounded-lg object-cover" />
        <div class="md:w-1/2">
            <h1 class="text-2xl md:text-3xl font-bold">History of subak</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </section>


    <section class="mx-auto mt-10 mb-10 px-10 flex justify-between md:flex-col">
        <h1 class="text-2xl md:text-3xl font-bold ">Location and access</h1>
        <div class="h-fit flex flex-wrap px-10 py-6  rounded-2xl border">
            <div class="flex flex-row p-5 justify-between">
                <div class="grid gap-1 w-1/2">
                    <h1 class="text-sm md:text-xl font-bold">Subak Sembung, North Denpasar</h1>
                    <div>
                        <h2 class=" text-base md:text-base font-bold">Location</h2>
                        <p>North Denpasar (Denpasar Utara), Denpasar City, Bali, Indonesia</p>
                    </div>
                    <div>
                        <h3 class=" text-base md:text-base font-bold">Region </h3>
                        <p class=" text-justify">Situated in the northern district of Denpasar, Subak Sembung overlooks the capital city while maintaining its traditional agricultural character and peaceful countryside atmosphere.</p>

                    </div>
                </div>
                <div class="flex flex-col">
                    <iframe class="w-100 h-60 rounded-xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.8162716716556!2d115.21396410000001!3d-8.6136311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f1f40bef909%3A0x4c4bc184c8e647c6!2sEkowisata%20Subak%20Sembung%2C%20Peguyangan!5e0!3m2!1sid!2sid!4v1764311792720!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <button type="Copy to Clipboard"
                        class="w-full p-4 mt-4 bg-primary text-white py-2 rounded-3xl hover:bg-[#0E5B11] transition items-center">
                        <div class="flex flex-row justify-around items-center">
                            <p>Get Direction</p>
                            <img src="/assets/icons/mdi_location.png" alt="" class=" w-10 h-10">
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <x-footer></x-footer>
    </footer>

</body>

<html