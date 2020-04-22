<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('catégorie',255);
            $table->timestamps();
        });

        Schema::table('articles', function (Blueprint $table) {
            
            $table->bigInteger('id_categorie')->unsigned();
            $table->foreign('id_categorie')->references('id')->on('categorie');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorie');
    }
}
