<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]) ;
         if($request->hasFile('image')){
             $file = $request->file('image');
             $filename = time() . '.' . $file->getClientOriginalExtension();
             $file->move(public_path('uploads'), $filename);
             $imagePath = 'uploads/' . $filename;
         }


        BlogPost::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'author' => $validatedData['author'],
            'image' => $imagePath,
            //'image' => $validatedData['image'],

        ]);

        return redirect()->route('blog')->with('success', 'User created successfully');
    }

    public function ShowSinglePost($id){
        $posts = BlogPost::find($id) ;
        // dd($posts);

        return inertia()->render('Blog/SinglePost' , [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'home' => Route::has('/'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'post' => $posts,
        ]) ;

    }

}
