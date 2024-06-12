<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        $categoryList = [
            'history',
            'children',
            'fashion',
            'politics',
            'culture',
            'art',
            'sports',
            'food',
            'economy',
            'automobile',
            'cinema',
            'science',
            'travel',
            'education',
            'magazine',
        ];

        $categoryMap = [];
        foreach ($categoryList as $key => $category) {
            $categoryMap[$category] = $key + 1;
        }

        // Kategorilere göre imaj ID'lerini ayıralım
        $categoryImages = [];
        foreach ($categoryList as $key => $category) {
            $categoryImages[$category] = range($key * 6 + 1, ($key + 1) * 6);
            shuffle($categoryImages[$category]); // Rastgele sıraya diz
        }

        $totalNews = 90; // Toplamda 90 haber eklemeyi hedefliyoruz
        $insertedNewsCount = 0;

        while ($insertedNewsCount < $totalNews) {
            $randomCategoryKey = array_rand($categoryList);
            $randomCategory = $categoryList[$randomCategoryKey];

            // Eğer kategori için kullanılabilir imaj kalmadıysa, başka kategori seçmeye devam et
            if (empty($categoryImages[$randomCategory])) {
                continue;
            }

            // Kullanılacak imaj ID'sini alalım ve listeden kaldıralım
            $imageID = array_pop($categoryImages[$randomCategory]);

            DB::table('news')->insert([
                'title' => $faker->sentence,
                'description' => $faker->paragraph(1),
                'content' => $paragraphs,
                'image_id' => $imageID,
                'category_id' => $categoryMap[$randomCategory],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $insertedNewsCount++;
        }
    }
}
