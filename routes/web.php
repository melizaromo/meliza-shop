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
    return view('Home');
})->middleware('auth');

Route::get('/Regalo', function () {
    return view('Regalo');
})->middleware('auth');

Route::get('/Producto', function () {
    return view('Producto');
})->middleware('auth');

Route::resource('/Inventario', 'ProductoController')->middleware('auth');

Route::get('/Contacto', function () {
    return view('Contacto');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
