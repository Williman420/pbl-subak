<div>
    <!-- An unexamined life is not worth living. - Socrates -->

    @php
    function navActive($path) {
    return request()->is($path)
    ? 'text-primary font-semibold'
    : 'hover:text-primary ';
    }
    @endphp

    <nav class="flex items-center justify-between px-6 py-4">
        <!-- Left -->
        <div class="flex items-center gap-4">
            <img src="/assets/icons/logo.png"
                alt="logo"
                class="w-15 h-15 rounded-full object-cover" />

            <div class="hidden md:flex items-center gap-6 text-lg">
                <a href="/" class="{{ navActive('/') }}">
                    Home
                </a>

                <a href="/aboutSubak" class="{{ navActive('aboutSubak') }}">
                    About
                </a>

                <a href="/experience" class="{{ navActive('experience') }}">
                    Experiences List
                </a>

                <a href="/myBookingPage" class="{{ navActive('myBookingPage') }}">
                    My Bookings
                </a>

                <a href="/articles" class="{{ navActive('articles*') }}">
                    Articles
                </a>
            </div>
        </div>

        <!-- Right -->
        <div class="flex items-center gap-4">
            <button class="hidden md:inline-flex items-center gap-2 px-3 py-1.5 border rounded-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor">
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
                        <button type="submit" class="text-red-400 hover:text-red-600">
                            Logout
                        </button>
                    </form>
                </div>
                @else
                <a href="{{ route('login') }}" class="hover:text-primary">Login</a>
                <a href="{{ route('register') }}" class="hover:text-primary">Register</a>
                @endauth
            </button>

            <!-- Mobile menu button -->
            <button class="md:hidden p-2 rounded border">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>
</div>