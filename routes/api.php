<?php

use App\Http\Controllers\CuadroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('cuadros', CuadroController::class);
//GET ALL PAINTINGS

//GET SINGLE PAINTING

//GET ALL POSTS

//GET SINGLE POST

//CREATE PAINTING

//CREATE BLOG POST

//DELETE BLOG POST

//DELETE PAINTING

//UPDATE BLOG POST

//UPDATE PAINTING