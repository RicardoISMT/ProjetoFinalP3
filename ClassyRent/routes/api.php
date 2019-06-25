<?php

use Illuminate\Http\Request;

use App\users;
use App\places;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Users
Route::get('users', 'UsersController@index');
Route::get('users/{users}', 'UsersController@show');
Route::post('users', 'UsersController@store');
Route::put('users/{users}', 'UsersController@update');
Route::delete('users/{users}', 'UsersController@delete');

//Places
Route::get('places', 'PlacesController@index');
Route::get('places/{places}', 'PlacesController@show');
Route::post('places', 'PlacesController@store');
Route::put('places/{places}', 'PlacesController@update');
Route::delete('places/{places}', 'PlacesController@delete');