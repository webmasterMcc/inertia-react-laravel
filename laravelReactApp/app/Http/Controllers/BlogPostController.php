<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class BlogPostController extends Controller
{

    public function ShowCreatePost()
    {
        //

        $users = \App\Models\User::all();
        $user = Auth::user();
        return Inertia::render('Blog/CreatePost' ,[
            'users' => $users,
            'user' => $user
        ]);

    }

}
