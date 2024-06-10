<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            ['name' => '101', 'url' => '101', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '102', 'url' => '102', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '103', 'url' => '103', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '104', 'url' => '104', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '105', 'url' => '105', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
