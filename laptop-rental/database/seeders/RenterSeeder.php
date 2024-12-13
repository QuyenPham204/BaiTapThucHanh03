<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Renter;
class RenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Renter::create([
            'name' => 'Nguyễn Văn A',
            'phone_number' => '0987654321',
            'email' => 'nva@gmail.com',
        ]);
    }
}
