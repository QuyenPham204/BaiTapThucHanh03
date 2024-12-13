<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Library;
class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
    Library::create([
        'name' => 'Thư viện IT Đại học ABC',
        'address' => '123 Đường X, Hà Nội',
        'contact_number' => '0123456789',
    ]);
    }
}
