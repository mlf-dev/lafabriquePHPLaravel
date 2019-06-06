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

Route::get('/', 'Shop\MainController@home')->name('home');

Route::get('/product/{id}', 'Shop\MainController@product')->name('voir_produit');

Route::get('/products', 'Shop\MainController@products')->name('voir_produits');

Route::get('/category/{name}','Shop\MainController@category')->name('voir_produits_par_categorie');