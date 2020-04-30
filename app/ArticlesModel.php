<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'articles';
    protected $fillable = ['réf_article','designation','description','fournisseur','quantité','prix'];
    public $timestamps = false;




    public function catégorie()
    {
        return $this->belongsTo('App\Catégorie');
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
