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

Route::prefix('admin')->group(function () {
    Route::get('/produtos', 'ProdutoController@listar')->name('produtos.listar');
    Route::get('/produtos/adicionar', 'ProdutoController@adicionar')->name('produtos.form_adicionar');
    Route::get('/categorias', 'CategoriaController@listar')->name('categorias.listar');
    Route::get('/fornecedores', 'FornecedorController@listar')->name('fornecedores.listar');
});
