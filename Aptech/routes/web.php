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



Route::get("/hello",function(){

	return view('index');
});


//   Routs for Students

Route::get("Students/index","StudentController@index");
Route::get("Students/create","StudentController@create");

Route::post("Students/submit","StudentController@submit");

















