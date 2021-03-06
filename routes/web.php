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

// Logged In Users will Redirect to the path defined in RouteServiceProvider
// public const HOME = '/artists';
// Route::get('/', function(){
//     return view('landing');
// })->middleware('guest');

Route::get('/', 'HomeController@index');

Auth::routes();

Route::resource('artists', 'ArtistsController');

Route::get('/works/{artist_id}', 'WorksController@index');

Route::get('/works/create/{artist_id}', 'WorksController@create');

Route::post('/works/create/{artist_id}', 'WorksController@store');

Route::get('/works/{work_id}/show', 'WorksController@show');

Route::get('/works/{work_id}/edit', 'WorksController@edit');

Route::put('/works/{work_id}/update', 'WorksController@update');

Route::delete('/works/{work_id}/destroy', 'WorksController@destroy');

Route::resource('misc', 'MiscController');