<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FournisseurSeeder extends Seeder
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
                "nom" => "BROOKLYN",
                "prenom" => "James",
                "tel" => "0692576524",
                "email" => "brooklynjames@gmail.com",  
            ],
            [
                "nom" => "KYLE",
                "prenom" => "Thomas",
                "tel" => "0692489310",
                "email" => "kylethomas@gmail.com", 
            ],
            [
                "nom" => "Jaop",
                "prenom" => "Yin",
                "tel" => "0692783019",
                "email" => "jaopyin@gmail.com", 
            ],
            [
                "nom" => "WILLIAMS",
                "prenom" => "Oliver",
                "tel" => "0692631922",
                "email" => "williamsoliver@gmail.com", 
            ]
        ];

        DB::table('fournisseur')->insert(
            $array
        );
    }
}
