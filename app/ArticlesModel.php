<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'articles';
    protected $fillable = ['ref_article','designation','description','fournisseur','quantite','prix'];
    public $timestamps = false;




    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function commandes()
    {
        return $this->belongsToMany('App\Commandes','commandes_has_articles');
    }

    public function commandesFournisseurs()
    {
        return $this->belongsToMany('App\CommandesFournisseurs','commandesFA');
    }
}
