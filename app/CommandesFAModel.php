<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommandesFAModel extends Model
{
    protected $table = 'commandeFA';
    protected $fillable = ['id_commandes_fournisseur','id_article','quantite'];
    public $timestamps = false;


    public function commandesFA()
    {
        return $this->belongsTo('App\Commandes','commandes_fournisseurs');
    }

    public function article()
    {
        return $this->belongsToMany('App\Articles');
    }
}
