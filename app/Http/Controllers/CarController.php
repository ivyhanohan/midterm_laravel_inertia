<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return Inertia::render('Cars/Index', [
            'cars' => $cars
        ]);
    }
}

