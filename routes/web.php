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
    return view('welcome');
});

Route::resource('usuario', 'UsuarioController');

Route::resource('rota', 'RotasController');

Route::resource('perfil', 'UsuarioPerfilController');

Route::resource('tipo', 'TipoPagamentoController');

Route::resource('operacao', 'OperacaoController');

Route::resource('operador', 'OperadorController');

Route::resource('cnpj', 'CnpjClienteController');

Route::resource('cliente', 'ClienteController');

Route::resource('clientes', 'ClientesController');

Route::resource('user_operacao', 'UserOperacaoController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

