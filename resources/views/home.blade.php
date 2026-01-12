@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[90vh] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80"
                alt="Coffee Shop" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center text-white">
            <h1 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-4xl md:text-6xl font-cafe font-bold mb-6">@lang('message.Welcome to Coding Coffee')</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                @lang('message.Where every cup tells a story. Experience the perfect blend of tradition and innovation.')
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/menu" class="bg-blue-500 p-3 rounded-full">@lang('message.ViewOurMenu')</a>
                <a href="/reservation" class="bg-red-500 p-3 rounded-full">@lang('message.BookaTable')</a>
            </div>
        </div>
    </section>

    <!-- Featured Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-cafe font-bold text-center mb-12 bg-gradient-to-r from-red-400 bg-purple-600 text-transparent bg-clip-text">@lang('message.OurSpecialties')</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
                <!-- Card 1 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1511537190424-bbbab87ac5eb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Specialty Coffee"
                        class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105">
                    <div class="p-6">
                        <h3 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-2xl font-cafe font-semibold text-coffee-dark mb-3">@lang('message.ArtisanCoffee')
                        </h3>
                        <p class="text-gray-600 mb-4">
                            @lang('message.Handcrafted by our expert baristas using single-origin beans.')</p>
                        <a href="#" class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-coffee-dark font-semibold hover:text-coffee transition">@lang('message.learnmore') →</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Fresh Pastries"
                        class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105">
                    <div class="p-6">
                        <h3 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-2xl font-cafe font-semibold text-coffee-dark mb-3">@lang('message.FreshlyBakedPastries')</h3>
                        <p class="text-gray-600 mb-4">@lang('message.Baked fresh daily with locally sourced ingredients.')</p>
                        <a href="#" class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-coffee-dark font-semibold hover:text-coffee transition">@lang('message.learnmore') →</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Cozy Ambiance"
                        class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105">
                    <div class="p-6">
                        <h3 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-2xl font-cafe font-semibold text-coffee-dark mb-3">@lang('message.CozyAmbiance')</h3>
                        <p class="text-gray-600 mb-4">@lang('message.Perfect atmosphere for work, relaxation, or socializing.')</p>
                        <a href="#" class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-coffee-dark font-semibold hover:text-coffee transition">@lang('message.learnmore') →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection