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

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::post('/entrar','LoginController@login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get( '/detalhes/{id}',"CamisasController@detalhes");
Route::get( '/excluir/{id}', "CamisasController@excluir");
Route::get( '/updateform/{id}', "CamisasController@updateform");
Route::post('/update', "CamisasController@update");
Route::get('/AdicionarProdutos', 'CamisasController@adicionaform');
Route::get( 'listadecamisas','CamisasController@fornecedor');
Route::post('/adicionar', 'CamisasController@adicionar');
Route::get('listadecamisas','CamisasController@listagem');