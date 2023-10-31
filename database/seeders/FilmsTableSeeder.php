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
                'couverture_url' => 'https://images1.resources.foxtel.com.au/store2/mount1/16/2/7mdi0.jpg',
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
                'couverture_url' => 'https://images5.alphacoders.com/131/1315822.jpg',
                'pochette_url' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
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
                'lienfilm' => 'https://youtu.be/YoHD9XEInc0?si=PlQQCnjFvdiYUbBb',
                'couverture_url' => 'https://i0.wp.com/images.onwardstate.com/uploads/2010/10/inception.png?fit=1593%2C947&ssl=1',
                'pochette_url' => 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg',
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
                'lienfilm' => 'https://youtu.be/s7EdQ4FqbhY?si=GEhrFy8y4GY9bYjP',
                'couverture_url' => 'https://wallpapercave.com/wp/wp7665508.jpg',
                'pochette_url' => 'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
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
                'lienfilm' => 'https://youtu.be/vKQi3bBA1y8?si=G7SVLLVPAtCPvtGQ',
                'couverture_url' => 'https://wallpapers.com/images/hd/neon-green-the-matrix-dvd-cover-i63w4lhdvf0ku4sc.jpg',
                'pochette_url' => 'https://m.media-amazon.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
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
                'lienfilm' => 'https://youtu.be/XHhAG-YLdk8?si=P0ZjafkSLGw4P-1q',
                'couverture_url' => 'https://wallpapers.com/images/hd/tom-hanks-quality-forrest-gump-poster-3kekahja8v9rsdms.jpg',
                'pochette_url' => 'https://m.media-amazon.com/images/M/MV5BNWIwODRlZTUtY2U3ZS00Yzg1LWJhNzYtMmZiYmEyNmU1NjMzXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_FMjpg_UX1000_.jpg',
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
                'lienfilm' => 'https://youtu.be/EXeTwQWrcwY?si=lRkoTAfrHgP2Ow5B',
                'couverture_url' => 'https://c.wallhere.com/photos/d6/b7/The_Dark_Knight_Rises_Batman_Christian_Bale_Dark_Knight_Trilogy_fire-57121.jpg',
                'pochette_url' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg',
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
                'lienfilm' => 'https://youtu.be/eCKRI2wEw7I?si=fAHU3zjGSVANo3yj',
                'couverture_url' => 'https://images.alphacoders.com/204/204471.jpg',
                'pochette_url' => 'https://m.media-amazon.com/images/M/MV5BODQ0OWJiMzktYjNlYi00MzcwLThlZWMtMzRkYTY4ZDgxNzgxXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
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
                'lienfilm' => 'https://youtu.be/2LqzF5WauAw?si=oTe9BJn-YnSiCZ9A',
                'couverture_url' => 'https://i.ytimg.com/vi/LuDaYOjZ8Qw/hqdefault.jpg',
                'pochette_url' => 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
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
                'lienfilm' => 'https://youtu.be/WAXxFGfnfgY?si=vhL1q6l-vGFC_EOl',
                'couverture_url' => 'https://media.ngroup.be/IMAGE/IMAGE-S1-00028/282141-exorciste23.jpg',
                'pochette_url' => 'https://fr.web.img6.acsta.net/pictures/23/08/23/17/06/5557233.jpg',
                'cote' => 80,
                'notation' => '14 ans et plus',
                'genre_id' => 6, // ID du genre
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    
}
