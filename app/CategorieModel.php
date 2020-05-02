<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';
    protected $fillable = ['id','categorie',];
    public $timestamps = false;

    public function article()
    {
        return $this->hasMany('App\Articles');
    }
}
