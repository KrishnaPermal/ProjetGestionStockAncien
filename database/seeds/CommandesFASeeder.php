<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandesFASeeder extends Seeder
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
                "id_commandes_fournisseurs" => 1,
                "id_article" => 1,
                "quantite" => 1
            ],
            [   
                "id_commandes_fournisseurs" => 2,
                "id_article" => 2,
                "quantite" => 2
            ]
        ];

        DB::table('commandesFA')->insert(
            $array
        );
    }
}
