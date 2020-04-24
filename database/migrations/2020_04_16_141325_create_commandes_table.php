<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        //Schema::enableForeignKeyConstraints();
        Schema::create('commandes', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->unsignedBigInteger('id_client')->unsigned();
            $table->unsignedBigInteger('commandes_id_commandes')->unsigned();
            $table->timestamps();
        });

        Schema::table('commandes', function (Blueprint $table) {
            $table->foreign('id_client')->references('id')->on('clients');
        });

        Schema::table('commandes', function (Blueprint $table) {
            $table->foreign('commandes_id_commandes')->references('id')->on('commandes');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


        Schema::table('commandes', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_client']);
            $table->dropIfExists('id_client');
            $table->dropForeign(['commandes_id_commandes']);
            $table->dropIfExists('commandes_id_commandes');
            Schema::enableForeignKeyConstraints();
        });

        Schema::dropIfExists('commandes');
        
    }
}

