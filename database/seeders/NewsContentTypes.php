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
            ['name' => 'Title', 'formelement' => 'input', 'type' => 'text', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Paragraph', 'formelement' => 'textarea', 'type' => 'text', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Image', 'formelement' => 'input', 'type' => 'file', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Youtube Video', 'formelement' => 'input', 'type' => 'url', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Quote', 'formelement' => 'textarea', 'type' => 'text', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
