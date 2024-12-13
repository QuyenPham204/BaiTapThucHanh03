<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('sales')->insert([
                'medicine_id' => $faker->numberBetween(1, 50), // Giả định có 50 loại thuốc
                'quantity' => $faker->numberBetween(1, 10),
                'sale_date' => $faker->dateTimeThisYear(),
                'customer_phone' => $faker->numerify('##########'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
