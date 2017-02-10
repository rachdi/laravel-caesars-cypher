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
Route::get('/product','ProductController@getIndex');
Route::post('/product/Ajout/{id}','ProductController@Ajoutstock');
Route::post('/product/Enlever/{id}','ProductController@Enleverstock');
Route::post('/product/ajoutproduit','ProductController@AjoutProduit');
Route::post('/product/product','ProductController@Produitajouter');
Route::post('/product/supprimer/{id}','ProductController@DeleteProduct');
Route::get('/product/edit/{id}','ProductController@getEdit');
Route::post('/product/{id}','ProductController@update');