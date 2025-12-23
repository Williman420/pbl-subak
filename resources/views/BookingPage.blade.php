<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking Form</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Booking Form</h1>

        @if (session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('booking.create') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium mb-1">Name</label>
                <input type="text" name="name"
                    class="w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200"
                    value="{{ old('name') }}">
                @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Name</label>
                <input type="text" name="name"
                    class="w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200"
                    value="{{ old('name') }}">
                @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" name="email"
                    class="w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200"
                    value="{{ old('email') }}">
                @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Date -->
            <div>
                <label class="block text-sm font-medium mb-1">Date</label>
                <input type="date" name="date"
                    class="w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200">
                @error('date')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Time -->
            <div>
                <label class="block text-sm font-medium mb-1">Time</label>
                <input type="time" name="time"
                    class="w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200">
                @error('time')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Notes -->
            <div>
                <label class="block text-sm font-medium mb-1">Notes</label>
                <textarea name="notes" rows="3"
                    class="w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200">{{ old('notes') }}</textarea>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Book Now
            </button>
        </form>
    </div>

</body>

</html>