<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
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
                "ref_article" => "0845760",
                "designation" => "HP 15-db1042nf (9QG97EA)",
                "description" => "lorem ipsum",
                "fournisseur" => "brooklyn",
                "quantité" => 24,
                "prix" => 729,95,
                "photo" => "lien photo",
                "id_categorie" => 1,
            ],
            [
                "id" => 2,
                "ref_article" => "0549863",
                "designation" => "HP 15-dw0039nf",
                "description" => "lorem ipsum",
                "fournisseur" => "kyle",
                "quantité" => 15,
                "prix" => 769,95,
                "photo" => "lien photo",
                "id_categorie" => 2,
            ],
            [
                "id" => 3,
                "ref_article" => "0482309",
                "designation" => "HP ProBook 450 G6 (5TK28EA)",
                "description" => "lorem ipsum",
                "fournisseur" => "jaop",
                "quantité" => 500,
                "prix" => 949,55,
                "photo" => "lien photo",
                "id_categorie" => 3,
            ],
  
        ];

        DB::table('articles')->insert(
            $array
        );
    }
}
