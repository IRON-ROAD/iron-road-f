<?php

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


route::get('/',['as'=>'login', 'uses'=>'PageController@login']);
route::get('master',['as'=>'master', 'uses'=>'PageController@master']);
route::get('home',['as'=>'home', 'uses'=>'PageController@home']);