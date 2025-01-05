<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Movie Peek</title>
</head>
<body class="bg-gray-900">
    <!-- Test Sample Pages Features here -->
    <nav class="bg-gray-800 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo Section -->
            <div class="flex items-center">
                <div class="w-8 h-8 bg-gradient-to-r from-blue-500 via-green-500 to-orange-500 rounded-full flex justify-center items-center">
                    <span class="hidden">Logo Here</span>
                </div>
                <span class="text-xl font-bold ml-2">Movie Peek</span>
            </div>

            <!-- Links and Search -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="#" class="hover:underline">Sign In</a>
                <a href="#" class="hover:underline">Create Account</a>
                <a href="#" class="hover:underline">Films</a>
                <a href="#" class="hover:underline">Lists</a>
                <a href="#" class="hover:underline">Members</a>
                <a href="#" class="hover:underline">Journal</a>
                <div class="relative">
                    <input type="text" placeholder="Search" class="bg-gray-700 text-white rounded-full pl-4 pr-10 py-1 focus:outline-none">
                    <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">🔍</span>
                </div>
            </div>

            <!-- Hamburger Menu for Mobile -->
            <button id="mobileMenuButton" class="block md:hidden focus:outline-none">
                <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
                <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden bg-gray-800 px-6 py-4 space-y-4 hidden">
            <a href="#" class="block hover:underline">Sign In</a>
            <a href="#" class="block hover:underline">Create Account</a>
            <a href="#" class="block hover:underline">Films</a>
            <a href="#" class="block hover:underline">Lists</a>
            <a href="#" class="block hover:underline">Members</a>
            <a href="#" class="block hover:underline">Journal</a>
            <div class="relative">
                <input type="text" placeholder="Search" class="bg-gray-700 text-white rounded-full w-full pl-4 pr-10 py-1 focus:outline-none">
                <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">🔍</span>
            </div>
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
