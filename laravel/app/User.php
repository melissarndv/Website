<?php

namespace App;

use Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';
    // protected $primaryKey = 'iduser';

    public function roles()
    {
        return $this->hasMany('App\Model\Role');
    }

    public function products()
    {
        return $this->belongsToMany('App\User');
    }

    public function productstwo()
    {
        return $this->belongsToMany('App\User');
    }

    public function getConnectedPeople()
    {
        return count(User::where('id', '=', Auth::user()->id)->get());
    }
}
