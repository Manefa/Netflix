<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSousTitreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($filmId = 1; $filmId <= 10; $filmId++) {
            // Générez un tableau de langues de sous-titre disponibles (ID de 1 à 10)
            $sousTitresDisponibles = range(1, 10);
            // Mélangez le tableau de langues de sous-titre disponibles
            shuffle($sousTitresDisponibles);
            // Sélectionnez les trois premières langues de sous-titre pour chaque film
            $sousTitresPourFilm = array_slice($sousTitresDisponibles, 0, 3);
            foreach ($sousTitresPourFilm as $sousTitreId) {
                DB::table('film_sous_titre')->insert([
                    'film_id' => $filmId,
                    'sous_titre_id' => $sousTitreId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
