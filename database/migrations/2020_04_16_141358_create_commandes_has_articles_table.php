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
        Schema::create('commandes_has_articles', function (Blueprint $table) {
            $table->id();
            $table->string('quantité',255);
            $table->timestamps();
        });

    
        Schema::create('commande_articles', function(Blueprint $table) {
            $table->unsignedBigInteger('id_articles');
            $table->foreign('id_articles')->references('id')->on('articles');
        
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
        
        Schema::table('commande_articles', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('commande_articles_id_articles_foreign');
            $table->drop('id_articles');
            Schema::enableForeignKeyConstraints();
       });

        Schema::dropIfExists('commandes_has_articles');
    }
}
