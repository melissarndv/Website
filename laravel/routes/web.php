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

Route::get('/home', 'CatalogController@see')->name('home');
// Route::get('/admin', 'AdminController@test')->name('form_admin');
Route::get('/catalog', 'CatalogController@see')->name('catalog');
Route::get('/product/{product}', 'ProductController@see')->name('product');
// Route::get('/panier/{product}', 'AdminController@panier')->name('panier');
Route::get('/panier', 'PanierController@panier')->name('panier');

Route::get('/admin', 'AdminController@test')->name('form_admin');
Route::post('/admin', 'AdminController@ajout')->name('ajout');
Route::get('/admin', 'AdminController@bloc')->name('bloc');
