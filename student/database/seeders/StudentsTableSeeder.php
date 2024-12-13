<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) { // Seed 20 sinh viên
            DB::table('students')->insert([
                'first_name' => $faker->firstName, // Tên
                'last_name' => $faker->lastName,   // Họ đệm
                'date_of_birth' => $faker->date($format = 'Y-m-d', $max = '2016-12-31'), // Ngày sinh trước năm 2016
                'parent_phone' => $faker->phoneNumber, // Số điện thoại phụ huynh
                'class_id' => $faker->numberBetween(1, 5), // Ngẫu nhiên chọn lớp (giả sử có 5 lớp trong bảng classes)
                'created_at' => now(), // Ngày tạo
                'updated_at' => now(), // Ngày cập nhật
            ]);
        }
    }
}
