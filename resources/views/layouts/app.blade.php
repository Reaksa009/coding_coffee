<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Coding Coffee</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="font-body">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/"
                        class=" bg-gradient-to-r from-orange-600 bg-blue-300 text-transparent bg-clip-text  text-2xl font-cafe font-bold text-coffee-dark">@lang('message.Coding Coffee')</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 ">
                    <a href="/"
                        class="{{ request()->is('/') ? 'text-red-500 font-semibold' : 'text-blue-700' }} hover:text-coffee transition">{{ __('message.Home') }}</a>
                    <a href="/about"
                        class="{{ request()->is('about') ? 'text-red-500 font-semibold' : 'text-blue-700' }} hover:text-coffee transition">@lang('message.About')</a>
                    <a href="/menu"
                        class="{{ request()->is('menu') ? 'text-red-500 font-semibold' : 'text-blue-700' }} hover:text-coffee transition">@lang('message.Menu')</a>
                    <a href="/contact"
                        class="{{ request()->is('contact') ? 'text-red-500 font-semibold' : 'text-blue-700' }} hover:text-coffee transition">@lang('message.Contact')</a>
                    <a href="/reservation"
                        class="{{ request()->is('reservation') ? 'text-red-500 font-semibold' : 'text-blue-700' }} hover:text-coffee transition">@lang('message.Reservation')</a>

                </div>
                <div class="">
                    <select class="w-full bg-blue-100 border-0 rounded-lg px-4 py-2 text-coffee-dark
                            focus:ring-2 focus:ring-coffee/50 focus:bg-white
                            transition-all duration-200 cursor-pointer appearance-none outline-none relative"
                        onchange="location = this.value;">

                        <option value="">🌐@lang('message.select_language')</option>
                        <option value="/locale/en">🌐@lang('message.english')</option>
                        <option value="/locale/kh">🌐@lang('message.khmer')</option>

                    </select>

                </div>


                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-coffee-dark">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden py-4">
                <div class="flex flex-col space-y-3">
                    <a href="/"
                        class="{{ request()->is('/') ? 'text-coffee-dark font-semibold' : 'text-blue-700' }} hover:text-coffee transition">@lang('message.Home')</a>
                    <a href="/menu"
                        class="{{ request()->is('menu') ? 'text-coffee-dark font-semibold' : 'text-blue-700' }} hover:text-coffee transition">@lang('message.About')</a>
                    <a href="/about"
                        class="{{ request()->is('about') ? 'text-coffee-dark font-semibold' : 'text-blue-700' }} hover:text-coffee transition">@lang('message.Menu')</a>
                    <a href="/contact"
                        class="{{ request()->is('contact') ? 'text-coffee-dark font-semibold' : 'text-blue-700' }} hover:text-coffee transition">@lang('message.Contact')</a>
                    <a href="/reservation"
                        class="{{ request()->is('reservation') ? 'text-coffee-dark font-semibold' : 'text-blue-700' }} hover:text-coffee transition">@lang('message.Reservation')</a>
                </div>
            </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-coffee-dark text-white mt-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-cafe font-bold mb-4">Coding Coffee</h3>

                    <p class="text-coffee-light">
                        @lang('message.Serving the finest coffee since 2010. A perfect blend of tradition and taste.')
                    </p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">@lang('message.Hours')</h4>
                    <p class="text-coffee-light">@lang('message.weekday_hours')</p>
                    <p class="text-coffee-light">@lang('message.weekend_hours')</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">@lang('message.Contact')</h4>
                    <p class="text-coffee-light"><i class="fas fa-map-marker-alt mr-2"></i> 123 Coffee Street</p>
                    <p class="text-coffee-light"><i class="fas fa-phone mr-2"></i> (123) 456-7890</p>
                    <p class="text-coffee-light"><i class="fas fa-envelope mr-2"></i>reaksavuty068@gmail.com</p>
                </div>
            </div>
            <div class="border-t border-coffee mt-8 pt-8 text-center text-coffee-light">
                <p>@lang('message.copyright')</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>