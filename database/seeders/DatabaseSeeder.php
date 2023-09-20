<?php

use Illuminate\Database\Seeder;
use Database\Seeders\EtudiantSeeder; // Assurez-vous d'importer le seeder EtudiantSeeder

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EtudiantSeeder::class); // Ajoutez cet appel pour exécuter le seeder EtudiantSeeder
    }
}
