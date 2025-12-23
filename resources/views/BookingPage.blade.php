<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-100 p-10">

    <livewire:create-booking :aktivitas="$aktivitas" />

    @livewireScripts
</body>

</html>