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

        foreach($categoryList as $category) {
            for ($i = 1; $i < 7; $i++) {
                DB::table('images')->insert([
                    ['name' => $category . '-' . $i, 'url' => $category . '-' . $i, 'created_at' => now(), 'updated_at' => now()],
                ]);
            }
        }
    }
}
