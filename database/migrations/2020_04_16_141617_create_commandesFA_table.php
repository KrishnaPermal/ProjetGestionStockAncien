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
            $table->string('quantité',255);
            $table->timestamps();

    //Nous créeons des champs vides
            $table->unsignedBigInteger('id_articles');
            $table->unsignedBigInteger('id_commandes_fournisseurs');
            
            $table->timestamps();
        });


    //N'oublions pas de rajouter la clé étrangère
        Schema::table('commandesFA', function($table) {
  
            $table->foreign('id_articles')->references('id')->on('articles');
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
        
        Schema::table('commandesFA', function (Blueprint $table) {
     
            Schema::disableForeignKeyConstraints();

            $table->dropIfExists('id_articles');
            $table->dropIfExists('id_commandesFA');
          
          
    
           Schema::enableForeignKeyConstraints();
       });
        

        Schema::dropIfExists('commandesFA');
    }








}
