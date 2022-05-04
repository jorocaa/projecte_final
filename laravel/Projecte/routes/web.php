<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\BreachController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\ReserveController;
use \App\Http\Controllers\BlogPropiController;

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

Route::resource('/', HomeController::class);

Route::get('/crear_blog', function () {
    return view('blogs.create');
});

Route::get('/editar_blog', function () {
    return view('blogs.edit');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::Resource("blogs",BlogController::class);

Route::Resource("blogs/{bid}/comments", CommentController::class);

Route::Resource("users",UserController::class);

Route::Resource("breachs",BreachController::class);

Route::post("/login", [UserController::class, 'login'])->name('users.login');

Route::Resource("reserves",ReserveController::class);

Route::Resource("blogspropis",BlogPropiController::class);

Route::get('datatable', 'DataTableController@index'); 

Route::get('get', 'DataTableController@get');

require __DIR__.'/auth.php';
