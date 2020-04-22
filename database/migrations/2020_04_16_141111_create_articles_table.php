<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('réf_article',255);
            $table->string('designation',255);
            $table->string('description',255);
            $table->string('fournisseur',255);
            $table->string('unité',255);
            $table->string('quantité',255);
            $table->string('prix',255);
            $table->string('photo');
            $table->timestamps();

            $table->bigInteger('id_categorie')->unsigned();
            $table->foreign('id_categorie')->references('id')->on('articles');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
