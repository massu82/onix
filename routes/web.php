<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'inicio')->name('inicio');
    Route::get('/iluminacion', 'iluminacion')->name('iluminacion');
    Route::get('/decoracion', 'decoracion')->name('decoracion');
    Route::get('/banos', 'banos')->name('banos');
    Route::post('/contact', 'submit')->name('contact.submit');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
