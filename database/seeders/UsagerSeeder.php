<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'nom_usager' => 'utilisateur1',
                'nom' => 'Doe',
                'prenom' => 'John',
                'email' => 'john.doe@example.com',
                'role' => 'normal',
                'password' => Hash::make('1234'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom_usager' => 'utilisateur2',
                'nom' => 'Smith',
                'prenom' => 'Jane',
                'email' => 'jane.smith@example.com',
                'role' => 'admin',
                'password' => Hash::make('1234'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom_usager' => 'utilisateur3',
                'nom' => 'Johnson',
                'prenom' => 'Bob',
                'email' => 'bob.johnson@example.com',
                'role' => 'enfant',
                'password' => Hash::make('1234'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
