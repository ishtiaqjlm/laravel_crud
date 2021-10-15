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
Route::get('/layout','ProductController@index');
Route::post('/form1','ProductController@abc')->name('form');
Route::get('/listing','ProductController@listing');
Route::get('/delete_product/{id}','ProductController@delete');
Route::get('/edit_product/{id}','ProductController@edit')->name('product.update');
