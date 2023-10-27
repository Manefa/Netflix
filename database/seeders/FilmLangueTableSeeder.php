<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmLangueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($filmId = 1; $filmId <= 10; $filmId++) {
            // Générez un tableau de langues disponibles (ID de 1 à 10)
            $languesDisponibles = range(1, 10);
            // Mélangez le tableau de langues disponibles
            shuffle($languesDisponibles);
            // Sélectionnez les trois premières langues pour chaque film
            $languesPourFilm = array_slice($languesDisponibles, 0, 3);
            foreach ($languesPourFilm as $langueId) {
                DB::table('film_langue')->insert([
                    'film_id' => $filmId,
                    'langue_id' => $langueId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
