<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    public function commandesFournisseurs()
    {
        return $this->hasMany('App\CommandesFournisseurs');
    }
}
