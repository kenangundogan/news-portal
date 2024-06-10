<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $paragraphs = '<p class="block mb-4">' . $faker->text(600) . '</p>';
        $paragraphs .= '<p class="block mb-4">' . $faker->text(400) . '</p>';
        $paragraphs .= '<p class="block mb-4">' . $faker->text(300) . '</p>';
        $paragraphs .= '<p class="block mb-4">' . $faker->text(600) . '</p>';
        $paragraphs .= '<p class="block mb-4">' . $faker->text(200) . '</p>';
        $paragraphs .= '<p class="block mb-4">' . $faker->text(100) . '</p>';
        $paragraphs .= '<p class="block mb-4">' . $faker->text(400) . '</p>';
        $paragraphs .= '<p class="block mb-4">' . $faker->text(600) . '</p>';
        $paragraphs .= '<p class="block mb-4">' . $faker->text(400) . '</p>';
        $paragraphs .= '<p class="block mb-4">' . $faker->text(300) . '</p>';

        for ($i = 0; $i < 300; $i++) {
            DB::table('news')->insert([
                'title' => $faker->sentence,
                'description' => $faker->paragraph(1),
                'content' => $paragraphs,
                'image_id' => $faker->numberBetween(1, 5),
                'category_id' => $faker->numberBetween(1, 20),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
