<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'titre' => 'Drame',
                'description' => 'Films axés sur des récits émotionnels et humains.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Comédie',
                'description' => 'Films humoristiques conçus pour divertir et faire rire le public.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Science-Fiction',
                'description' => 'Films basés sur des concepts scientifiques et des mondes futuristes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Action',
                'description' => 'Films remplis d\'excitation, de cascades et de combats.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Romance',
                'description' => 'Films centrés sur l\'amour et les relations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Horreur',
                'description' => 'Films conçus pour effrayer et susciter des émotions d\'horreur.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Aventure',
                'description' => 'Films d\'aventures palpitants avec des quêtes et des découvertes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Fantaisie',
                'description' => 'Films se déroulant dans des mondes imaginaires avec des éléments fantastiques.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Mystère',
                'description' => 'Films axés sur des énigmes et des mystères à résoudre.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Animation',
                'description' => 'Films animés conçus pour les publics de tous âges.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
