<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin','App\Http\Controllers\AdminController@index');//middleware and controller route

Route::view('details','userview');

Route::post('submit','App\Http\Controllers\CompanyController@store');
//----------------------------------------------------------------------------------
//Session creation and usage

Route::get('session/get','App\Http\Controllers\HomeController@accessSessionData');
Route::get('session/set','App\Http\Controllers\HomeController@storeSessionData');
Route::get('session/remove','App\Http\Controllers\HomeController@deleteSessionData');
Route::get('session/flash','App\Http\Controllers\HomeController@flashSessionData');