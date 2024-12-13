<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cinema;
class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cinema::create([
            'name' => 'CGV Vincom',
            'location' => 'Vincom Center, Hà Nội',
            'total_seats' => 300,
        ]);
    }
}
