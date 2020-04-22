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
        Schema::create('commandesFA', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('quantité',255);

            $table->bigInteger('id_articles')->unsigned();
            $table->foreign('id_articles')->references('id')->on('articles');

            $table->bigInteger('id_commandes_fournisseurs')->unsigned();
            $table->foreign('id_commandes_fournisseurs')->references('id')->on('commandes_fournisseurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandesFA');
    }
}
