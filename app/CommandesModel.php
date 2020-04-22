<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function article()
    {
        return $this->belongsToMany('App\Articles', 'commandes_has_articles');
    }
}
