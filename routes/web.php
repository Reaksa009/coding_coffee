<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);
