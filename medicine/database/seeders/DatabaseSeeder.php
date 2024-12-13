<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Gọi các Seeder cần chạy
        $this->call([
            MedicinesTableSeeder::class,
            SalesTableSeeder::class,
        ]);
    }
}
