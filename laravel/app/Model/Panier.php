<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $table = 'panier';
    // protected $primaryKey = 'idpanier';

    public function users()
    {
        return $this->belongsToMany('App\Model\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Model\Product');
    }
}
