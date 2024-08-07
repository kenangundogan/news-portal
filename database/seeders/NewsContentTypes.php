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
            ['name' => 'Paragraph', 'formelement' => 'textarea', 'type' => 'text', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Image', 'formelement' => 'input', 'type' => 'file', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Quote', 'formelement' => 'textarea', 'type' => 'text', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Youtube Video', 'formelement' => 'input', 'type' => 'url', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Title', 'formelement' => 'input', 'type' => 'text', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Parallax Image', 'formelement' => 'input', 'type' => 'file', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Link', 'formelement' => 'input', 'type' => 'url', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
