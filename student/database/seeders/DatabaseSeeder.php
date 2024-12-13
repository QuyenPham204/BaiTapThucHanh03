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
        // Gọi Seeder cho bảng classes và students
        $this->call([
            ClassesTableSeeder::class,
            StudentsTableSeeder::class,
        ]);
    }
}
