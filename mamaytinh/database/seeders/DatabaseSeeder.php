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
        // Thêm các seeder mà bạn muốn chạy
        $this->call([
            ComputersTableSeeder::class, // Seeder cho bảng computers
            IssuesTableSeeder::class,    // Seeder cho bảng issues
        ]);
    }
}
