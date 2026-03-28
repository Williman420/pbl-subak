<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login Page</title>
</head>

<body class="h-screen flex items-center justify-center bg-[#75712B]">

    <input type="image"
        src="/assets/loginBG.svg"
        class="h-full w-full object-cover absolute blur cursor-default"
        draggable="false">

    <div class="bg-gray-200/95 backdrop-blur-sm p-8 rounded-3xl shadow-lg w-full max-w-md mx-4 text-center z-10">

        <h2 class="text-lg font-semibold">Welcome Back</h2>
        <p class="text-sm text-gray-600 mb-6">
            Enter your credentials to continue
        </p>

        @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-3 text-sm">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-3 text-sm">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-3 text-left">
            @csrf

            <div>
                <label class="block text-sm font-medium">Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="enter your @example.com"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-green-500"
                    required>
            </div>

            <div>
                <label class="block text-sm font-medium">Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="********"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-green-500"
                    required>
            </div>

            <button
                type="submit"
                class="w-full mt-4 bg-black text-white py-2 rounded-lg hover:bg-gray-800 transition">
                Sign In
            </button>
        </form>

        <div class="mt-6 text-sm text-gray-700">
            Don’t have an account?
            <a href="{{ route('pengunjung.createPage') }}" class="text-blue-600 hover:underline">
                Create one
            </a>
        </div>
    </div>

    <footer class="absolute bottom-0 w-full text-center text-white py-2 bg-green-800">
        ©2025 Subak Sembung Experience
    </footer>

</body>

</html>