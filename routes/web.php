<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('post.index');
});

Route::get("/", "PostController@index")->name("posts.index");
Route::get("/posts", "PostController@index")->name("posts.index");
Route::get("/posts/create", "PostController@create")->name("posts.create");
Route::post("/posts", "PostController@store")->name("posts.store");

Route::get("/posts/{post}", "PostController@show")->name("posts.show");
Route::put("/posts/{post}", "PostController@update")->name("posts.update");
Route::delete("/posts/{post}", "PostController@delete")->name("posts.delete");


//Route::get("/posts/create", "PostController@create");
//Route::get("/posts/update", "PostController@update");
//Route::get("/posts/delete", "PostController@delete");



