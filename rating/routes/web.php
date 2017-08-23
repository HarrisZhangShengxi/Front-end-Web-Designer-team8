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
//home page
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//home page
//Route::get('/rating', function (){
//    return view(('rating'));
//});

// team rating function
Route::get("/teamList", "TeamController@teamList");
Route::get("/teamDetail", "TeamController@teamDetail");
Route::post('/saveTeamRating', 'TeamController@saveTeamRating');

//Route::post('/saveTeamRating', ['middleware' => 'auth', function()
//{
//    echo "teat information";
//}]);

//player rating function
Route::get('/playerList', 'PlayerController@playerList');
Route::get('/playerDetail', 'PlayerController@playerDetail');
Route::post('/savePlayerRating', 'PlayerController@savePlayerRating');

//Search
Route::get("/searching", "SearchController@searching");
