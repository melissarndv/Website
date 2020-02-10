<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    // protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function permissions()
    {
        return $this->hasMany('App\Model\Permission');
    }
}
