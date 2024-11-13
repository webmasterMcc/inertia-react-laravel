<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    //

    public function loadUsers(){

        return Inertia::render("Users/Users");
        
    }
}
