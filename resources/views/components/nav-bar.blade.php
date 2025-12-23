<div>
    <!-- An unexamined life is not worth living. - Socrates -->

    <nav class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center gap-4">
            <img src="\assets\icons\logo.png" alt="logo" class="w-15 h-15 rounded-full object-cover" />
            <div class="hidden md:flex items-center gap-6 text-lg">
                <a href="/home" class="text-[#0b6abf] font-semibold">Home</a>
                <a href="/aboutSubak" class="hover:text-[#0b6abf]">About</a>
                <a href="/experience" class="hover:text-[#0b6abf]">Experiences List</a>
                <a href="#" class="hover:text-[#0b6abf]">My Bookings</a>
                <a href="/articles" class="hover:text-[#0b6abf]">Articles</a>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button class="hidden md:inline-flex items-center gap-2 px-3 py-1.5 border rounded-full text-sm">
                <svg xmlns="/assets/logo.png" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <circle cx="11" cy="7" r="4"></circle>
                    <path d="M21 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"></path>
                </svg>
                @auth
                <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-700">
                        Hi, {{ Auth::user()->username }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600">
                            Logout
                        </button>
                    </form>
                </div>
                @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
            </button>
            <button class="md:hidden p-2 rounded border">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>
</div>