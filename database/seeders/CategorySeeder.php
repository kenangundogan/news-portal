<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'History','slug' => 'history', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Children', 'slug' => 'children', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fashion', 'slug' => 'fashion', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Politics', 'slug' => 'politics', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Culture', 'slug' => 'culture', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Art', 'slug' => 'art', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sports', 'slug' => 'sports', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Food', 'slug' => 'food', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Economy','slug' => 'economy', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Automobile','slug' => 'automobile', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cinema','slug' => 'cinema', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Science','slug' => 'science', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Travel','slug' => 'travel', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Education','slug' => 'education', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Magazine','slug' => 'magazine', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
