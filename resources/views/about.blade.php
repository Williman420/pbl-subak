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

    <!-- HERO -->
    <section>
        <div class="w-full h-20 md:h-30 bg-primary text-center p-4">
            <h1 class="text-2xl md:text-3xl font-bold text-white">
                About Subak Bali
            </h1>
            <p class="mt-2 text-sm md:text-xl text-white">
                Discover the heritage and significance of the traditional Balinese irrigation system
            </p>
        </div>
    </section>

    <!-- WHAT IS SUBAK -->
    <section class="mx-auto mt-10 mb-10 px-4 md:px-10 flex flex-col md:flex-row items-center gap-10">
        <div class="md:w-1/2">
            <h1 class="text-2xl md:text-3xl font-bold mb-4">
                What is Subak
            </h1>
            <p class="text-left md:text-justify">
                Subak is the water management (irrigation) system for the paddy fields on Bali island, Indonesia.
                It was developed in the 9th century. For the Balinese, irrigation is not simply providing water
                for the plant's roots, but water is used to construct a complex, pulsed artificial ecosystem
                that is at the same time autonomous and interdependent. The system consists of terraced rice
                fields and water temples covering nearly 20,000 hectares (49,000 acres). The temples are the
                main focus of this cooperative water management, known as subak.
            </p>
        </div>

        <img src="/assets/loginBG.svg" alt="About Subak Image"
            class="w-full md:w-2/4 h-120 rounded-lg object-cover" />
    </section>

    <!-- UNESCO -->
    <section class="px-4 md:px-10">
        <div class="bg-secondary p-5 rounded-2xl border">
            <div class="flex flex-col md:flex-row gap-6">
                <img src="/assets/icons/fa_university.png" alt=""
                    class="w-10 h-10 md:mr-10">

                <div>
                    <h1 class="text-2xl md:text-3xl font-bold mb-4">
                        UNESCO World Heritage
                    </h1>
                    <p class="mb-3 text-left md:text-justify">
                        On 6 July 2012, subak was listed as a UNESCO World Heritage Site under the title
                        "Cultural Landscape of Bali Province: the Subak System as a Manifestation of the
                        Tri Hita Karana Philosophy". This Unesco Site includes five sites that demonstrate
                        the interconnected natural, religious, and cultural components of the traditional
                        subak system
                    </p>
                    <p class="text-left md:text-justify">
                        In 2008, during the evaluation of the proposition by the World Heritage Committee,
                        the rice terraces of the original Jatiluwih site was vastly expanded; it was renamed
                        "Subak Landscape of Catur Angga Batukaru" and now includes 17 subak gede institutions,
                        12 customary villages, the two lakes of Tamblingan and Buyan, and forest areas of
                        Batukaru natural reserves across the two districts of Tabanan and Buleleng - all of
                        which are ecologically and culturally connected to the Jatiluwih terrasses.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- HISTORY -->
    <section class="mx-auto mt-10 mb-10 px-4 md:px-10 flex flex-col md:flex-row items-center gap-10">
        <img src="/assets/subak_sembung.jpeg" alt="About Subak Image"
            class="w-full md:w-2/4 h-120 rounded-lg object-cover" />

        <div class="md:w-1/2 md:ml-10">
            <h1 class="text-2xl md:text-3xl font-bold mb-4">
                History of Subak Sembung
            </h1>
            <p class="text-left md:text-justify">
                Subak Sembung is a 115-hectare protected agricultural area and eco-tourism destination in
                North Denpasar, Bali, that serves as a vital "green lung" for the city. It showcases the
                traditional Balinese subak irrigation system, which is managed through the spiritual and
                communal philosophy of Tri Hita Karana to ensure harmony between people, nature, and the divine.
            </p>
        </div>
    </section>

    <!-- ORGANIZATION & AREA -->
    <section class="mx-auto mt-10 mb-10 px-4 md:px-10 flex flex-col lg:flex-row gap-10">

        <div class="mt-16 max-w-xl mx-auto">
            <h2 class="text-2xl font-bold mb-8">
                Organization & Members
            </h2>

            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
                <div class="info-card">
                    <i class="fa-solid fa-user text-3xl text-primary mb-3"></i>
                    <h3 class="font-semibold">Pekaseh</h3>
                    <p class="text-sm text-gray-600">I Made Darayasa</p>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-user text-3xl text-primary mb-3"></i>
                    <h3 class="font-semibold">Secretary</h3>
                    <p class="text-sm text-gray-600">Nyoman Darna</p>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-user text-3xl text-primary mb-3"></i>
                    <h3 class="font-semibold">Treasurer</h3>
                    <p class="text-sm text-gray-600">I Wayan Sutarda</p>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-users text-3xl text-primary mb-3"></i>
                    <h3 class="font-semibold">Members / Krama</h3>
                    <p class="text-sm text-gray-600">225</p>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-users text-3xl text-primary mb-3"></i>
                    <h3 class="font-semibold">Number of Tempek</h3>
                    <p class="text-sm text-gray-600">8</p>
                </div>
            </div>
        </div>

        <div class="mt-16 max-w-xl mx-auto">
            <h2 class="text-2xl font-bold mb-8">
                Area & Boundaries
            </h2>

            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                <div class="info-card md:col-span-3">
                    <i class="fa-solid fa-expand text-3xl text-primary mb-3"></i>
                    <h3 class="font-semibold">Land Area</h3>
                    <p class="text-sm text-gray-600">110 Hectares</p>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-arrow-left text-2xl text-primary mb-3"></i>
                    <h3 class="font-semibold">Eastern Boundary</h3>
                    <p class="text-sm text-gray-600">Ahmad Yani Street</p>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-arrow-right text-2xl text-primary mb-3"></i>
                    <h3 class="font-semibold">Western Boundary</h3>
                    <p class="text-sm text-gray-600">Subak Dalem</p>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-arrow-up text-2xl text-primary mb-3"></i>
                    <h3 class="font-semibold">Northern Boundary</h3>
                    <p class="text-sm text-gray-600">Subak Dalem</p>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-arrow-down text-2xl text-primary mb-3"></i>
                    <h3 class="font-semibold">Southern Boundary</h3>
                    <p class="text-sm text-gray-600">Subak Dalem</p>
                </div>
            </div>
        </div>
    </section>

    <!-- LOCATION -->
    <section class="mx-auto mt-10 mb-10 px-4 md:px-10">
        <h1 class="text-2xl md:text-3xl font-bold mb-6">
            Location and access
        </h1>

        <div class="flex flex-col md:flex-row gap-6 border rounded-2xl p-4 md:p-6">
            <div class="md:w-1/2 space-y-4">
                <h1 class="text-lg md:text-xl font-bold">
                    Subak Sembung, North Denpasar
                </h1>

                <div>
                    <h2 class="font-bold">Location</h2>
                    <p>North Denpasar (Denpasar Utara), Denpasar City, Bali, Indonesia</p>
                </div>

                <div>
                    <h3 class="font-bold">Region</h3>
                    <p class="text-left md:text-justify">
                        Situated in the northern district of Denpasar, Subak Sembung overlooks the capital
                        city while maintaining its traditional agricultural character and peaceful countryside
                        atmosphere.
                    </p>
                </div>
            </div>

            <iframe class="w-full md:w-1/2 h-60 rounded-xl"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.8162716716556!2d115.21396410000001!3d-8.6136311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f1f40bef909%3A0x4c4bc184c8e647c6!2sEkowisata%20Subak%20Sembung%2C%20Peguyangan!5e0!3m2!1sid!2sid!4v1764311792720!5m2!1sid!2sid"
                loading="lazy"></iframe>
        </div>
    </section>

    <footer>
        <x-footer></x-footer>
    </footer>
</body>

</html>