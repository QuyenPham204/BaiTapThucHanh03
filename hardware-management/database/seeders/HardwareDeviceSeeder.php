<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HardwareDevice;
class HardwareDeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HardwareDevice::create([
            'device_name' => 'Logitech G502',
            'type' => 'Mouse',
            'status' => true,
            'center_id' => 1, // ID của trung tâm
        ]);
    }
}
