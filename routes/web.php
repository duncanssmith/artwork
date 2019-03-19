<?php
/**
 * File doc
 *
 * @phpversion php7.3.0
 * @category   Controller
 * @package    Artwork
 * @author     Duncan Smith <duncanssmith@gmail.com>
 * @license    12341234 <blah@blah.com>
 * @link       Wombat <duncanssmith@gmail.com>
 */

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

Route::resource('artworks', 'ArtworksController');

Route::resource('artists', 'ArtistsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
