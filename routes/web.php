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

Route::get('/produtos', 'ProdutoController@index')->name('listagem');
Route::get('/produtos/show/{id}', 'ProdutoController@show');
Route::get('/produtos/novo', 'ProdutoController@novo' );
Route::post('/produtos/create', 'ProdutoController@create');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('send', 'MailController@send');
Route::get('Contato', 'MailController@form');
