<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('index');
Route::resource('/posts', 'PostController');
/* Serie di rotte che gestiscono il meccanismo di autenticazione */
Auth::routes();

/* Serie di rotte che gestiscono il backoffice */
Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')
->group(function(){
    //pagina di atterraggio dopo il login (con il prefix, l'url è /admin)
    Route::get('/', 'HomeController@index')->name('index');

    Route::resource('/posts', 'PostController');
});