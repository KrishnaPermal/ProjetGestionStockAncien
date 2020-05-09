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
                "marque" => "HP 15-db1042nf (9QG97EA)",
                "description" => "Polyvalence et mobilité caractérisent parfaitement le PC Portable HP Pavilion 15-db1042nf (9QG97EA).",
                "fournisseur" => "brooklyn",
                "quantite" => "24",
                "prix" => "729,95",
                "image" => "https://media.ldlc.com/r1600/ld/products/00/05/63/76/LD0005637689_2_0005645408.jpg",
                "id_categorie" => 1,
            ],
            [
                "id" => 2,
                "ref_article" => "0549863",
                "marque" => "HP Omen 15-dc1066nf",
                "description" => "Le PC portable Gamer HP Omen 15-dc1066nf se charge de vous accompagner sur tous les champs de bataille avec efficacité.",
                "fournisseur" => "kyle",
                "quantite" => "15",
                "prix" => "1 399",
                "image" => "https://media.ldlc.com/r1600/ld/products/00/05/35/32/LD0005353215_2_0005377489.jpg",
                "id_categorie" => 2,
            ],
            [
                "id" => 3,
                "ref_article" => "0482309",
                "marque" => "HP ProBook 450 G6 (5TK28EA)",
                "description" => "L'ordinateur portable HP ProBook 450 G7 (9VZ28EA) est l'outil informatique idéal pour les professionnels mobiles.",
                "fournisseur" => "jaop",
                "quantite" => "500",
                "prix" => "949,55",
                "image" => "https://cdn.cnetcontent.com/29/0e/290e6df9-8bc0-43a4-92ec-f878a3223d72.jpg",
                "id_categorie" => 3,
            ],
  
        ];

        DB::table('articles')->insert(
            $array
        );
    }
}
