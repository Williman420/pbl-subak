<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-cover bg-center flex items-center justify-center bg-[#75712B] ">
    <input type="image" src="/assets/loginBG.svg" alt="" class="h-full w-full object-cover absolute blur cursor-default" draggable="false">

    <div class="bg-gray-200/95 backdrop-blur-sm p-8 rounded-3xl shadow-lg w-full max-w-md mx-4 text-center">

        <h2 class="text-lg font-semibold">Create an Account</h2>
        <p class="text-sm text-gray-600 mb-6">Enter your information to get started</p>

        @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
            {{ session('success') }}

        </div>
        @endif

        <form action="{{ route('pengunjung.store') }}" method="POST" class="space-y-3 text-left">
            @csrf

            <div>
                <label class="block text-sm font-medium">Full Name</label>
                <input type="text" name="nama_lengkap" placeholder="example : Jhon Wick"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-green-500" required>
            </div>

            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" placeholder="enter your @example.com"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-green-500" required>
            </div>

            <div>
                <label class="block text-sm font-medium">Username</label>
                <input type="text" name="username" placeholder="enter your username"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-green-500" required>
            </div>

            <div>
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password" placeholder="********"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-green-500" required>
            </div>

            <div>
                <label class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="********"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-green-500" required>
            </div>

            <div>
                <label class="block text-sm font-medium">Phone Number</label>
                <input type="text" name="no_tlp" placeholder="enter your phone number"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-green-500" required>
            </div>

            <button type="submit"
                class="w-full mt-4 bg-black text-white py-2 rounded-lg hover:bg-gray-800 transition">
                Create Account
            </button>
        </form>

        <div class="mt-6 text-sm text-gray-700">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Sign in</a>
        </div>
    </div>

    <footer class="absolute bottom-0 w-full text-center text-white py-2 bg-green-800">
        ©2025 Subak Sembung Experience
    </footer>
</body>

</html>