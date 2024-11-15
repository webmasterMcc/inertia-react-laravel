<?php

namespace App\Http\Controllers;


use \App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\guzzleSwipper;


use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class UserController extends Controller
{
    //

    public function loadUsers(){

          $users = \App\Models\User::all();
          $user = auth()->user();

        return Inertia::render("Users/Users" , [
            'users' => $users,
            'user' => $user,
            'userCount' => count($users)
        ]);

    }




    public function welcome(){

        /// model
       $guzzleDATA = new guzzleSwipper();
       $fetchDataInstagram = $guzzleDATA->fetchInstagramLuxmarble() ;


       return Inertia::render('Welcome', [
           'canLogin' => Route::has('login'),
           'canRegister' => Route::has('register'),
           "home" => Route::has('/'),
           'laravelVersion' => Application::VERSION,
           'phpVersion' => PHP_VERSION,
            "fetchDATA" => $fetchDataInstagram ,
       ]);
   }






}
