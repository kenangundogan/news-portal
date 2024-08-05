<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Kenan',
            'surname' => 'Gündoğan',
            'email' => 'kenan@gundogan.com',
            'phone' => '1234567890',
            'city' => 'Istanbul',
            'country' => 'Türkiye',
            'image' => 'avatar-1.svg',
            'password' => Hash::make('password'),
        ]);
    }
}
