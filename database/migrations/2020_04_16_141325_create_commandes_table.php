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
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });

        Schema::table('commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('client');
        });

        Schema::table('commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_commandes');
            $table->foreign('id_commandes')->references('id')->on('commandes');
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
            $table->dropForeign(['id_commandes']);
            $table->dropIfExists('id_commandes');
           
        });

        Schema::dropIfExists('commandes');
        
    }
}

