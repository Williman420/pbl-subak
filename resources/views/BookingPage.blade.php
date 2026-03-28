<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="min-h-screen flex flex-col">

    <header class="bg-white mx-10">
        <x-nav-bar />
    </header>

    <main class="flex-1 flex items-center justify-center">
        <livewire:create-booking :aktivitas="$aktivitas" />
    </main>

    <footer>
        <x-footer />
    </footer>

    @livewireScripts
</body>

</html>