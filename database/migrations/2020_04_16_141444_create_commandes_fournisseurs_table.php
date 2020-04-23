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
            $table->string('numero_commande',255);
            $table->dateTime('date');
            $table->string('quantité',255);
            $table->timestamps();
        });   

    
        Schema::table('fournisseur', function (Blueprint $table) {
            $table->unsignedBigInteger('id_fournisseur');
        });
            
        Schema::table('fournisseur', function (Blueprint $table) {
            $table->foreign('id_fournisseur')->references('id')->on('commandes_fournisseurs');
        });
   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('fournisseur', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_fournisseur']);
            $table->dropIfExists('id_fournisseur');
       });
          
        Schema::dropIfExists('commandes_fournisseurs');

    }

}
