<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laptop;
class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Laptop::create([
            'brand' => 'Dell',
            'model' => 'Inspiron 15 3000',
            'specifications' => 'i5, 8GB RAM, 256GB SSD',
            'rental_status' => true,
            'renter_id' => 1, // ID của người thuê
        ]);
    }
}
