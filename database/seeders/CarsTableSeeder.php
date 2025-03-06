<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            [
                'make' => 'Toyota',
                'model' => 'Corolla',
                'year' => 2020,
                'miles' => 25000
            ],
            [
                'make' => 'Honda',
                'model' => 'Civic',
                'year' => 2019,
                'miles' => 30000
            ],
            [
                'make' => 'Ford',
                'model' => 'Mustang',
                'year' => 2022,
                'miles' => 15000
            ],
        ]);
    }
}
