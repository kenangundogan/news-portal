<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NewsContent extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news = DB::table('news')->get();
        $contentTypes = DB::table('news_content_types')->get();
        $faker = Faker::create();

        $yotubeUrlList = [
            'https://www.youtube.com/embed/gnpyIbK-Y78?si=5w9QxwX-djJGcQ8c',
            'https://www.youtube.com/embed/KLuTLF3x9sA?si=w3f3DtwKpodkJJCX',
            'https://www.youtube.com/embed/Rwe5Aw3KPHY?si=yhsBXblefmEZltox'
        ];


        foreach ($news as $item) {
            $imageId = $item->image_id;
            $image = DB::table('images')->where('id', $imageId)->first();


            foreach ($contentTypes as $contentType) {
                switch ($contentType->name) {
                    case 'Title':
                        $content = $faker->sentence;
                        break;
                    case 'Paragraph':
                        $content = $faker->paragraphs(rand(10, 20), true);
                        break;
                    case 'Image':
                        $content = 'images/16x9/' . $image->image;
                        break;
                    case 'Youtube Video':
                        $content = $yotubeUrlList[array_rand($yotubeUrlList)];
                        break;
                    case 'Quote':
                        $content = $faker->paragraphs(rand(3, 6), true);
                        break;
                    case 'Parallax Image':
                        $content = 'images/16x9/' . $image->image;
                        break;
                    case 'Link':
                        $content = $faker->url;
                        break;
                    default:
                        $content = $faker->text(600);
                }
                DB::table('news_contents')->insert([
                    'news_id' => $item->id,
                    'news_content_type_id' => $contentType->id,
                    'content' => $content,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}

