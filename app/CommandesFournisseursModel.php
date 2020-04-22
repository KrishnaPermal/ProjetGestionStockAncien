<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommandesFournisseurs extends Model
{
    public function fournisseur()
    {
        return $this->belongsTo('App\Fournisseur');
    }

    public function article()
    {
        return $this->belongsToMany('App\Articles', 'commandesFA');
    }
}
