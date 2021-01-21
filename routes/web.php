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

Route::get('produtos/novo', 'ProdutoController@create');
Route::post('produtos/novo', 'ProdutoController@store')->name('registrar_produto');
Route::get('produtos/detalhes/{id}', 'ProdutoController@show');
Route::get('produtos/editar/{id}', 'ProdutoController@edit');
Route::post('produtos/editar/{id}', 'ProdutoController@update')->name('alterar_produto');
Route::get('produtos/excluir/{id}', 'ProdutoController@delete');
Route::post('produtos/excluir/{id}', 'ProdutoController@destroy')->name('excluir_produto');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
