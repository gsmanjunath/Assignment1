<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin','App\Http\Controllers\AdminController@index');//middleware and controllers



Route::view('details','userview');

Route::post('insert','App\Http\Controllers\CompanyController@store');


//-------------------------------------------------------------------
//crud operations,resource controller

//fetching all record and paginations usage
Route::get('/posts',[PostController::class,'index']);

//creating new post into db
Route::post('/post',[PostController::class,'store']);

//fetching single record
Route::get('/posts/{id}',[PostController::class,'show']);


Route::put('/posts/{id}',[PostController::class,'update']);

Route::delete('/posts/{id}',[PostController::class,'destroy']);




