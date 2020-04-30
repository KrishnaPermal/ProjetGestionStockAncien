<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Commandes_has_articlesSeeder extends Seeder
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
                "id_article" => 1,
                "id_commandes" => 1,
                "quantite" => 1
            ],
            [   
                "id_article" => 2,
                "id_commandes" => 2,
                "quantite" => 1
            ]
        ];

        DB::table('commandes_has_articles')->insert(
            $array
        );
    }
}
