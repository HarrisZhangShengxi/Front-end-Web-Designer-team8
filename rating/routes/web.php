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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// team rating function
Route::get("/teamList", "TeamController@teamList");
Route::get("/teamDetail", "TeamController@teamDetail");
Route::post('/saveRating', 'TeamController@saveRating');

//player rating function
Route::get('/playerList', 'PlayerController@playerList');
Route::get('/playerDetail', 'PlayerController@playerDetail');

//Search
Route::get("/search", "SearchController@find_team");
