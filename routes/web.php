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

Auth::routes();

Route::get('/', 'FrontendController@loadContent')->name('home');
Route::post('/empleos', 'FrontendController@sendCV')->name('send_cv');
Route::post('/contacto', 'FrontendController@contacto')->name('contacto');
Route::get('/{page?}', 'FrontendController@loadContent')->name('loadContent');

