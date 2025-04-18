<header class="bg-white dark:bg-gray-800 shadow-sm">
    <div class="flex items-center justify-between p-4">
        <!-- Mobile menu button -->
        <button class="md:hidden focus:outline-none" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Search and user area -->
        <div class="flex items-center space-x-4">
            <!-- Dark mode toggle -->
            <button onclick="toggleDarkMode()" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
                <svg id="dark-mode-icon" class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
                <svg id="light-mode-icon" class="w-5 h-5 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                </svg>
            </button>

            <!-- User dropdown -->
            <div class="relative">
                <button class="flex items-center space-x-2 focus:outline-none" onclick="document.getElementById('user-menu').classList.toggle('hidden')">
                    <span class="font-medium">{{ Auth::user()->name }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                {{-- <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1 z-50">
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</button>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-800 p-4 border-t border-gray-200 dark:border-gray-700">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}" class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Dashboard</a>
            </li>
            {{-- <li>
                <a href="{{ route('tags.index') }}" class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">Tags</a>
            </li> --}}
            <!-- Tambahkan menu mobile lainnya di sini -->
        </ul>
    </div>
</header>