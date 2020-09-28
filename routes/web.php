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
    return view('welcome');
});

//closure
Route::get('/profil', function(){
    //return "ini adalah profil siswa";
})->name('profil');

// route name
Route::get("/tesname", function(){
    return route('profil');
});

// parameter
Route::get('profil/{id}', function($id){
    return $id;
});

//controller
Route::get("/tescontroller", "TesController@show");

//resource
Route::resource('siswa', "SiswaController");

Route::get('/home', function(){
   return view('home');
});

Route::get('/about', function(){
   return view('about');
});



