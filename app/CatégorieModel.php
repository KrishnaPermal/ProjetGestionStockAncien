<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catégorie extends Model
{
    public function article()
    {
        return $this->hasMany('App\Articles');
    }
}
