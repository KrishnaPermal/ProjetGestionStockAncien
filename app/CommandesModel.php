<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    
    protected $table = 'commandes';
    protected $fillable = ['id_client','id_commandes'];
    public $timestamps = false;


    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function article()
    {
        return $this->belongsToMany('App\Articles', 'commandes_has_articles');
    }
}
