<?php

namespace App\Http\Controllers;

use App\Model\Role;
use App\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function see(Request $request)
    {
       $role = new Role();
        $users = User::find($users->id);
 
         $role->iduser = $users->id;
         $role->save();

         return view('home');
    }
}