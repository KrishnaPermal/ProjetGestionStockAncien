<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                "id" => 1,
                "categorie" => "Pc & Portable",
            ], 
            [
                "id" => 2,
                "categorie" => "Composant PC",
                
            ],   
            [
                "id" => 3,
                "categorie" => "Périphériques PC",
                
            ], 
            [
                "id" => 4,
                "categorie" => "Réseau & Téléphones",
                
            ], 
            [
                "id" => 5,
                "categorie" => "Images & Son",
                
            ], 
            [
                "id" => 6,
                "categorie" => "Connectique",
                
            ], 
            [
                "id" => 7,
                "categorie" => "Loisir High-Tech",
                
            ], 
        ];

        DB::table('categorie')->insert(
            $array
        );
    }
}
