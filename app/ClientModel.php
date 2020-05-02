<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'client';
    protected $fillable = ['id','nom','prenom', 'adresse', 'code_postale','email','telephone'];
    public $timestamps = false;



    public function commandes()
    {
        return $this->hasMany('App\Commandes');
    }
}
