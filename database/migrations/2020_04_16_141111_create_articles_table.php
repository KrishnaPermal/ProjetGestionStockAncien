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
        Schema::disableForeignKeyConstraints();
        //Schema::enableForeignKeyConstraints();
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
            $table->unsignedBigInteger('id_catégorie')->unsigned();
            $table->timestamps();   
    
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('id_catégorie')->references('id')->on('categorie');
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('echanges', function (Blueprint $table) {
            $table->dropForeign(['id_catégorie']);
            $table->dropIfExists('id_catégorie');
        });


        Schema::dropIfExists('articles');
    }
}