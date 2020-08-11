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
//diz que a rota a ser seguida é a classe Usuario na função cadastrar
Route::get('/', 'Usuario@cadastrar')->name('home');
// rota que ira salvar o usuario
Route::post('/salvar', 'Usuario@salvar')->name('salvar');

