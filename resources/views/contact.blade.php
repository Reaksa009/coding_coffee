@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="bg-coffee-light py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h1
                class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-5xl font-cafe font-bold text-center text-coffee-dark mb-4">
                {{ __('message.get_in_touch') }}
            </h1>
            <p class="text-center text-gray-600 text-lg">{{ __('message.love_to_hear') }}</p>
        </div>
    </div>

    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h2
                        class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-3xl font-cafe font-bold text-coffee-dark mb-8">
                        {{ __('message.contact_info') }}
                    </h2>

                    <div class="space-y-6 mb-8">
                        <div class="flex items-start">
                            <div class="text-coffee-dark text-xl mr-4">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h3
                                    class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-xl font-semibold mb-1">
                                    {{ __('message.addresss') }}
                                </h3>
                                <p class="text-gray-600">{{ __('message.address_value') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="text-coffee-dark text-xl mr-4">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h3
                                    class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-xl font-semibold mb-1">
                                    {{ __('message.phone') }}
                                </h3>
                                <p class="text-gray-600">{{ __('message.phone_value') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="text-coffee-dark text-xl mr-4">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h3
                                    class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-xl font-semibold mb-1">
                                    {{ __('message.email') }}
                                </h3>
                                <p class="text-gray-600">{{ __('message.email_value') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="text-coffee-dark text-xl mr-4">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3
                                    class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-xl font-semibold mb-1">
                                    {{ __('message.hours') }}
                                </h3>
                                <p class="text-gray-600">
                                    {{ __('message.hours_value') }}

                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div>
                        <h3
                            class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-xl font-semibold mb-4">
                            {{ __('message.follow_us') }}
                        </h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-coffee-dark hover:text-coffee text-2xl">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="text-coffee-dark hover:text-coffee text-2xl">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-coffee-dark hover:text-coffee text-2xl">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h2
                        class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-3xl font-cafe font-bold text-coffee-dark mb-6">
                        {{ __('message.send_message') }}</h2>

                    <form id="contactForm" class="space-y-6">
                        <div>
                            <label for="name"
                                class="block text-sm font-medium text-gray-700 mb-2">{{ __('message.full_name') }}</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition">
                        </div>

                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-gray-700 mb-2">{{ __('message.email_address') }}</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition">
                        </div>

                        <div>
                            <label for="phone"
                                class="block text-sm font-medium text-gray-700 mb-2">{{ __('message.phone_number') }}</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition">
                        </div>

                        <div>
                            <label for="subject"
                                class="block text-sm font-medium text-gray-700 mb-2 ">{{ __('message.subject') }}</label>
                            <select id="subject" name="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition">
                                <option value="">{{ __('message.select_subject') }}</option>
                                <option value="general">{{ __('message.subject_general') }}</option>
                                <option value="reservation">{{ __('message.subject_reservation') }}</option>
                                <option value="feedback">{{ __('message.subject_feedback') }}</option>
                                <option value="other">{{ __('message.subject_other') }}</option>
                            </select>
                        </div>

                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-gray-700 mb-2">{{ __('message.message') }}</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-300 font-semibold px-6 py-3 rounded-lg hover:bg-coffee-dark transition">
                            {{ __('message.send') }}

                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section class="py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="bg-gray-200 rounded-2xl overflow-hidden h-96">
                <!-- Replace with actual Google Maps embed -->
                <div class="w-full h-full flex items-center justify-center bg-coffee-light">
                    <iframe class="w-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15635.651926428993!2d104.86599113651185!3d11.558095740219338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951ba6bf00e01%3A0xe474bb673741a6cb!2sSangkat%20Tuek%20Thla%2C%20Phnom%20Penh!5e0!3m2!1sen!2skh!4v1768207134513!5m2!1sen!2skh"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="text-center absolute">
                        <i class="fas fa-map-marker-alt text-6xl text-coffee-dark mb-4"></i>
                        <p class="text-xl text-coffee-dark font-semibold">{{ __('message.map_location') }}</p>
                        <p class="text-gray-600">{{ __('message.address_value') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection