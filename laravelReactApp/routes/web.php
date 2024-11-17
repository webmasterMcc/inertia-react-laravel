<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GuzzleAndSwiperController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         "home" => Route::has('/'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// })->name("homepage");

Route::get('/'  , [UserController::class , 'welcome'] )->name("homepage");

 Route::get("/newproducts", function () {
    return Inertia::render('Newproducts');
 }) ;


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//router routes
Route::get("/users", [UserController::class,'loadUsers'])->name("users.index");
Route::post("/edit/user", [UserController::class,'editUser'])->name("users.update");
Route::get("/users/{id}", [UserController::class,'showUser'])->name("showUser");
Route::get('/edit/user/{id}',[UserController::class,'loadEditForm'])->name('users.edit');
Route::post("/edit/user/{id}", [UserController::class,'loadEditForm'])->name("editform");

/// my routes
Route::get("/create_new_user" , [UserController::class, 'createNewUser'])->name("users.create");
Route::post('/createNewUser' , [UserController::class, 'createNewUserPost' ])->name('createUser') ;

//Route::get("/users/create", [UserController::class,'create'])->name("users.create");
//Route::get("/users/{id}/edit", [UserController::class,'edit'])->name("users.edit");
//Route::patch("/users/{id}/update", [UserController::class,'update'])->name("users.update");
//Route::delete("/users/{id}/delete", [UserController::class,'destroy'])->name("users.destroy");


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("swiperslide" , [GuzzleAndSwiperController::class, 'swiperDisplays'])->name('swiper');

require __DIR__.'/auth.php';
