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

        $categoryImages = [];
        foreach ($categoryList as $key => $category) {
            $categoryImages[$category] = range($key * 6 + 1, ($key + 1) * 6);
            shuffle($categoryImages[$category]);
        }

        $news_content_types = [
            ['name' => 'Title', 'formelement' => 'input', 'type' => 'text'],
            ['name' => 'Paragraph', 'formelement' => 'textarea', 'type' => 'text'],
            ['name' => 'Image', 'formelement' => 'input', 'type' => 'file'],
            ['name' => 'Youtube Video', 'formelement' => 'input', 'type' => 'url'],
            ['name' => 'Quote', 'formelement' => 'textarea', 'type' => 'text'],
            ['name' => 'Parallax Image', 'formelement' => 'input', 'type' => 'file'],
            ['name' => 'Link', 'formelement' => 'input', 'type' => 'url'],
        ];


        $totalNews = 90;
        $insertedNewsCount = 0;

        while ($insertedNewsCount < $totalNews) {
            $randomCategoryKey = array_rand($categoryList);
            $randomCategory = $categoryList[$randomCategoryKey];

            if (empty($categoryImages[$randomCategory])) {
                continue;
            }

            $imageID = array_pop($categoryImages[$randomCategory]);

            DB::table('news')->insert([
                'title' => $faker->sentence,
                'description' => $faker->paragraph(1),
                'image_id' => $imageID,
                'category_id' => $categoryMap[$randomCategory],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $insertedNewsCount++;

        }
    }
}
