<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'titre' => 'The Shawshank Redemption',
                'resume' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'duree' => '2h22m',
                'annee_de_production' => 1994,
                'brand' => 'Hoolywood',
                'realisateur_id' => 1, // ID du réalisateur
                'producteur_id' => 2, // ID du producteur
                'lien_film' => 'https://youtu.be/PLl99DlL6b4?si=VtIxKVoK1t9utkjF',
                'pochette_url' => 'https://m.media-amazon.com/images/M/MV5BNDE3ODcxYzMtY2YzZC00NmNlLWJiNDMtZDViZWM2MzIxZDYwXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_.jpg',
                'cote' => 70,
                'notation' => '18 ans et plus',
                'genre_id' => 1, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'The Godfather',
                'resume' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'duree' => '2h55m',
                'annee_de_production' => 1972,
                'brand' => 'Hoolywood',
                'realisateur_id' => 3, // ID du réalisateur
                'producteur_id' => 4, // ID du producteur
                'lienfilm' => 'https://youtu.be/UaVTIH8mujA?si=zSTQqrUEpHUkBp5T',
                'pochetteurl' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UX1000_.jpg',
                'cote' => 50,
                'notation' => '14 ans et plus',
                'genre_id' => 2, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Inception',
                'resume' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'duree' => '2h28m',
                'annee_de_production' => 2010,
                'brand' => 'Hoolywood',
                'realisateur_id' => 5, // ID du réalisateur
                'producteur_id' => 6, // ID du producteur
                'lienfilm' => 'https://www.example.com/inception.mp4',
                'pochetteurl' => 'https://www.example.com/inception.jpg',
                'cote' => 40,
                'notation' => '14 ans et plus',
                'genre_id' => 3, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Pulp Fiction',
                'resume' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'duree' => '2h34m',
                'annee_de_production' => 1994,
                'brand' => 'Hoolywood',
                'realisateur_id' => 7, // ID du réalisateur
                'producteur_id' => 8, // ID du producteur
                'lienfilm' => 'https://www.example.com/pulp_fiction.mp4',
                'pochetteurl' => 'https://www.example.com/pulp_fiction.jpg',
                'cote' => 90,
                'notation' => '18 ans et plus',
                'genre_id' => 4, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'The Matrix',
                'resume' => 'A computer programmer discovers that reality as he knows it is a simulation created by machines to subjugate humanity.',
                'duree' => '2h16m',
                'annee_de_production' => 1999,
                'brand' => 'Hoolywood',
                'realisateur_id' => 9, // ID du réalisateur
                'producteur_id' => 10, // ID du producteur
                'lienfilm' => 'https://www.example.com/the_matrix.mp4',
                'pochetteurl' => 'https://www.example.com/the_matrix.jpg',
                'cote' => 70,
                'notation' => '15 ans et plus',
                'genre_id' => 5, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Forrest Gump',
                'resume' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold through the perspective of an Alabama man with an IQ of 75.',
                'duree' => '2h22m',
                'annee_de_production' => 1994,
                'brand' => 'Hoolywood',
                'realisateur_id' => 5, // ID du réalisateur
                'producteur_id' => 6, // ID du producteur
                'lienfilm' => 'https://www.example.com/forrest_gump.mp4',
                'pochetteurl' => 'https://www.example.com/forrest_gump.jpg',
                'cote' => 70,
                'notation' => '16 ans et plus',
                'genre_id' => 1, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'The Dark Knight',
                'resume' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'duree' => '2h32m',
                'annee_de_production' => 2008,
                'brand' => 'Hoolywood',
                'realisateur_id' => 10, // ID du réalisateur
                'producteur_id' => 8, // ID du producteur
                'lienfilm' => 'https://www.example.com/the_dark_knight.mp4',
                'pochetteurl' => 'https://www.example.com/the_dark_knight.jpg',
                'cote' => 80,
                'notation' => '12 ans et plus',
                'genre_id' => 6, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Fight Club',
                'resume' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into an anarchist organization.',
                'duree' => '2h19m',
                'annee_de_production' => 1999,
                'brand' => 'Hoolywood',
                'realisateur_id' => 10, // ID du réalisateur
                'producteur_id' => 6, // ID du producteur
                'lienfilm' => 'https://www.example.com/fight_club.mp4',
                'pochetteurl' => 'https://www.example.com/fight_club.jpg',
                'cote' => 90,
                'notation' => '11 ans et plus',
                'genre_id' => 4, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Interstellar',
                'resume' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'duree' => '2h49m',
                'annee_de_production' => 2014,
                'brand' => 'Hoolywood',
                'realisateur_id' => 1, // ID du réalisateur
                'producteur_id' => 8, // ID du producteur
                'lienfilm' => 'https://www.example.com/interstellar.mp4',
                'pochetteurl' => 'https://www.example.com/interstellar.jpg',
                'cote' => 80,
                'notation' => '14 ans et plus',
                'genre_id' => 3, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'L\'exorciste - Devotion',
                'resume' => 'Depuis que sa femme, enceinte, a perdu la vie au cours d’un séisme en Haïti douze ans plus tôt, Victor Fielding élève, seul, leur fille Angela. Un jour, Angela et son amie Katherine disparaissent dans les bois avant de refaire surface 72 heures plus tard sans le moindre souvenir de ce qui leur est arrivé.',
                'duree' => '2h49m',
                'annee_de_production' => 2023,
                'brand' => 'Hoolywood',
                'realisateur_id' => 1, // ID du réalisateur
                'producteur_id' => 8, // ID du producteur
                'lienfilm' => 'https://www.example.com/interstellar.mp4',
                'pochetteurl' => 'https://www.example.com/interstellar.jpg',
                'cote' => 80,
                'notation' => '14 ans et plus',
                'genre_id' => 6, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    
}
