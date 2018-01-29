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

/*
|*************
| GET Routes *
|*************
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('coaches', [
	'as' => 'coaches',
	'uses' => 'PagesController@coaches'
]);

Route::get('gym', [
	'as' => 'gym',
	'uses' => 'PagesController@gym'
]);

Route::get('contact', [
	'as' => 'contact',
	'uses' => 'ContactController@contact'
]);

/*
|**************
| POST Routes *
|**************
*/

Route::post('contact', [
	'as' => 'contact_form',
	'uses' => 'ContactController@ContactForm'
]);
