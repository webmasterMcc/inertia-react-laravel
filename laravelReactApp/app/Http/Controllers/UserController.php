<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function loadUsers(){

          $users = \App\Models\User::all();
          $user = auth::user();


        return Inertia::render("Users/Users" , [
            'users' => $users,
            'user' => $user,  
            'userCount' => count($users)
        ]);
        
    }
}
