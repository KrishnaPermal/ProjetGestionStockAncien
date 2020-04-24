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
                "id_articles" => 1,
                "id_commandes" => 1,
                "quantité" => 1
            ],
            [   
                "id_articles" => 2,
                "id_commandes" => 2,
                "quantité" => 1
            ]
        ];

        DB::table('commandes_has_articles')->insert(
            $array
        );
    }
}
