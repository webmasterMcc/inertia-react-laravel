<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class BlogPostController extends Controller
{

    public function ShowPosts()
    {
        // showing the blogs posts
        $users = \App\Models\User::all()->first();
        $user = Auth::user();
        return Inertia::render('Blog/CreatePost' ,[
            'users' => $users,
            'user' => $user
        ]);

    }

    public function CreateNewPosts(Request $request){
         // dd($request->all());

        $validatedData = $request->validate([
            'title' => 'string|required|max:255',
            'description' => 'string|required|max:255',
            'author' => 'string|required|max:255',
            'image' => 'string|required|max:255',

        ]) ;

        BlogPost::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'author' => $validatedData['author'],
            'image' => $validatedData['image'],

        ]);

        return redirect()->route('blog')->with('success', 'User created successfully');
    }

}
