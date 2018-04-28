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
})->name('home');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/logar', 'LoginController@logar')->name('logar');
Route::get('/listar','ProdutoController@listar')->name('listarProduto');

Route::group(['prefix' => '/admin'], function () {
    Route::get('/','AdminController@admin')->name('admin');
    Route::group(['prefix' => '/produto'], function () {
    Route::get('/cadastro', 'ProdutoController@cadastro')->name('cadastro');
    Route::post('/cadastroValidate', 'ProdutoController@cadastroValidate')->name('cadastroValidate');
    Route::get('/excluir', 'ProdutoController@excluir')->name('excluir');
    Route::post('/excluirValidate', 'ProdutoController@excluirValidate')->name('excluirValidate');
    });
});
