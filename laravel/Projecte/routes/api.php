<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\BreachController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\BlogPropiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Resource("blogs",BlogController::class);
Route::apiResource("blogs/{bid}/comments", CommentController::class);

Route::apiResource("users",UserController::class);

Route::apiResource("blogspropis",BlogPropiController::class);

Route::apiResource("breachs",BreachController::class);

Route::post("/login", [UserController::class, 'login'])->name('users.login');
