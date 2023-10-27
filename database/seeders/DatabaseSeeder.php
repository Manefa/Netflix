<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call(PersonnesTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(LanguesTableSeeder::class);
        $this->call(sous_titresTableSeeder::class);
        $this->call(FilmsTableSeeder::class);
        
        $this->call(FilmActeurTableSeeder::class);
        
        $this->call(FilmLangueTableSeeder::class);
        $this->call(FilmSousTitreTableSeeder::class);
        $this->call(FilmGenreTableSeeder::class);
        
    }
}
