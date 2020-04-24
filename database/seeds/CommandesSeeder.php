<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandesSeeder extends Seeder
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
                "id_client" => 1,
                "commandes_id_commandes" => 1
            ],
            [
                "id" => 2,
                "id_client" => 2,
                "commandes_id_commandes" => 2

            ],
            [
                "id" => 3,
                "id_client" => 3,
                "commandes_id_commandes" => 3
            ],
            [
                "id" => 4,
                "id_client" => 4,
                "commandes_id_commandes" => 4
            ],

        ];

        DB::table('commandes')->insert(
            $array
        );
    }
}
