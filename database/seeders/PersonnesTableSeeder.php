<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([
            [
                'nom' => 'Brad Pitt',
                'date_naissance' => '1963-12-18',
                'photo' => 'https://www.example.com/brad_pitt.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Meryl Streep',
                'date_naissance' => '1949-06-22',
                'photo' => 'https://www.example.com/meryl_streep.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Leonardo DiCaprio',
                'date_naissance' => '1974-11-11',
                'photo' => 'https://www.example.com/leonardo_dicaprio.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Julia Roberts',
                'date_naissance' => '1967-10-28',
                'photo' => 'https://www.example.com/julia_roberts.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Tom Hanks',
                'date_naissance' => '1956-07-09',
                'photo' => 'https://www.example.com/tom_hanks.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Cate Blanchett',
                'date_naissance' => '1969-05-14',
                'photo' => 'https://www.example.com/cate_blanchett.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Johnny Depp',
                'date_naissance' => '1963-06-09',
                'photo' => 'https://www.example.com/johnny_depp.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Nicole Kidman',
                'date_naissance' => '1967-06-20',
                'photo' => 'https://www.example.com/nicole_kidman.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Denzel Washington',
                'date_naissance' => '1954-12-28',
                'photo' => 'https://www.example.com/denzel_washington.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Angelina Jolie',
                'date_naissance' => '1975-06-04',
                'photo' => 'https://www.example.com/angelina_jolie.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
