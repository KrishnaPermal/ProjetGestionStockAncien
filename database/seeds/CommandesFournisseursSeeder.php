<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandesFournisseursSeeder extends Seeder
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
                "numero_commande" => "1252",
                "date" => "2020-01-01",
                "quantite" => "50",
                "id_fournisseur" => 1,
                
            ],
            [
                "id" => 2,
                "numero_commande" => "5214",
                "date" => "2020-01-02",
                "quantite" => "100",
                "id_fournisseur" => 2,
            ],
            [
                "id" => 3,
                "numero_commande" => "6325",
                "date" => "2020-01-03",
                "quantite" => "150",
                "id_fournisseur" => 3,
            ],
            [
                "id" => 4,
                "numero_commande" => "3548",
                "date" => "2020-01-04",
                "quantite" => "200",
                "id_fournisseur" => 4,
               
            ],
        ];

        DB::table('commandes_fournisseurs')->insert(
            $array
        );
    }
}
