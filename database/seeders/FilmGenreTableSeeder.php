<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FilmGenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_genre')->insert([
            [
                'film_id' => 1, // ID d'un film existant
                'genre_id' => 1, // ID d'un genre existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 2, // ID d'un film existant
                'genre_id' => 2, // ID d'un genre existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 3, // ID d'un film existant
                'genre_id' => 3, // ID d'un genre existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 4, // ID d'un film existant
                'genre_id' => 4, // ID d'un genre existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 5, // ID d'un film existant
                'genre_id' => 5, // ID d'un genre existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 6, // ID d'un film existant
                'genre_id' => 6, // ID d'un genre existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 7, // ID d'un film existant
                'genre_id' => 7, // ID d'un genre existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 8, // ID d'un film existant
                'genre_id' => 8, // ID d'un genre existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 9, // ID d'un film existant
                'genre_id' => 9, // ID d'un genre existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 10, // ID d'un film existant
                'genre_id' => 10, // ID d'un genre existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
