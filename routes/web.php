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

Route::get('/', 'FrontendController@getIndex');
Route::get('/contact-us', 'FrontendController@contactUs');
Route::get('/products/{id}', 'FrontendController@products');

Route::post('/contact-us', 'FrontendController@contactUsPost');

