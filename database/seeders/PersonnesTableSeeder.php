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
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjA1MjE2MTQ2MV5BMl5BanBnXkFtZTcwMjE5MDY0Nw@@._V1_.jpg',
                'role_principal' => 'Acteur',
                'biographie' => 'William Bradley Pitt, dit Brad Pitt, est un acteur et producteur de cinéma américain, né le 18 décembre 1963 à Shawnee. Sex-symbol des années 1990, Brad Pitt est le premier acteur élu deux fois « Homme le plus sexy du monde » par le magazine People en 1995 et en 2000.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Meryl Streep',
                'date_naissance' => '1949-06-22',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTU4Mjk5MDExOF5BMl5BanBnXkFtZTcwOTU1MTMyMw@@._V1_.jpg',
                'role_principal' => 'Actrice',
                'biographie' => "Mary Louise Streep, dite Meryl Streep, née le 22 juin 1949 à Summit, est une actrice et chanteuse américaine. Souvent considérée comme la meilleure actrice de sa génération, elle est la personnalité la plus nommée de l'histoire des Oscars du cinéma, et en a remporté 3.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Leonardo DiCaprio',
                'date_naissance' => '1974-11-11',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjI0MTg3MzI0M15BMl5BanBnXkFtZTcwMzQyODU2Mw@@._V1_QL75_UY207_CR7,0,140,207_.jpg',
                'role_principal' => 'Acteur',
                'biographie' => 'Leonardo DiCaprio est un acteur, producteur, scénariste et documentariste américain, né le 11 novembre 1974 à Los Angeles.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Julia Roberts',
                'date_naissance' => '1967-10-28',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTQzNjU3MDczN15BMl5BanBnXkFtZTYwNzY2Njc4._V1_.jpg',
                'role_principal' => 'Actrice',
                'biographie' => 'Julia Roberts est une actrice et productrice américaine, née le 28 octobre 1967 à Smyrna aux États-Unis. Elle est révélée par la populaire comédie romantique Pretty Woman et devient une star planétaire.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Tom Hanks',
                'date_naissance' => '1956-07-09',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTQ2MjMwNDA3Nl5BMl5BanBnXkFtZTcwMTA2NDY3NQ@@._V1_.jpg',
                'role_principal' => 'Acteur',
                'biographie' => 'Tom Hanks , né le 9 juillet 1956 à Concord, est un acteur, réalisateur et producteur de cinéma américano-grec. Il est depuis juillet 2020, avec sa femme Rita Wilson, citoyen grec.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Cate Blanchett',
                'date_naissance' => '1969-05-14',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTc1MDI0MDg1NV5BMl5BanBnXkFtZTgwMDM3OTAzMTE@._V1_.jpg',
                'role_principal' => 'Actrice',
                'biographie' => 'Cate Blanchett est une actrice australo-américaine, née le 14 mai 1969 à Melbourne. Ayant bénéficié de nombreuses récompenses et nominations pour des rôles très divers, elle est considérée par de nombreux critiques comme l\'une des meilleures actrices de sa génération.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Johnny Depp',
                'date_naissance' => '1963-06-09',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMDgzNmJjODItZTJmYS00MThjLTgwMDYtODBmMjEwMTJmNGI5XkEyXkFqcGdeQXVyNjc1OTk4NjA@._V1_.jpg',
                'role_principal' => 'Acteur',
                'biographie' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Nicole Kidman',
                'date_naissance' => '1967-06-20',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTk1MjM5NDg4MF5BMl5BanBnXkFtZTcwNDg1OTQ4Nw@@._V1_.jpg',
                'role_principal' => 'Actrice',
                'biographie' => 'Johnny Depp, né le 9 juin 1963 à Owensboro, est un acteur, producteur, réalisateur, scénariste, chanteur, guitariste et mannequin américain.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Denzel Washington',
                'date_naissance' => '1954-12-28',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjE5NDU2Mzc3MV5BMl5BanBnXkFtZTcwNjAwNTE5OQ@@._V1_.jpg',
                'role_principal' => 'Acteur',
                'biographie' => 'Denzel Washington est un acteur, réalisateur et producteur de cinéma américain né le 28 décembre 1954 à Mount Vernon. Il est l’un des membres les plus emblématiques de la génération des acteurs afro-américains masculins – avec Eddie Murphy, Morgan Freeman, Samuel L.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Angelina Jolie',
                'date_naissance' => '1975-06-04',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNmU4MjBmMWItYmYzYS00ZmEyLWJhN2ItOTJkZDBlYjJjMzZlXkEyXkFqcGdeQXVyMTE0MzQwMjgz._V1_QL75_UX500_CR0,26,500,281_.jpg',
                'role_principal' => 'Actrice',
                'biographie' => 'Angelina Jolie, née le 4 juin 1975 à Los Angeles, est une actrice, réalisatrice, scénariste, productrice, mannequin, écrivaine et ambassadrice de bonne volonté américano-cambodgienne. Elle a reçu trois Golden Globes, deux Screen Actors Guild Awards et un Oscar du cinéma.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Angelina Jolie',
                'date_naissance' => '1975-06-04',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNmU4MjBmMWItYmYzYS00ZmEyLWJhN2ItOTJkZDBlYjJjMzZlXkEyXkFqcGdeQXVyMTE0MzQwMjgz._V1_QL75_UX500_CR0,26,500,281_.jpg',
                'role_principal' => 'Actrice',
                'biographie' => 'Angelina Jolie, née le 4 juin 1975 à Los Angeles, est une actrice, réalisatrice, scénariste, productrice, mannequin, écrivaine et ambassadrice de bonne volonté américano-cambodgienne. Elle a reçu trois Golden Globes, deux Screen Actors Guild Awards et un Oscar du cinéma.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
