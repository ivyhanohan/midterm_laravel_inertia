<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiddersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bidders')->insert([
            [
                'last_name' => 'Smith',
                'first_name' => 'John',
                'address' => '123 Main St, NY',
                'email' => 'john@example.com'
            ],
            [
                'last_name' => 'Doe',
                'first_name' => 'Jane',
                'address' => '456 Elm St, LA',
                'email' => 'jane@example.com'
            ],
            [
                'last_name' => 'Johnson',
                'first_name' => 'Mike',
                'address' => '789 Oak St, TX',
                'email' => 'mike@example.com'
            ],
        ]);
    }
}
