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


    <section class="mx-auto mt-10 mb-10 px-10 flex justify-between md:flex-row items-center gap-10 text-justify">
        <div class="md:w-1/2">
            <h1 class="text-2xl md:text-3xl font-bold">What is Subak</h1>
            <p>Subak is the water management (irrigation) system for the paddy fields on Bali island, Indonesia. It was developed in the 9th century. For the Balinese, irrigation is not simply providing water for the plant's roots, but water is used to construct a complex, pulsed artificial ecosystem that is at the same time autonomous and interdependent. The system consists of terraced rice fields and water temples covering nearly 20,000 hectares (49,000 acres). The temples are the main focus of this cooperative water management, known as subak. </p>
        </div>
        <img src="/assets/loginBG.svg" alt="About Subak Image"
            class="w-full md:w-2/4 h-120 rounded-lg object-cover" />
    </section>

    <div class="h-fit  bg-secondary px-6 p-5 md:mx-10 rounded-2xl border text-justify">
        <div class="flex flex-row p-5">
            <img src="/assets/icons/fa_university.png" alt="" class=" w-10 h-10 mr-10">
            <div class="">
                <h1 class="text-2xl md:text-3xl font-bold">UNESCO World Heritage</h1>
                <p>On 6 July 2012, subak was listed as a UNESCO World Heritage Site under the title "Cultural Landscape of Bali Province: the Subak System as a Manifestation of the Tri Hita Karana Philosophy". This Unesco Site includes five sites that demonstrate the interconnected natural, religious, and cultural components of the traditional subak system</p>
                <p>In 2008, during the evaluation of the proposition by the World Heritage Committee, the rice terraces of the original Jatiluwih site was vastly expanded; it was renamed "Subak Landscape of Catur Angga Batukaru" and now includes 17 subak gede institutions, 12 customary villages, the two lakes of Tamblingan and Buyan, and forest areas of Batukaru natural reserves across the two districts of Tabanan and Buleleng - all of which are ecologically and culturally connected to the Jatiluwih terrasses.</p>

            </div>
        </div>
    </div>

    <section class="mx-auto mt-10 mb-10 px-10 flex justify-between md:flex-row items-center text-justify">
        <img src="/assets/loginBG.svg" alt="About Subak Image"
            class="w-full md:w-2/4 h-120 rounded-lg object-cover" />
        <div class="md:w-1/2 ml-10">
            <h1 class="text-2xl md:text-3xl font-bold">History of subak Sembung</h1>
            <p>
                Subak Sembung is a 115-hectare protected agricultural area and eco-tourism destination in North Denpasar, Bali, that serves as a vital "green lung" for the city. It showcases the traditional Balinese subak irrigation system, which is managed through the spiritual and communal philosophy of Tri Hita Karana to ensure harmony between people, nature, and the divine.
            </p>
        </div>
    </section>



    <section class="mx-auto mt-10 mb-10 px-10 flex justify-between md:flex-row  gap-10 ">
        <div class="mt-16 max-w-xl mx-auto">
            <h2 class="text-2xl font-bold mb-8">
                Organization & Members
            </h2>

            <div class="grid gap-6
                grid-cols-1
                sm:grid-cols-2
                md:grid-cols-4">


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

        <div class="mt-16  max-w-xl mx-auto">
            <h2 class="text-2xl font-bold mb-8">
                Area & Boundaries
            </h2>

            <div class="grid gap-6
                grid-cols-1
                sm:grid-cols-2
                md:grid-cols-3">


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
                    <a href="https://maps.app.goo.gl/fjd6NPnVFqCqZxBp7">
                    </a>
                </div>
            </div>
        </div>
    </section>





    <footer>
        <x-footer></x-footer>
    </footer>

</body>

<html