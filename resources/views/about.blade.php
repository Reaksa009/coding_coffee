@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <div class="bg-coffee-light py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h1
                class="bg-gradient-to-r from-red-400 bg-purple-600 text-transparent bg-clip-text text-5xl font-cafe font-bold text-center text-coffee-dark mb-4">
                {{ __('message.hero.heading') }}</h1>
            <p class="text-center text-gray-600 text-lg">{{ __('message.hero.subheading') }}</p>
        </div>
    </div>

    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <!-- About Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <img src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                        alt="Our Cafe" class="rounded-2xl shadow-xl">
                </div>
                <div>
                    <h2 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text text-4xl font-cafe font-bold text-coffee-dark mb-6">{{ __('message.welcome.title') }}</h2>
                    <p class="text-gray-600 mb-4 text-lg">
                        {{ __('message.welcome.paragraph_1') }}
                    </p>
                    <p class="text-gray-600 mb-6 text-lg">
                        {{ __('message.welcome.paragraph_2') }}
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-8">
                        <div class="text-center">
                            <div class="text-gray-600 bg-gradient-to-r from-orange-600 bg-blue-300 text-transparent bg-clip-text  text-3xl font-bold text-coffee-dark mb-2">13+</div>
                            <div class="text-gray-600">{{ __('message.stats.years') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-gray-600 bg-gradient-to-r from-orange-600 bg-blue-300 text-transparent bg-clip-text  text-3xl font-bold text-coffee-dark mb-2">50+</div>
                            <div class="text-gray-600">{{ __('message.stats.varieties') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-gray-600 bg-gradient-to-r from-orange-600 bg-blue-300 text-transparent bg-clip-text  text-3xl font-bold text-coffee-dark mb-2">1000+</div>
                            <div class="text-gray-600">{{ __('message.stats.customers') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="mb-16">
                <h2 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-4xl font-cafe font-bold text-center text-coffee-dark mb-12">
                    {{ __('message.team.title') }}
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @php
                        $teamMembers = [
                            ['key' => 'reaksa', 'image' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54'],
                            ['key' => 'heng', 'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a'],
                            ['key' => 'tola', 'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2'],
                        ];
                    @endphp

                    @foreach ($teamMembers as $member)
                        <div class="text-center shadow-lg rounded-2xl p-6 bg-white">
                            <img src="{{ $member['image'] }}" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">

                            <h3 class="text-xl font-semibold text-coffee-dark mb-2">
                                {{ __('message.team.members.' . $member['key'] . '.name') }}
                            </h3>

                            <p class="text-gray-600">
                                {{ __('message.team.members.' . $member['key'] . '.role') }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Values -->
            <div class="bg-gray-50 rounded-2xl p-8">
                <h2 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-3xl font-cafe font-bold text-center text-coffee-dark mb-8">{{ __('message.values.title') }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="text-coffee-dark text-4xl mb-4">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">{{ __('message.values.sustainability.title') }}</h3>
                        <p class="text-gray-600 bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text ">{{ __('message.values.sustainability.desc') }}</p>
                    </div>
                    <div class="text-center">
                        <div class="text-coffee-dark text-4xl mb-4">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">{{ __('message.values.quality.title') }}</h3>
                        <p class="text-gray-600 bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text ">{{ __('message.values.quality.desc') }}</p>
                    </div>
                    <div class="text-center">
                        <div class="text-coffee-dark text-4xl mb-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">{{ __('message.values.community.title') }}</h3>
                        <p class="text-gray-600 bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text ">{{ __('message.values.community.desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection