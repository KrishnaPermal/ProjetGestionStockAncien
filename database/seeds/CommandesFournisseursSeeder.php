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
                "nom" => "Fournisseur 1",
            ],
            [
                "id" => 2,
                "nom" => "Fournisseur 2",
            ],
            [
                "id" => 3,
                "nom" => "Fournisseur 3",
            ],
            [
                "id" => 4,
                "nom" => "Fournisseur 4",
            ],
        ];

        DB::table('commandes_fournisseurs')->insert(
            $array
        );
    }
}
