<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('issues')->insert([
                'computer_id' => $faker->numberBetween(1, 10), // Giả sử có 10 máy tính trong bảng computers
                'reported_by' => $faker->name, // Tên người báo cáo
                'reported_date' => $faker->dateTimeThisYear(), // Ngày báo cáo trong năm nay
                'description' => $faker->sentence(10), // Mô tả vấn đề
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']), // Mức độ khẩn cấp
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']), // Trạng thái sự cố
                'created_at' => now(), // Thời gian tạo
                'updated_at' => now(), // Thời gian cập nhật
            ]);
        }
    }
}
