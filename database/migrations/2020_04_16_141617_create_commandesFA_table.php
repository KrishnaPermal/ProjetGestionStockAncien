<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatecommandesFATable extends Migration
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
        Schema::create('commandesFA', function (Blueprint $table) {
            $table->unsignedBigInteger('id_commandes_fournisseurs')->unsigned();
            $table->unsignedBigInteger('id_article')->unsigned();
            $table->string('quantite',255);
            $table->timestamps();
        });

        Schema::table('commandesFA', function (Blueprint $table) {
            $table->foreign('id_commandes_fournisseurs')->references('id')->on('commandes_fournisseurs');
        });

        Schema::table('commandesFA', function (Blueprint $table) {
            $table->foreign('id_article')->references('id')->on('articles');
        });
        
    
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('commandesFA', function (Blueprint $table) {
            $table->dropForeign(['id_commandes_fournisseurs']);
            $table->dropIfExists('id_commandes_fournisseurs');
        });

        Schema::table('echanges', function (Blueprint $table) {
            $table->dropForeign(['id_article']);
            $table->dropIfExists('id_article');
        });

        Schema::dropIfExists('commandesFA');
    }
}
