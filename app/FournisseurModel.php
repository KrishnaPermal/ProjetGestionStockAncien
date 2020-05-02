<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{

    protected $table = 'fournisseur';
    protected $fillable = ['id','nom', 'prenom', 'tel', 'email'];
    public $timestamps = false;


    public function commandesFournisseurs()
    {
        return $this->hasMany('App\CommandesFournisseurs');
    }
}
