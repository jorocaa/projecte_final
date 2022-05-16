<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\BreachController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\ReserveController;
use \App\Http\Controllers\BlogPropiController;
use \App\Http\Controllers\MailController;
use \App\Http\Controllers\WikiController;
use \App\Http\Controllers\ApropController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\IncidenciaController;

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

Route::get('/editar_blog', function () {
    return view('blogs.edit');
})->middleware(['auth','verified']);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::Resource("blogs",BlogController::class);

Route::Resource("blogs/{bid}/comments", CommentController::class);
Route::get('blogs/create', [BlogController::class, 'create'])->middleware(['auth','verified'])->name('bcreate');

Route::Resource("users",UserController::class);

Route::Resource("incidencies",IncidenciaController::class);

Route::Resource("near",ApropController::class);

Route::Resource("breachs",BreachController::class);

Route::post("/login", [UserController::class, 'login'])->name('users.login');

Route::Resource("reserves",ReserveController::class);

Route::Resource("blogspropis",BlogPropiController::class);

Route::get('categories', [CategoryController::class, 'index'])->name('categories');
Route::get('categories/{category}', [CategoryController::class, 'indexesp'])->name('categoriesESP');

Route::get('blogs/{blog}/delete', [BlogController::class, 'destroy'])->name('bdestroy');
Route::get('users/{blog}/delete', [UserController::class, 'destroy'])->name('udestroy');
Route::get('incidencies/{incidencia}/delete', [IncidenciaController::class, 'destroy'])->name('idestroy');

Route::get('blogssearch', [BlogController::class, 'searched'])->name('searched');
Route::get('blogsrandom', [BlogController::class, 'randompage'])->name('randompage');

Route::get('blogsa', [BlogController::class, 'getblogs'])->name('bllistar');
Route::get('blogsp', [BlogPropiController::class, 'getblogspropis'])->name('bllistarp');
Route::get('usersa', [UserController::class, 'getusers'])->name('ullistar');
Route::get('blogsp', [IncidenciaController::class, 'getincidencies'])->name('illistar');

Route::get('blogsp/{blog}/delform  ', [BlogPropiController::class, 'beforedestroy'])->name('befdes');
Route::get('blogsp/{blog}/delete', [BlogPropiController::class, 'destroy'])->name('bdestroyp');

Route::get('/send-email', [MailController::class, 'sendEmail']);

Route::post('wikipedias/{blog}',[WikiController::class, 'show'])->name('wikishow');

require __DIR__.'/auth.php';
