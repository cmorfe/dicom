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

Route::get('', 'PageController@home')->name('home');
Route::get('empresas', 'PageController@empresa')->name('empresa');
Route::get('productos', 'PageController@productos')->name('productos');
Route::get('presupuestos', 'PageController@presupuestos')->name('presupuestos');
Route::get('contacto', 'PageController@contacto')->name('contacto');

