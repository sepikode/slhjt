<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        // Cek preferensi dark mode user
        if (localStorage.getItem('dark-mode') === 'true' || (!('dark-mode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-full flex flex-col">
    <div class="flex flex-1">
        <!-- Sidebar -->
        @include('layouts.partials.sidebar')

        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Navbar -->
            @include('layouts.partials.navbar')

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-4 md:p-6">
                @yield('content')
            </main>

            <!-- Footer -->
            @include('layouts.partials.footer')
        </div>
    </div>

    <!-- Dark Mode Toggle Script -->
    <script>
        function toggleDarkMode() {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('dark-mode', isDark);
        }
    </script>
</body>
</html>