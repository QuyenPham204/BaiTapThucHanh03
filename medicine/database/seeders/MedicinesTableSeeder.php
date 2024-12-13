<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MedicinesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('medicines')->insert([
                'name' => $faker->word(),
                'brand' => $faker->company(),
                'dosage' => $faker->numberBetween(10, 500) . 'mg',
                'form' => $faker->randomElement(['Tablet', 'Capsule', 'Syrup']),
                'price' => $faker->randomFloat(2, 5, 100),
                'stock' => $faker->numberBetween(10, 500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
