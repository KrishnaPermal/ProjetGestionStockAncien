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
                "id" => 1,
                "quantité" => "max"
            ],
            [   
                "id" => 2,
                "quantité" => "min"
            ]
        ];

        DB::table('commandes_has_articles')->insert(
            $array
        );
    }
}
