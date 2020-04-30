<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
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
                "nom" => "TAYLOR",
                "prenom" => "James",
                "adresse" => "7 chemin var,",
                "code_postale" => "97419 LA POSSESSION",
                "email" => "taylor.james974@gmail.com",
                "telephone" => "0692154219",
                
            ],

            [
                "id" => 2,
                "nom" => "MILLER",
                "prenom" => "John",
                "adresse" => "12 Bis av Leconte de Lisle,Ste Clotilde,",
                "code_postale" => "97490 SAINT-DENIS",
                "email" => "miller.john974@gmail.com",
                "telephone" => "0692185672",
                
            ],

            [
                "id" => 3,
                "nom" => "RODRIGUEZ",
                "prenom" => "Liam",
                "adresse" => "72 Bis r Marius et Ary Leblond,",
                "code_postale" => "97410 SAINT-PIERRE",
                "email" => "rodriguez.liam974@gmail.com",
                "telephone" => "0692758912",
                
            ],

            [
                "id" => 4,
                "nom" => "GARCIA",
                "prenom" => "Ethan",
                "adresse" => "246 chem Ravine Creuse,",
                "code_postale" => "97440 SAINT-ANDRÉ",
                "email" => "garcia.ethan974@gmail.com",
                "telephone" => "0692121212",
                
            ],

        ];
        
        DB::table('client')->insert(
            $array
        );
    }
}
