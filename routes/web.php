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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'MainPageController@store');


Route::get('/site', 'MainPageController@index');

/*
| Registration   
*/
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

/* 
| Login
*/
Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');

/* 
| CRUD
*/
Route::get('/add_film','FilmsController@create');
Route::post('/add_film', 'FilmsController@store');

Route::get('/user_films', [
    'uses' => 'FilmsController@getAllUserFilms',
    'as' => 'user_films'    
]);

Route::get('film/delete/{id}',[
    'uses' => 'FilmsController@delete',
    'as' => 'film.delete'
]);

Route::get('film/update/{id}',[
    'uses' => 'FilmsController@update',
    'as' => 'film.update'
]);

Route::post('film/save/{id}', [
    'uses' => 'FilmsController@save',
    'as' => 'film.save'
]);

/*
| All movies 
*/
Route::get('/all_films', 'FilmsController@getAllFilms');

Route::get('film/{id}',[
    'uses' => 'FilmsController@filmInfo',
    'as' => 'film.info'
]);

/*
| Notes and comments
*/
Route::post('/add_note', 'NotesController@store');

Route::get('/delete_note/{id}', [
    'uses' => 'NotesController@delete',
    'as' => 'notes.delete'
]);

/*
| Directors 
*/
Route::get('/add_director', 'DirectorsController@create');
Route::post('/add_director', 'DirectorsController@store');