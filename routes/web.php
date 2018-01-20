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

//-----------------Finance Routes---------------------------------
route::get('voucher_entry',['as'=>'voucher_entry', 'uses'=>'PageController@voucher_entry']);
route::get('dropped_voucher',['as'=>'dropped_voucher', 'uses'=>'PageController@dropped_voucher']);
route::get('received_voucher',['as'=>'received_voucher', 'uses'=>'PageController@received_voucher']);
route::get('paid_voucher',['as'=>'paid_voucher', 'uses'=>'PageController@paid_voucher']);
route::get('unpaid_voucher',['as'=>'unpaid_voucher', 'uses'=>'PageController@unpaid_voucher']);
route::post('insert_voucher',['as'=>'insert_voucher', 'uses'=>'VoucherController@insert_voucher']);


//----------------/finance routes--------------------------------