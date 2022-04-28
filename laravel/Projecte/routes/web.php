<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

// HOME PAGE
Route::get('/', function () {
    return view('home');
})->name('home');;

Route::get('/register', function () {
    return view('register');
})->name('auth.register');

Route::get('/login', function () {
    return view('login');
})->name('auth.login');

//Route::resource('login','UserController');

// PARA PROBRAR, AÑADIR EN CRUD RUTA
//Route::get('/makepost', function(){
//    return view('crear_post');
//});
