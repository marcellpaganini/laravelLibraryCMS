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


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',"BookController@index");
Route::get('/edit/{id}',"BookController@edit");
Route::get('/show/{id}',"BookController@show");
Route::get('/create',"BookController@create");
Route::post('/store',"BookController@store");
Route::post('/update/{id}',"BookController@update");
Route::get('/delete/{id}',"BookController@permanentDelete");
