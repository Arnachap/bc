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

Route::get('/', 'PagesController@index');
Route::get('/nos-produits', 'PagesController@products');
Route::get('/service-traiteur', 'PagesController@service');
Route::get('/a-propos', 'PagesController@about');
Route::get('/nous-contacter', 'PagesController@contact');

Auth::routes();

Route::get('/boulish', 'BoulishController@index');
