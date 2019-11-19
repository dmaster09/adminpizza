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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ingredientes', 'IngredientsController');
Route::resource('category', 'CategoryController');
Route::get('/categoryStatus/{id}/{status}','CategoryController@status')->name('CategoryStatus');
Route::resource('products', 'ProductsController');
Route::get('/IngredienteStatus/{id}/{status}','IngredientsController@status')->name('IngredienteStatus');