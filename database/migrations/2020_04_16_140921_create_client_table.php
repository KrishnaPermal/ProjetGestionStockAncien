<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //ici on a le code de création de la table et de ses colonnes 
    {
        Schema::create('client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom',255);
            $table->string('prenom',255);
            $table->string('adresse',255);
            $table->string('code_postale',255);
            $table->string('telephone',255);
            $table->string('email',255);
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //ici on a le code de suppression de la table
    {
        Schema::dropIfExists('client');
    }
}


