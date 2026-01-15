@extends('layouts.app')

@section('title', 'Menu')

@section('content')
    <div class="bg-coffee-light py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h1
                class="bg-gradient-to-r from-blue-400 bg-purple-300 text-transparent bg-clip-text text-5xl font-cafe font-bold text-center text-coffee-dark mb-4">
                {{ __('message.menu.heading') }}
            </h1>
            <p class="text-center text-gray-600 text-lg">{{ __('message.menu.subtitle') }}</p>
        </div>
    </div>

    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Coffee Menu -->
            <div class="mb-16">
                <h2
                    class="bg-gradient-to-r from-red-400 bg-purple-600 text-transparent bg-clip-text text-3xl font-cafe font-bold text-coffee-dark mb-8 text-center">
                    {{ __('message.menu.coffee_section') }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @php
                        $coffeeItems = [
                            ['key' => 'Espresso', 'description' => 'Strong and rich single shot', 'price' => '$3.50' , 'image' => 'espresso.png'],
                            ['key' => 'Americano', 'description' => 'Espresso with hot water', 'price' => '$4.00' , 'image' => 'americano.png'],
                            ['key' => 'Cappuccino', 'description' => 'Equal parts espresso, steamed milk, and foam', 'price' => '$4.75' , 'image' => 'cappuccino.png'],
                            ['key' => 'Latte', 'description' => 'Espresso with steamed milk', 'price' => '$5.00' , 'image' => 'latte.png'],
                            ['key' => 'Mocha', 'description' => 'Espresso with chocolate and steamed milk', 'price' => '$5.50' , 'image' => 'mocha.png'],
                            ['key' => 'Cold Brew', 'description' => 'Slow-steeped for 24 hours', 'price' => '$4.50' , 'image' => 'cold_brew.png'],
                        ];
                    @endphp

                    @foreach($coffeeItems as $item)
                        <div class=" border-b border-gray-200 py-4 shadow-lg p-4 rounded-lg hover:shadow-xl cursor-pointer transition-shadow-xl duration-300 transition-transform hover:scale-105">
                            <div class="w-full h-48 mb-4 overflow-hidden rounded-lg">
                                <img src={{ asset('images/item/' . $item['image']) }} alt="">
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-coffee-dark">
                                    {{ __('message.coffee_items.items.' . $item['key'] . '.name') }}
                                </h3>
                                <p class="text-gray-600">
                                    {{ __('message.coffee_items.items.' . $item['key'] . '.description') }}
                                </p>
                            </div>
                            <span
                                class="text-xl text-red-600">{{ __('message.coffee_items.items.' . $item['key'] . '.price') }}</span>
                            <div class="text-center">
                                <button class="bg-blue-400 w-full mt-4 p-2 rounded text-gray-300 active:text-gray-600 font-bold hover:bg-blue-600">Order</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Pastries Menu -->
            <div class="mb-16">
                <h2
                    class="bg-gradient-to-r from-red-400 bg-purple-600 text-transparent bg-clip-text text-3xl font-cafe font-bold text-coffee-dark mb-8 text-center">
                    {{ __('message.menu.pastry_section') }}
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @php
                        $pastryItems = [
                            ['key' => 'Croissant', 'description' => 'Buttery and flaky', 'price' => '$3.75' , 'image' => 'croissant.png'],
                            ['key' => 'Blueberry Muffin', 'description' => 'Fresh blueberries in every bite', 'price' => '$4.25' , 'image' => 'blueberry_muffin.png'],
                            ['key' => 'Chocolate Chip Cookie', 'description' => 'Soft and chewy', 'price' => '$2.50' , 'image' => 'chocolate_chip_cookie.png'],
                            ['key' => 'Tiramisu', 'description' => 'Classic Italian dessert', 'price' => '$6.50' , 'image' => 'tiramisu.png'],
                            ['key' => 'Banana Bread', 'description' => 'Moist and flavorful', 'price' => '$4.00' , 'image' => 'banana_bread.png'],
                            ['key' => 'Cinnamon Roll', 'description' => 'Freshly baked with icing', 'price' => '$5.25' , 'image' => 'cinnamon_roll.png'],
                        ];
                    @endphp

                    @foreach($pastryItems as $items)
                        <div class="border-b border-gray-200 py-4 shadow-lg p-4 rounded-lg hover:shadow-xl cursor-pointer transition-shadow-xl duration-300 transition-transform hover:scale-105">
                            <div>
                                <div class="w-full h-48 mb-4 overflow-hidden rounded-lg">
                                    <img src={{ asset('images/item/' . $items['image']) }} alt="">
                                </div>
                                <h3 class="text-xl font-semibold text-coffee-dark">
                                    {{ __('message.pastry_items.items.' . $items['key'] . '.name') }}
                                </h3>
                                <p class="text-gray-600">
                                    {{ __('message.pastry_items.items.' . $items['key'] . '.description') }}
                                </p>
                            </div>
                            <span
                                class="text-xl text-red-600">{{ __('message.pastry_items.items.' . $items['key'] . '.price') }}</span>
                            <div class="text-center">
                                <button class="bg-blue-400 w-full mt-4 p-2 rounded text-gray-300 active:text-gray-600 font-bold hover:bg-blue-600">Buy New</button>
                            </div>
                            
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Special Offers -->
            <div class="bg-gray-100 w-full  rounded-2xl p-8 text-gray-900  mx-auto">
                <h2
                    class="bg-gradient-to-r from-red-400 bg-purple-600 text-transparent bg-clip-text text-3xl font-cafe font-bold mb-4 text-center">
                    {{ __('message.menu.daily_special') }}
                </h2>
                <p class="text-center text-xl mb-4">{{ __('message.menu.special_text') }}</p>
                <p class="text-center text-coffee-light">{{ __('message.menu.special_time') }}</p>
            </div>
        </div>
    </section>
@endsection