<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommandesFournisseurs extends Model
{

    protected $table = 'commandesfournisseurs';
    protected $fillable = ['id','numero_commande', 'date', 'quantite', 'id_fournisseur'];
    public $timestamps = false;


    public function fournisseur()
    {
        return $this->belongsTo('App\Fournisseur');
    }

    public function article()
    {
        return $this->belongsToMany('App\Articles', 'commandesFA');
    }
}
