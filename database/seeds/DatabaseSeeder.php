<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            ArticlesSeeder::class,
            CategorieSeeder::class,
            ClientsSeeder::class,
            CommandesSeeder::class,
            FournisseurSeeder::class,
            CommandesFournisseursSeeder::class,
            CommandesFASeeder::class,
            Commandes_has_articlesSeeder::class,
            
            ]);
    }
}
