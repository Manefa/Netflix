<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sous_titresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sous_titres')->insert([
            [
                'code' => 'fr',
                'nom' => 'Français',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'en',
                'nom' => 'Anglais',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'es',
                'nom' => 'Espagnol',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'de',
                'nom' => 'Allemand',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'it',
                'nom' => 'Italien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'pt',
                'nom' => 'Portugais',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ja',
                'nom' => 'Japonais',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'zh',
                'nom' => 'Chinois',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ru',
                'nom' => 'Russe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
