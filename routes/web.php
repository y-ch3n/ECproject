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

Route::get('/intro', function () {
    return view('intro');
});

Route::get('menu', 'ItemController@showMenuList');
Route::get('buy', 'ItemController@showBuyList');
Route::get('pic/{id}','ItemController@showPicture');
Route::get('order/create','OrderController@create');
Route::get('customer/create','CustomerController@create');

Route::get('/success/{id}','ItemController@success');



