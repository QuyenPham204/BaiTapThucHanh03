<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('computers')->insert([
                'computer_name' => $faker->word . '-' . $faker->randomNumber(3), // Tên máy tính
                'model' => $faker->word . ' ' . $faker->randomNumber(4), // Model
                'operating_system' => $faker->randomElement(['Windows 10 Pro', 'macOS Monterey', 'Linux Ubuntu']), // Hệ điều hành
                'processor' => $faker->randomElement(['Intel Core i5', 'Intel Core i7', 'AMD Ryzen 5']), // Bộ xử lý
                'memory' => $faker->randomElement([8, 16, 32]), // RAM
                'available' => $faker->boolean(), // Trạng thái hoạt động
                'created_at' => now(), // Thời gian tạo
                'updated_at' => now(), // Thời gian cập nhật
            ]);
        }
    }
}
