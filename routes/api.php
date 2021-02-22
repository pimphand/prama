<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'API\AuthController@login');
Route::post('register', 'API\AuthController@register');
//pemesanan
Route::post('pemesanan', 'API\PemesananController@store');
Route::get('pemesanan', 'API\PemesananController@index');
Route::get('pemesanan/{id}', 'API\PemesananController@show');
Route::post('pemesanan/{id}', 'API\PemesananController@update');
Route::delete('hapus/pemesanan/{id}', 'API\PemesananController@destroy');

//map
Route::post('map', 'API\MapController@store');
Route::get('map', 'API\MapController@index');
Route::get('map/{id}', 'API\MapController@show');
Route::post('map/{id}', 'API\MapController@update');
Route::delete('hapus/map/{id}', 'API\MapController@destroy');


Route::middleware('auth:api')->group(function () {
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/logout', 'API\AuthController@logout');
    });
});
