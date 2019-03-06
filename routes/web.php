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

Route::get('/', 'PagesController@home');

Route::get('/welcome', 'PagesController@welcome');

Route::get('/about', 'PagesController@about');

Route::get('/login', 'PagesController@login');

/*
    GET /artworks (index)
    GET /artworks/create (create)
    GET /artworks/1 (show)
    POST /artworks (store)
    GET /artworks/1/edit (edit)
    PATCH /artworks/1 (update)
    DELETE /artworks/1 (destroy)

*/

Route::resource('artworks', 'ArtworksController');

/*
Route::get('/artworks', 'ArtworksController@index');
Route::get('/artworks/create', 'ArtworksController@create');
Route::get('/artworks/{artwork}', 'ArtworksController@show');
Route::post('/artworks', 'ArtworksController@store');
Route::get('/artworks/{artwork}/edit', 'ArtworksController@edit');
Route::patch('/artworks/{artwork}', 'ArtworksController@update');
Route::delete('/artworks/{artwork}', 'ArtworksController@destroy');
*/
