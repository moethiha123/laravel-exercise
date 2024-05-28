<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
})->name("home");
// Route::get('/users', function () {
//     $userLists = User::all();
//     // return $userLists;

//     return view('users.index', ["userlists" => $userLists]);
// })->name("users");
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/project', function () {
    return view('project');
})->name('project');
Route::get('/service', function () {
    return view('service');
})->name('service');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get("/users", [UserController::class, 'index'])->name('users.index');
Route::get("/users/create", [UserController::class, 'create'])->name('users.create');
Route::post("/users", [UserController::class, 'store'])->name('users.store');
Route::get("/users/{user}", [UserController::class, 'show'])->name('users.show');
Route::get("/users/{user}/edit", [UserController::class, 'edit'])->name('users.edit');
Route::put("/users/{user}", [UserController::class, 'update'])->name('users.update');
Route::delete("/users/{user}", [UserController::class, 'destroy'])->name('users.destroy');