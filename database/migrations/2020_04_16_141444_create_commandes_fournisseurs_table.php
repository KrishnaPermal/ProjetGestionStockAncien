<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesFournisseursTable extends Migration
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
        Schema::create('commandes_fournisseurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero_commande',255);
            $table->dateTime('date');
            $table->string('quantité',255);
            $table->unsignedBigInteger('id_fournisseur')->unsigned();
            $table->timestamps();
        });   

        Schema::table('commandes_fournisseurs', function (Blueprint $table) {
            $table->foreign('id_fournisseur')->references('id')->on('fournisseur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
             
       Schema::table('commandes_fournisseurs', function (Blueprint $table) {
        $table->dropForeign(['id_fournisseur']);
        $table->dropIfExists('id_fournisseur');
    });

        Schema::dropIfExists('commandes_fournisseurs');

    }

}



   