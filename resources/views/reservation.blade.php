@extends('layouts.app')

@section('title', 'Make a Reservation')

@section('content')
    <div class="bg-coffee-light py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-5xl font-cafe font-bold text-center text-coffee-dark mb-4">{{ __('message.book_table') }}</h1>
            <p class="text-center text-gray-600 text-lg">{{ __('message.secure_spot') }}</p>
        </div>
    </div>

    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <h2 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-3xl font-cafe font-bold text-coffee-dark mb-2">{{ __('message.reservation_form') }}</h2>
                <p class="text-gray-600 mb-8 bg-gradient-to-r from-pink-400 bg-red-600 text-transparent bg-clip-text ">{{ __('message.reservation_desc') }}</p>

                <form id="reservationForm" class="space-y-6">
                    <!-- Personal Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="res_name" class="block text-sm font-medium text-gray-700 mb-2">{{ __('message.full_name') }} *</label>
                            <input type="text" id="res_name" name="name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition">
                        </div>

                        <div>
                            <label for="res_email" class="block text-sm font-medium text-gray-700 mb-2">{{ __('message.email_addresss') }}
                                *</label>
                            <input type="email" id="res_email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="res_phone" class="block text-sm font-medium text-gray-700 mb-2">{{ __('message.phone_numbers') }}
                                *</label>
                            <input type="tel" id="res_phone" name="phone" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition">
                        </div>

                        <div>
                            <label for="res_guests" class="block text-sm font-medium text-gray-700 mb-2">{{ __('message.number_of_guests') }}
                                *</label>
                            <select id="res_guests" name="guests" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition">
                                <option value="">{{ __('message.select_number') }}</option>
                                <option value="1">1 {{__('message.person')}}</option>
                                <option value="2">2 {{__('message.person')}}</option>
                                <option value="3">3 {{__('message.person')}}</option>
                                <option value="4">4 {{__('message.person')}}</option>
                                <option value="5">5 {{__('message.person')}}</option>
                                <option value="6">6 {{__('message.person')}}</option>
                                <option value="7">7 {{__('message.person')}}</option>
                                <option value="8">8+ {{__('message.person')}}</option>
                            </select>
                        </div>
                    </div>

                    <!-- Date and Time -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="res_date" class="block text-sm font-medium text-gray-700 mb-2">{{__('message.date')}} *</label>
                            <input type="date" id="res_date" name="date" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition">
                        </div>

                        <div>
                            <label for="res_time" class="block text-sm font-medium text-gray-700 mb-2">{{__('message.time')}}  *</label>
                            <select id="res_time" name="time" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition">
                                <option value="">{{ __('message.select_time') }}</option>
                                <option value="07:00">7:00 AM</option>
                                <option value="08:00">8:00 AM</option>
                                <option value="09:00">9:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="13:00">1:00 PM</option>
                                <option value="14:00">2:00 PM</option>
                                <option value="15:00">3:00 PM</option>
                                <option value="16:00">4:00 PM</option>
                                <option value="17:00">5:00 PM</option>
                                <option value="18:00">6:00 PM</option>
                                <option value="19:00">7:00 PM</option>
                                <option value="20:00">8:00 PM</option>
                            </select>
                        </div>
                    </div>

                    <!-- Special Requests -->
                    <div>
                        <label for="res_requests" class="block text-sm font-medium text-gray-700 mb-2">{{ __('message.special_requests') }}</label>
                        <textarea id="res_requests" name="requests" rows="4"
                            placeholder= {{ __('message.special_placeholder') }}
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-coffee focus:border-coffee outline-none transition"></textarea>
                    </div>

                    <!-- Terms and Submit -->
                    <div class="flex items-start">
                        <input type="checkbox" id="res_terms" name="terms" required class="mt-1 mr-3">
                        <label for="res_terms" class="text-sm text-gray-600">
                           {{ __('message.agree_terms') }}
                        </label>
                    </div>

                    <button type="submit" class="text-white w-full text-lg py-4 bg-blue-600 hover:bg-blue-700">
                        {{ __('message.submit_reservation') }}
                    </button>
                </form>
            </div>

            <!-- Reservation Info -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-gray-50 rounded-xl">
                    <div class="text-coffee-dark text-3xl mb-4">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-xl font-semibold mb-2">{{ __('message.reservation_hours') }}</h3>
                    <p class="text-gray-600 bg-gradient-to-r from-orange-600 bg-blue-300 text-transparent bg-clip-text  ">{{ __('message.reservation_hours_value') }}</p>
                </div>

                <div class="text-center p-6 bg-gray-50 rounded-xl">
                    <div class="text-coffee-dark text-3xl mb-4">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-xl font-semibold mb-2">{{ __('message.group_bookings') }}</h3>
                    <p class="text-gray-600 text-gray-600 bg-gradient-to-r from-orange-600 bg-blue-300 text-transparent bg-clip-text ">{{ __('message.group_bookings_value') }}</p>
                </div>

                <div class="text-center p-6 bg-gray-50 rounded-xl">
                    <div class="text-coffee-dark text-3xl mb-4">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="bg-gradient-to-r from-blue-400 bg-red-600 text-transparent bg-clip-text  text-xl font-semibold mb-2">{{ __('message.advance_booking') }}</h3>
                    <p class="text-gray-600 text-gray-600 bg-gradient-to-r from-orange-600 bg-blue-300 text-transparent bg-clip-text ">{{ __('message.advance_booking_value') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection