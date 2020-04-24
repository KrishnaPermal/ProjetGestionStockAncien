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
                "id" => 1,
                "quantité" => 1
            ],
            [   
                "id" => 2,
                "quantité" => 2
            ]
        ];

        DB::table('commandesFA')->insert(
            $array
        );
    }
}
