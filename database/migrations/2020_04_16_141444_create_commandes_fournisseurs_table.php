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
        Schema::create('commandes_fournisseurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom',255);
            //$table->string('quantité',255);
            $table->timestamps();

            $table->bigInteger('id_fournisseur')->unsigned();
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
        Schema::dropIfExists('commandes_fournisseurs');
    }
}
