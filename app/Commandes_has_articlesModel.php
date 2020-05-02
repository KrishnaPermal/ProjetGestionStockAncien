<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandes_has_articlesModel extends Model
{
    protected $table = 'commandes_has_articles';
    protected $fillable = ['id_commandes','id_article','quantite'];
    public $timestamps = false;


    public function commandes()
    {
        return $this->belongsTo('App\Commandes');
    }

    public function article()
    {
        return $this->belongsToMany('App\Articles');
    }
}
