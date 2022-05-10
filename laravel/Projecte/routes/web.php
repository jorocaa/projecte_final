<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\BreachController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\ReserveController;
use \App\Http\Controllers\BlogPropiController;
use \App\Mail\MailReserve;
use Illuminate\Support\Facades\Mail;

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
})->middleware(['auth','verified']);

Route::get('/editar_blog', function () {
    return view('blogs.edit');
})->middleware(['auth','verified']);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::Resource("blogs",BlogController::class);

Route::Resource("blogs/{bid}/comments", CommentController::class);

Route::Resource("users",UserController::class);

Route::Resource("breachs",BreachController::class);

Route::post("/login", [UserController::class, 'login'])->name('users.login');

Route::Resource("reserves",ReserveController::class);

Route::Resource("blogspropis",BlogPropiController::class);

Route::get('blogs/{blog}/delete', [BlogController::class, 'destroy'])->name('bdestroy');
Route::get('users/{blog}/delete', [UserController::class, 'destroy'])->name('udestroy');

Route::get('blogsrandom', [BlogController::class, 'randompage'])->name('randompage');

Route::get('blogsa', [BlogController::class, 'getblogs'])->name('bllistar');
Route::get('blogsp', [BlogPropiController::class, 'getblogspropis'])->name('bllistarp');

Route::get('usersa', [UserController::class, 'getusers'])->name('ullistar');

Route::get('blogsp/{blog}/delform  ', [BlogPropiController::class, 'beforedestroy'])->name('befdes');
Route::get('blogsp/{blog}/delete', [BlogPropiController::class, 'destroy'])->name('bdestroyp');

Route::get('reserva', function (){
    $correu = new MailReserve;
    Mail::to('joroca@fp.insjoaquimmir.cat')->send($correu);

    return "Missatge enviat al correu de l'empresa. Es ficaran en contacte amb tú. Gràcies! :)";
});

require __DIR__.'/auth.php';
