<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ITCenter;
class ITCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
     ITCenter::create([
    'name' => 'Trung tâm Tin học ABC',
    'location' => '456 Đường Y, TP.HCM',
    'contact_email' => 'contact@abc.com'
       ]);
    }
}
