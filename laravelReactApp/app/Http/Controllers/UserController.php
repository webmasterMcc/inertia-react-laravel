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

    public function showUser( $id){
//
        //  $id = $request->input('id');
          $user = User::find($id) ;
          return inertia()->render('Users/SingleUser' , [
              'user' => $user,
          ]);
         // return response()->json($user);

        }
        public function editUser(Request $request){
        //dd($request->all());
        $user = User::find($request->id); // get the id user to update
       // dd($user);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]) ;
        //create query to update the database

        $user->update([
            'name'     => $request->name,
            'email'    => $request->email,
        ]);
        //return redirect()->back();
        return to_route('users.index');
        }


    public function loadUsers(){

          $users = \App\Models\User::all();
       $user = Auth::user();

        return Inertia::render("Users/Users" , [
            'users' => $users,
            'user' => $user,
            'userCount' => count($users)
        ]);

    }

   public function loadEditForm($id){
       $user = auth::user();
       $userDetails = User::find($id);
        return Inertia::render("Users/EditForm"  , [
            'user' => $user,
            'user_details' => $userDetails,
        ]);
   }


    public function welcome(){

        /// model
       $guzzleDATA = new guzzleSwipper();
       $fetchDataInstagram = $guzzleDATA->fetchInstagramLux() ;


       return Inertia::render('Welcome', [
           'canLogin' => Route::has('login'),
           'canRegister' => Route::has('register'),
           'home' => Route::has('/'),
           'laravelVersion' => Application::VERSION,
           'phpVersion' => PHP_VERSION,
             'fetchDATA' => $fetchDataInstagram ,
       ]);
   }


   public function createNewUser($id=null){
       $users = \App\Models\User::all();
        return Inertia::render("Users/NewUser"  , [
            "users"=> $users ,
        ]) ;
   }

   public function createNewUserPost(Request $request){
      // dd($request->all()) ;
       // Validate the incoming request data
       $validatedData = $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|email|unique:users,email',
           'password' => 'required|string|min:6',
       ]);

       //create a new user from the dashboard
      User::create([
           'name'=> $validatedData['name'],
           'email'=> $validatedData['email'],
           'password'=> Hash::make($validatedData['password']) ,
           ]);
//       User::create([
//           'name' => 'pedro',
//           'email' => 'email@email.com', // Corrected closing quote
//           'password' => Hash::make('1234') // Hash the password before storing
//       ]);
       return redirect()->route('users.index')->with('success', 'User created successfully');

   }


}
