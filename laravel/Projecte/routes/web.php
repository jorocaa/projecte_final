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

// HOME PAGE
Route::get('/', function () {
    return view('home');
});

// PARA PROBRAR, AÑADIR EN CRUD RUTA
Route::get('/makepost', function(){
    return view('crear_post');
});
