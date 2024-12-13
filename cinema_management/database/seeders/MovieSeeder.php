<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Avengers: Endgame',
            'director' => 'Anthony và Joe Russo',
            'release_date' => '2019-04-26',
            'duration' => 181,
            'cinema_id' => 1, // ID của rạp chiếu
        ]);
    }
}
