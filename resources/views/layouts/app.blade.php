<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio of a passionate software developer showcasing projects, skills, and expertise in web development.">
    <meta name="author" content="Peter Otieno">

    <title>{{ config('app.name', 'Portfolio') }} - Software Developer</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/peterbg.ico') }}?v={{ time() }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 text-gray-900">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-white/95 backdrop-blur-md shadow-lg" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo/Name -->
                <div class="flex-shrink-0">
                    <a href="#hero" class="flex items-center gap-3">
                        <img src="{{ asset('images/peter.png') }}" alt="Peter Otieno" class="w-12 h-12 rounded-full border-2 border-purple-600 object-cover hover:scale-110 transition-transform">
                        <span class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent hidden sm:block">Peter Otieno</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#hero" class="nav-link text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                        <a href="#about" class="nav-link text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">About</a>
                        <a href="#skills" class="nav-link text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Skills</a>
                        <a href="#projects" class="nav-link text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Projects</a>
                        <a href="#contact" class="nav-link text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-purple-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
                <a href="#hero" class="nav-link block text-gray-700 hover:text-purple-600 hover:bg-gray-50 px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#about" class="nav-link block text-gray-700 hover:text-purple-600 hover:bg-gray-50 px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="#skills" class="nav-link block text-gray-700 hover:text-purple-600 hover:bg-gray-50 px-3 py-2 rounded-md text-base font-medium">Skills</a>
                <a href="#projects" class="nav-link block text-gray-700 hover:text-purple-600 hover:bg-gray-50 px-3 py-2 rounded-md text-base font-medium">Projects</a>
                <a href="#contact" class="nav-link block text-gray-700 hover:text-purple-600 hover:bg-gray-50 px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} Peter Otieno. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
