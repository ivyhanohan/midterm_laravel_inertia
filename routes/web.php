<?php

use App\Http\Controllers\BidderController;
use App\Http\Controllers\CarController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Alistair jan Loberternos',
        'course' => 'BSIT',
        'year' => '3rd year'
    ])->withViewData(['layout' => 'App']);
});

Route::get('/bidders', function () {
    return Inertia::render('Bidders/Index', [
        'bidders' => \App\Models\Bidder::all(),
    ]);
});

Route::get('/cars', function () {
    return Inertia::render('Cars/Index', [
        'cars' => \App\Models\Car::all(),
    ]);
});
