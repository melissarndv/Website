<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalog';
    // protected $primaryKey = 'idcatalog';

    public function users()
    {
        return $this->belongsToMany('App\Model\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Model\Product');
    }
}
