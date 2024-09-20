<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::post('/language.switch', LanguageController::class)->name('language.switch');

$routes = config('info.routes');

foreach ($routes as $route) {
    Route::get($route['path'], function () use ($route) {
        return view($route['view']);
    })->name($route['name']);
}

Route::fallback(function () {
    return view('errors.404');
})->name("404");

use App\Http\Controllers\ContactController;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
