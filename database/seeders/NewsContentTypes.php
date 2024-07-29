<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NewsContentTypes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news_content_types')->insert([
            ['type' => 'paragraph', 'created_at' => now(), 'updated_at' => now()],
            ['type' => 'image', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
