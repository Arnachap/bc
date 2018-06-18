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

/* Front pages */
Route::get('/', 'PagesController@index');
Route::get('/nos-produits', 'PagesController@products');
Route::get('/service-traiteur', 'PagesController@service');
Route::get('/a-propos', 'PagesController@about');
Route::get('/nous-contacter', 'PagesController@contact');

/* Auth */
Auth::routes();

/* Back pages */
Route::get('/boulish', 'BoulishController@index');
Route::get('/boulish/dishes', 'BoulishController@dishes');
Route::get('/boulish/promotions', 'BoulishController@promotions');
Route::get('/boulish/products', 'BoulishController@products');
Route::get('/boulish/services', 'BoulishController@services');

Route::resource('products', 'ProductsController');