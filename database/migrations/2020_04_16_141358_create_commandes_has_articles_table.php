<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesHasArticlesTable extends Migration
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
        Schema::create('commandes_has_articles', function (Blueprint $table) {
            $table->unsignedBigInteger('id_commandes')->unsigned();
            $table->unsignedBigInteger('id_article')->unsigned();
            $table->string('quantite',255);
            $table->timestamps();
        });

        Schema::table('commandes_has_articles', function (Blueprint $table) {
            $table->foreign('id_commandes')->references('id')->on('commandes');
        });

        Schema::table('commandes_has_articles', function (Blueprint $table) {
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
        
        Schema::table('commandes_has_articles', function (Blueprint $table) {
            $table->dropForeign(['id_commandes']);
            $table->dropIfExists('id_commandes');
        });

        Schema::table('commandes_has_articles', function (Blueprint $table) {
            $table->dropForeign(['id_article']);
            $table->dropIfExists('id_article');
        });

        Schema::dropIfExists('commandes_has_articles');
    }
}

