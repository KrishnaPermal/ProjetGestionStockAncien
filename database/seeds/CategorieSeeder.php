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
                "categorie" => "Ordinateur portable"
            ],
            [
                "id" => 2,
                "categorie" => "Ordinateur de Bureau"
            ],
            [
                "id" => 3,
                "categorie" => "Pièces informatiques"
            ],
            [
                "id" => 4,
                "categorie" => "Périphérique pc"
            ],
            [
                "id" => 5,
                "categorie" => "Tablette"
            ],
            [
                "id" => 6,
                "categorie" => "Réseau"
            ],
            [
                "id" => 6,
                "categorie" => "Logiciel"
            ],
           
            
        ];

        DB::table('categorie')->insert(
            $array
        );
    }
}
