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
            ['name' => 'Gündem', 'slug' => 'gundem', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spor','slug' => 'spor', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ekonomi','slug' => 'ekonomi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dünya','slug' => 'dunya', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Teknoloji','slug' => 'teknoloji', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sağlık','slug' => 'saglik', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Yaşam','slug' => 'yasam', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Eğitim','slug' => 'egitim', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Magazin','slug' => 'magazin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Siyaset','slug' => 'siyaset', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kültür','slug' => 'kultur', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sanat','slug' => 'sanat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bilim','slug' => 'bilim', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gezi','slug' => 'gezi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Moda','slug' => 'moda', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Otomobil','slug' => 'otomobil', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gastronomi','slug' => 'gastronomi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Müzik','slug' => 'muzik', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sinema','slug' => 'sinema', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tiyatro','slug' => 'tiyatro', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kitap','slug' => 'kitap', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Yemek','slug' => 'yemek', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Seyahat','slug' => 'seyahat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Edebiyat','slug' => 'edebiyat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tarih','slug' => 'tarih', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Doğa','slug' => 'doga', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hobi','slug' => 'hobi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Oyun','slug' => 'oyun', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Yoga','slug' => 'yoga', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fitness','slug' => 'fitness', 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
