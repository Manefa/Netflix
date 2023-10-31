<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmPersonneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_personne')->insert([
            [
                'film_id' => 1, // ID d'un film existant
                'personne_id' => 1, // ID d'un acteur existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 1, // ID d'un film existant
                'personne_id' => 2, // ID d'un acteur existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 2, // ID d'un film existant
                'personne_id' => 3, // ID d'un acteur existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 2, // ID d'un film existant
                'personne_id' => 4, // ID d'un acteur existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 3, // ID d'un film existant
                'personne_id' => 5, // ID d'un acteur existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 3, // ID d'un film existant
                'personne_id' => 6, // ID d'un acteur existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 4, // ID d'un film existant
                'personne_id' => 7, // ID d'un acteur existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 4, // ID d'un film existant
                'personne_id' => 8, // ID d'un acteur existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 5, // ID d'un film existant
                'personne_id' => 9, // ID d'un acteur existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 5, // ID d'un film existant
                'personne_id' => 10, // ID d'un acteur existant
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
